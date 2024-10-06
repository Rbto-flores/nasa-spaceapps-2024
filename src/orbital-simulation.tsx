import { useEffect, useRef, useState } from 'react';
import * as THREE from 'three';
// @ts-ignore
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls';
import { orbitObject } from './types/orbitObjetc';
import objectsData from './assets/objects.json';

const OrbitalSimulation = () => {
  const mountRef = useRef<HTMLDivElement | null>(null);
  const [objects, setObjects] = useState<orbitObject[]>([]);

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
    renderer.setSize(1000, 1000);
    mount.appendChild(renderer.domElement);

    const controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dampingFactor = 0.05;

    const scale = 3;
    const comets: THREE.Mesh[] = []; 
    const textSprites: THREE.Sprite[] = []; 
    let t = 0;

    const calculateOrbit = (objectData: orbitObject): THREE.Vector3[] => {
      const { e, i_deg, q_au_1 } = objectData;
      const eccentricity = parseFloat(e);
      const inclination = parseFloat(i_deg) * (Math.PI / 180);
      const perihelionDistance = parseFloat(q_au_1);

      const points: THREE.Vector3[] = [];
      const numPoints = 200; // Reducido para mejorar el rendimiento

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

    // Crear órbitas, cometas y textos
    objects.forEach((objectData) => {
      const isEarth = objectData.object_name === "Earth";
      const orbitPoints = calculateOrbit(objectData);
    
      const geometry = new THREE.BufferGeometry().setFromPoints(orbitPoints);
      const material = new THREE.LineBasicMaterial({
        color: isEarth ? 0x00ff00 : Math.random() * 0xffffff, // Verde para la Tierra
      });
      const orbitLine = new THREE.Line(geometry, material);
      scene.add(orbitLine);
    
      const cometGeometry = new THREE.SphereGeometry(isEarth ? 0.1 : 0.05, 32, 32); // Más grande para la Tierra
      const cometMaterial = new THREE.MeshBasicMaterial({ color: isEarth ? 0x0000ff : 0xff0000 }); // Azul para la Tierra
      const comet = new THREE.Mesh(cometGeometry, cometMaterial);
      scene.add(comet);
    
      comets.push(comet);
    
      const textSprite = createTextSprite(objectData.object_name);
      scene.add(textSprite);
      textSprites.push(textSprite);
    });

    const animateComet = () => {
      objects.forEach((objectData, index) => {
        const orbitPoints = calculateOrbit(objectData);
        const point = orbitPoints[Math.floor(t) % orbitPoints.length];

        // Actualizar la posición de cada cometa y sprite
        comets[index].position.set(point.x, point.y, point.z);
        textSprites[index].position.set(point.x, point.y + 0.2, point.z); // Ajustar la posición del texto por encima del cometa
      });

      t += 0.1; // Control de velocidad de animación
    };

    const animate = () => {
      requestAnimationFrame(animate);
      animateComet();
      controls.update();
      renderer.render(scene, camera);
    };

    animate();

    camera.position.set(0, 5, 15);
    controls.update();

    return () => {
      mount.removeChild(renderer.domElement);
    };
  }, [objects]);

  return <div ref={mountRef} style={{ width: '200%', height: '200vh' }} />;
};

export default OrbitalSimulation;
