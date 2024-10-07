import { useEffect, useRef, useState } from 'react';
import * as THREE from 'three';
// @ts-ignore
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls';
import { orbitObject } from './types/orbitObjetc';
import objectsData from './assets/objects.json';

const OrbitalSimulation = () => {
  const mountRef = useRef<HTMLDivElement | null>(null);
  const [objects, setObjects] = useState<orbitObject[]>([]);
  const [hoveredObject, setHoveredObject] = useState<string | null>(null); // Estado para mostrar el nombre al hacer hover
  const [showOrbits, setShowOrbits] = useState(true); // Estado para controlar la visibilidad de las órbitas
  const orbitsRef = useRef<THREE.Line[]>([]); // Definimos `orbits` como una referencia
  const raycaster = new THREE.Raycaster();
  const mouse = new THREE.Vector2();
  let frameCount = 0; // Contador de cuadros para limitar el raycasting

  useEffect(() => {
    setObjects(objectsData);
  }, []);

  useEffect(() => {
    if (!objects.length) return;

    const mount = mountRef.current;

    if (!mount) return;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, mount.clientWidth / mount.clientHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(mount.clientWidth, mount.clientHeight); // Ajustar el tamaño del renderer al tamaño del contenedor
    mount.appendChild(renderer.domElement);

    const controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dampingFactor = 0.1; // Ajustar amortiguación para mejorar rendimiento

    const scale = 3;
    const comets: THREE.Mesh[] = [];
    let t = 0;

    // Cargar las texturas
    const textureLoader = new THREE.TextureLoader();
    const earthTexture = textureLoader.load('./src/tierrap.jpg');
    const otherTextures = [
      textureLoader.load('./src/asteroid.jpg'),
      textureLoader.load('./src/asteroid.jpg'),
      textureLoader.load('./src/asteroid.jpg'),
      textureLoader.load('./src/asteroid.jpg'),
      textureLoader.load('./src/asteroid.jpg'),
    ];
    

    const calculateOrbit = (objectData: orbitObject): THREE.Vector3[] => {
      const { e, i_deg, q_au_1 } = objectData;
      const eccentricity = parseFloat(e);
      const inclination = parseFloat(i_deg) * (Math.PI / 180);
      const perihelionDistance = parseFloat(q_au_1);

      const points: THREE.Vector3[] = [];
      const numPoints = 100; // Reducir el número de puntos para mejorar rendimiento

      for (let j = 0; j < numPoints; j++) {
        const theta = 2 * Math.PI * (j / numPoints);
        const r = (perihelionDistance * (1 + eccentricity)) / (1 + eccentricity * Math.cos(theta));

        const x = r * Math.cos(theta) * scale;
        const y = r * Math.sin(theta) * Math.cos(inclination) * scale;
        const z = r * Math.sin(theta) * Math.sin(inclination) * scale;

        points.push(new THREE.Vector3(x, y, z));
      }

      return points;
    };

    const createTextSprite = (text: string) => {
      const canvas = document.createElement('canvas');
      const context = canvas.getContext('2d');
      if (context) {
        context.font = '24px Arial';
        context.fillStyle = 'white';
        context.fillText(text, 0, 24);
      }
      const texture = new THREE.Texture(canvas);
      texture.needsUpdate = true;

      const spriteMaterial = new THREE.SpriteMaterial({ map: texture });
      const sprite = new THREE.Sprite(spriteMaterial);
      sprite.scale.set(2, 1, 1); // Ajustar el tamaño del sprite
      return sprite;
    };

    // Limpiar el array `orbitsRef.current` antes de agregar nuevas órbitas
    orbitsRef.current = [];

    // Crear órbitas, cometas y textos
    objects.forEach((objectData) => {
      const isEarth = objectData.object_name === "Earth";
      const orbitPoints = calculateOrbit(objectData);

      const geometry = new THREE.BufferGeometry().setFromPoints(orbitPoints);
      const material = new THREE.LineBasicMaterial({
        color: isEarth ? 0x00ff00 : Math.random() * 0xffffff, // Verde para la Tierra
      });
      const orbitLine = new THREE.Line(geometry, material);
      orbitsRef.current.push(orbitLine); // Guardamos la órbita en el array de referencia
      scene.add(orbitLine);

      // Crear geometría de cometa con texturas
      const cometGeometry = new THREE.SphereGeometry(isEarth ? 0.1 : 0.05, 16, 16);
      const cometMaterial = new THREE.MeshBasicMaterial({
        map: isEarth ? earthTexture : otherTextures[Math.floor(Math.random() * otherTextures.length)], // Asignar texturas
      });
      const comet = new THREE.Mesh(cometGeometry, cometMaterial);
      comet.userData = { name: objectData.object_name }; // Guardamos el nombre del cometa en su `userData`
      scene.add(comet);

      comets.push(comet);
    });

    const onMouseMove = (event: MouseEvent) => {
      const rect = renderer.domElement.getBoundingClientRect(); // Obtener el tamaño del contenedor
      // Calculamos la posición del mouse en coordenadas de normalizadas (-1 a +1)
      mouse.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
      mouse.y = -((event.clientY - rect.top) / rect.height) * 2 + 1;
    };

    const animateComet = () => {
      objects.forEach((objectData, index) => {
        const orbitPoints = calculateOrbit(objectData);
        const point = orbitPoints[Math.floor(t) % orbitPoints.length];

        // Actualizar la posición de cada cometa
        comets[index].position.set(point.x, point.y, point.z);
      });

      t += 0.1; // Control de velocidad de animación

      // Hacer el raycasting cada 5 cuadros para mejorar el rendimiento
      if (frameCount % 5 === 0) {
        raycaster.setFromCamera(mouse, camera);
        const intersects = raycaster.intersectObjects(comets);

        if (intersects.length > 0) {
          const intersectedObject = intersects[0].object;
          setHoveredObject(intersectedObject.userData.name);
        } else {
          setHoveredObject(null); // Si no hay intersección, no mostrar nada
        }
      }

      frameCount++;
    };

    const handleResize = () => {
      const width = window.innerWidth;
      const height = window.innerHeight;
      renderer.setSize(width, height);
      camera.aspect = width / height;
      camera.updateProjectionMatrix();
    };

    const animate = (time: number) => {
      requestAnimationFrame(animate);
      animateComet();
      controls.update();
      renderer.render(scene, camera);
    };

    animate(0);

    camera.position.set(0, 5, 15);
    controls.update();

    window.addEventListener('mousemove', onMouseMove);
    window.addEventListener('resize', handleResize); // Asegura que se redimensione correctamente

    handleResize(); // Ajustar el tamaño al cargar

    // Limpiar el canvas al desmontar el componente
    return () => {
      mount.removeChild(renderer.domElement);
      window.removeEventListener('mousemove', onMouseMove);
      window.removeEventListener('resize', handleResize);
    };
  }, [objects]);

  // Función para mostrar u ocultar las órbitas
  useEffect(() => {
    orbitsRef.current.forEach((orbitLine) => {
      orbitLine.visible = showOrbits; // Controla la visibilidad de las órbitas
    });
  }, [showOrbits]);

  return (
    <div style={{ margin: 0, padding: 0, width: '100vw', height: '100vh', overflow: 'hidden' }}>
      <button onClick={() => setShowOrbits(!showOrbits)} style={{ position: 'absolute', top: 10, left: 10, zIndex: 1 }}>
        {showOrbits ? 'Ocultar Órbitas' : 'Mostrar Órbitas'}
      </button>

      {hoveredObject && (
        <div style={{ position: 'absolute', top: 10, right: 10, zIndex: 1, color: 'white', background: 'rgba(0, 0, 0, 0.7)', padding: '10px', borderRadius: '5px' }}>
          <strong>Nombre del objeto:</strong> {hoveredObject}
        </div>
      )}

      <div ref={mountRef} style={{ width: '100vw', height: '100vh' }} />
    </div>
  );
};

export default OrbitalSimulation;
