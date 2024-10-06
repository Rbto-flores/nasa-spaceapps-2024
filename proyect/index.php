<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jangernauts sistema solar</title>
    <link rel="stylesheet" href="master.css?06102024">
    <link rel="stylesheet" href="normalize.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body>
    <div id="contenedor" class="contenedor">
        <header class="menu">
            <div class="logo">
                <p class="logo--nombre">
                    <img src="img/logo.png" alt="" >
                </p>
                <img id="hamburguesa" src="./img/hambuguesa.svg" alt="Menu hamburguesa" >
            </div>
            <nav id="menu--navegacion" class="menu--navegacion">
                <ul class="navegacion">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#sistema">Sistema </a></li>
                    <li><a href="#cometas">Comentas NEO</a></li>
                    <li><a href="#planetas">Planetas</a></li>
                </ul>
            </nav>
        </header>
        <aside class="universo">
            <div class="contenedor--universo">
                <div class="universo--info">
                    <h1 class="title-main">El Cosmos a tu Alcance</h1>
                    <p class="text-secundario">Explora en 3D los objetos cercanos a la Tierra, desde asteroides hasta cometas. Sumérgete en el corazón del Sistema Solar, visualiza cada planeta y descubre datos fascinantes en un solo lugar. Todo lo que necesitas para entender el cosmos, al alcance de un clic.</p>
                        <div class="btn--info row">
                        
                        </div>
                </div>
                <ul class="planetas">
                <li>
                        <picture>
                            <source srcset="./img/tierra.webp" type="image/webp">
                            <source srcset="./img/tierra.png" type="image/png">
                            <img src="./img/tierra.png" alt="Sistemas solar">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="./img/mercurio.webp" type="image/webp">
                            <source srcset="./img/mercurio.png" type="image/png">
                            <img src="img/mercurio.png" alt="Planeta ">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="./img/venus.webp" type="image/webp">
                            <source srcset="./img/venus.png" type="image/png">
                            <img src="img/venus.png" alt="Planeta ">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="./img/tierra.webp" type="image/webp">
                            <source srcset="./img/tierra.png" type="image/png">
                            <img src="img/tierra.png" alt="Planeta ">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="./img/marte.webp" type="image/webp">
                            <source srcset="./img/marte.png" type="image/png">
                            <img src="img/marte.png" alt="Planeta ">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="./img/jupiter.webp" type="image/webp">
                            <source srcset="./img/jupiter.png" type="image/png">
                            <img src="img/jupiter.png" alt="Planeta ">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="./img/saturno.webp" type="image/webp">
                            <source srcset="./img/saturno.png" type="image/png">
                            <img src="img/saturno.png" alt="Planeta ">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="./img/neptuno.webp" type="image/webp">
                            <source srcset="./img/neptuno.png" type="image/png">
                            <img src="img/neptuno.png" alt="Planeta pop">
                        </picture>
                    </li>
                </ul>
            </div>
        </aside>
    
    <div class="universo-neos" id="cometas">
        <div class="number">
           <h1 class="title-nunmer">01</h1>
        </div>
        <div class="content">
            <h2 class="title-neo">¿Qué son los NEOs?</h2>
            <p class="text-neo text-secundario">
                        Los NEOs (Near-Earth Objects) son asteroides y cometas que orbitan cerca de nuestro planeta. ¡Pero no te preocupes! La mayoría están a una distancia segura. Explora estos objetos fascinantes y aprende cómo la NASA los monitorea para mantenernos a salvo.
            </p>
            <h2 class="title-neo">¿Listo para explorar</h2>
            <p class="text-neo text-secundario">
            Ahora que sabes qué son los NEOs, ¡es hora de verlos en acción! Haz clic en el botón de abajo para sumergirte en una simulación 3D interactiva. Explora el espacio cercano a la Tierra y descubre los objetos que nos rodean desde una perspectiva totalmente nueva
            </p>

            <div class="btn--info-main">
               <a href="#">🧑‍🚀 Iniciar Exploracion</a>
            </div>
        </div>
   </div>
    <main id="contenedor--planetas" class="contenedor--planetas">
        <ul class="lista--planetas">
            <li>
                 <div class="hover-data-planes">
                    <p>Nombre: Mercurio</p>
                    <p>Distancia: 0.72 UA</p>
                    <p>Tipo: Rocoso</p>
                </div>
                <picture>
                    <source srcset="./planetas/mercurio.webp" type="image/webp">
                    <source srcset="./planetas/mercurio.png" type="image/png">
                    <img width="100" height="100" src="planetas/mercurio.png" alt="Planeta">
                </picture>
                <p>Mercurio</p>
                
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Venus</p>
                    <p>Distancia: 0.72 UA</p>
                    <p>Tipo: Rocoso              </p>
                </div>

                <picture>
                    <source srcset="./planetas/venus.webp" type="image/webp">
                    <source srcset="./planetas/venus.png" type="image/png">
                    <img width="100" height="100" src="planetas/venus.png" alt="Planeta">
                </picture>
                <p>Venus</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Tierra</p>
                    <p>Distancia: 1.0 UA</p>
                    <p>Tipo: Rocoso              </p>
                </div>
                <picture>
                    <source srcset="./planetas/tierra.webp" type="image/webp">
                    <source srcset="./planetas/tierra.png" type="image/png">
                    <img width="100" height="100" src="planetas/tierra.png" alt="Planeta">
                </picture>
                <p>Tierra</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Marte</p>
                    <p>Distancia: 1.52 UA</p>
                    <p>Tipo: Rocoso</p>
                </div>

                <picture>
                    <source srcset="./planetas/marte.webp" type="image/webp">
                    <source srcset="./planetas/marte.png" type="image/png">
                    <img width="100" height="100" src="planetas/marte.png" alt="Planeta">
                </picture>
                <p>Marte</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Júpiter</p>
                    <p>Distancia: 5.2 UA</p>
                    <p>Tipo: Gaseoso</p>
                </div>
                <picture>
                    <source srcset="./planetas/jupiter.webp" type="image/webp">
                    <source srcset="./planetas/jupiter.png" type="image/png">
                    <img width="100" height="100" src="planetas/jupiter.png" alt="Planeta">
                </picture>
                <p>Jupiter</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Saturno</p>
                    <p>Distancia: 9.58 UA</p>
                    <p>Tipo: Gaseoso</p>
                </div>
                <picture>
                    <source srcset="./planetas/saturno.webp" type="image/webp">
                    <source srcset="./planetas/saturno.png" type="image/png">
                    <img width="100" height="100" src="planetas/saturno.png" alt="Planeta">
                </picture>
                <p>Saturno</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Urano</p>
                    <p>Distancia: 19,22 UA</p>
                    <p>Tipo: Gaseoso (gigante helado)                    </p>
                </div>
                <picture>
                    <source srcset="./planetas/urano.webp" type="image/webp">
                    <source srcset="./planetas/urano.png" type="image/png">
                    <img width="100" height="100" src="planetas/urano.png" alt="Planeta">
                </picture>
                <p>Urano</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Mercurio</p>
                    <p>Distancia: 0.39 UA</p>
                    <p>Tipo: Rocoso              </p>
                </div>
                <picture>
                    <source srcset="./planetas/mercurio.webp" type="image/webp">
                    <source srcset="./planetas/mercurio.png" type="image/png">
                    <img width="100" height="100" src="planetas/mercurio.png" alt="Planeta">
                </picture>
                <p>Mercurio</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Venus</p>
                    <p>Distancia: 0.72 UA</p>
                    <p>Tipo: Rocoso              </p>
                </div>
                <picture>
                    <source srcset="./planetas/venus.webp" type="image/webp">
                    <source srcset="./planetas/venus.png" type="image/png">
                    <img width="100" height="100" src="planetas/venus.png" alt="Planeta">
                </picture>
                <p>Venus</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Tierra</p>
                    <p>Distancia: 1.0 UA</p>
                    <p>Tipo: Rocoso              </p>
                </div>
                <picture>
                    <source srcset="./planetas/tierra.webp" type="image/webp">
                    <source srcset="./planetas/tierra.png" type="image/png">
                    <img width="100" height="100" src="planetas/tierra.png" alt="Planeta">
                </picture>
                <p>Tierra</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Marte</p>
                    <p>Distancia: 1.52 UA</p>
                    <p>Tipo: Rocoso</p>
                </div>
                <picture>
                    <source srcset="./planetas/marte.webp" type="image/webp">
                    <source srcset="./planetas/marte.png" type="image/png">
                    <img width="100" height="100" src="planetas/marte.png" alt="Planeta">
                </picture>
                <p>Marte</p>
               
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Jupiter</p>
                    <p>Distancia: 5.2 UA</p>
                    <p>Tipo: Gaseoso                    </p>
                </div>
                <picture>
                    <source srcset="./planetas/jupiter.webp" type="image/webp">
                    <source srcset="./planetas/jupiter.png" type="image/png">
                    <img width="100" height="100" src="planetas/jupiter.png" alt="Planeta">
                </picture>
                <p>Jupiter</p>
            </li>
            <li>
                <div class="hover-data-planes">
                    <p>Nombre: Saturno</p>
                    <p>Distancia: 9.58 UA</p>
                    <p>Tipo: Gaseoso</p>
                </div>
                <picture>
                    <source srcset="./planetas/saturno.webp" type="image/webp">
                    <source srcset="./planetas/saturno.png" type="image/png">
                    <img width="100" height="100" src="planetas/saturno.png" alt="Planeta">
                </picture>
                <p>Saturno</p>
            </li>
            <li>
                 <div class="hover-data-planes">
                    <p>Nombre: Urano</p>
                    <p>Distancia: 19,22 UA</p>
                    <p>Tipo: Gaseoso (gigante helado)                    </p>
                </div>
                <picture>
                    <source srcset="./planetas/urano.webp" type="image/webp">
                    <source srcset="./planetas/urano.png" type="image/png">
                    <img width="100" height="100" src="planetas/urano.png" alt="Planeta">
                </picture>
                <p>Urano</p>
            </li>
        </ul>
    </main>
    <div id="spinner" class="lds-ripple">
        <div></div><div></div>
    </div>
        <div class="universo-planetas" id="planetas">
            <div class="number">
            <h1 class="title-nunmer">02</h1>
            </div>
            <div class="content-planetas">
                <h2 class="title-neo">Conoce los Planetas?</h2>
                <p class="text-neo text-secundario">
                Después de explorar los objetos cercanos a la Tierra, es momento de hacer un recorrido por los planetas de nuestro Sistema Solar. Desliza a través del carrusel y descubre información única sobre cada planeta, desde el abrasador Mercurio hasta los anillos majestuosos de Saturno.
                </p>
                <h2 class="title-neo">¿Listo para explorar</h2>
                <p class="text-neo text-secundario">
                Ahora que sabes qué son los NEOs, ¡es hora de verlos en acción! Haz clic en el botón de abajo para sumergirte en una simulación 3D interactiva. Explora el espacio cercano a la Tierra y descubre los objetos que nos rodean desde una perspectiva totalmente nueva
                </p>

                <!-- <div class="btn--info-main">
                <a href="#">Iniciar Exploracion</a>
                </div> -->
            </div>
        </div>

        <!-- secion parte 3  -->
         <div class="universo-sistema" id="sistema">
           
            <div class="number">
                <h1 class="title-sistema">03</h1>
            </div>
            <div class="content-sistema">
                <h2 class="title-neo">Viaja por el Sistema Solar?</h2>
                <h3 class="text-secundario">¿Listo para una aventura cósmica? </h3>
                <p class="text-neo text-secundario">
                    Con un solo clic, puedes explorar nuestro Sistema Solar en una vista 3D completamente interactiva. Desde el Sol hasta los planetas más distantes, observa cómo todo está conectado y aprende más sobre el lugar que llamamos hogar en el universo.
                </p>
                <div class="btn--info-main">
                <a href="#"> 🧑‍🚀 Iniciar Exploracion</a>
                </div>
            </div>
            <div class="solsection-left-sol">
                <img src="../proyect/planetas/sol.png" alt="">
            </div>
        </div> 
    </div>
     
<!-- esta es la seccion de pie de la pagina -->
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <!-- Sección de contacto -->
      <div class="footer-section contact">
        <h3 style="font-size:50px;">Orbitarium </h3>
        <p class="enlace">232 W 29th St, New York, NY 10001, USA</p>
        <p>+1 875 234 7554; +1 875 234 7534</p>
        <p><a href="mailto:hello@exploreuniverse.com">hello@exploreuniverse.com</a></p>
      </div>

      <!-- Sección de enlaces -->
      <div class="footer-section links">
        <div class="footer-column">
          <h3>SOLAR SYSTEM</h3>
          <ul>
            <li><a href="#" class="enlace">General information about Solar System</a></li>
            <li><a href="#" class="enlace">Our Solar system</a></li>
            <li><a href="#" class="enlace">Sun</a></li>
            <li><a href="#" class="enlace">Kuiper belt</a></li>
            <li><a href="#" class="enlace">Moons</a></li>
            <li><a href="#" class="enlace">Small bodies</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>PLANETS</h3>
          <ul>
            <li><a href="#" class="enlace">Mercurio</a></li>
            <li><a href="#" class="enlace">Venus</a></li>
            <li><a href="#" class="enlace">Tierra</a></li>
            <li><a href="#" class="enlace">Martes</a></li>
            <li><a href="#" class="enlace">Jupiter</a></li>
            <li><a href="#" class="enlace" >Saturno</a></li>
            <li><a href="#" class="enlace">Urano</a></li>
            <li><a href="#" class="enlace">Neptuno</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>EXPLORATION</h3>
          <ul>
            <li><a href="#" class="enlace">History of exploration</a></li>
            <li><a href="#" class="enlace">Targets of exploration</a></li>
            <li><a href="#" class="enlace">Future of space exploration</a></li>
            <li><a href="#" class="enlace">Satellites</a></li>
            <li><a href="#" class="enlace">Spacecrafts</a></li>
            <li><a href="#" class="enlace">Living in space</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div>
    <center><p class="enlace">Creado con corazon ❤️  Desde Bolivia #Nasaspaceapps</p></center>
  </div>
</footer>

    <!-- <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/}js/bootstrap.min.js"></script> -->
    <script src="index.js"></script><script>
    // Seleccionamos todos los elementos <li> que contienen la información de los planetas
    const planetas = document.querySelectorAll('.lista--planetas li');

    // Recorremos todos los planetas
    planetas.forEach(planeta => {
        // Escuchamos el evento "mouseenter" para cuando se pasa el mouse sobre el planeta
        planeta.addEventListener('mouseenter', () => {
            // Seleccionamos la información que está oculta dentro del planeta
            const info = planeta.querySelector('.hover-data-planes');
            info.style.display = 'block'; // Mostramos la información
        });

        // Escuchamos el evento "mouseleave" para cuando el mouse se va del planeta
        planeta.addEventListener('mouseleave', () => {
            // Seleccionamos la información que estaba mostrada
            const info = planeta.querySelector('.hover-data-planes');
            info.style.display = 'none'; // Ocultamos la información nuevamente
        });
    });
</script>

  
</body>
</html>