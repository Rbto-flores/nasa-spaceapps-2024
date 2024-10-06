<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jangernauts sistema solar</title>
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="normalize.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body>
    <div id="contenedor" class="contenedor">
        <header class="menu">
            <div class="logo">
                <p class="logo--nombre">
                   Orbitarium </span>
                </p>
                <img id="hamburguesa" src="../img/hambuguesa.svg" alt="Menu hamburguesa">
            </div>
            <nav id="menu--navegacion" class="menu--navegacion">
                <ul class="navegacion">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sistema </a></li>
                    <li><a href="#">Comentas NEO</a></li>
                    
                </ul>
            </nav>
        </header>
        <aside class="universo">
            <div class="contenedor--universo">
                <div class="universo--info">
                    <h1 class="title-main">El Cosmos a tu Alcance</h1>
                    <p>Explora en 3D los objetos cercanos a la Tierra, desde asteroides hasta cometas. Sumérgete en el corazón del Sistema Solar, visualiza cada planeta y descubre datos fascinantes en un solo lugar. Todo lo que necesitas para entender el cosmos, al alcance de un clic.</p>
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
    </div>
    <div class="universo-neos">
        <div class="number">
           <h1 class="title-nunmer">01</h1>
        </div>
        <div class="content">
            <h2 class="title-neo">¿Qué son los NEOs?</h2>
            <p class="text-neo">
                        Los NEOs (Near-Earth Objects) son asteroides y cometas que orbitan cerca de nuestro planeta. ¡Pero no te preocupes! La mayoría están a una distancia segura. Explora estos objetos fascinantes y aprende cómo la NASA los monitorea para mantenernos a salvo.
            </p>
            <h2 class="title-neo">¿Listo para explorar</h2>
            <p class="text-neo">
            Ahora que sabes qué son los NEOs, ¡es hora de verlos en acción! Haz clic en el botón de abajo para sumergirte en una simulación 3D interactiva. Explora el espacio cercano a la Tierra y descubre los objetos que nos rodean desde una perspectiva totalmente nueva
            </p>

            <div class="btn--info-main">
               <a href="#">Iniciar Exploracion</a>
            </div>
        </div>
   </div>
    <main id="contenedor--planetas" class="contenedor--planetas">
        <ul class="lista--planetas">
            <li>
                <picture>
                    <source srcset="./planetas/mercurio.webp" type="image/webp">
                    <source srcset="./planetas/mercurio.png" type="image/png">
                    <img width="100" height="100" src="planetas/mercurio.png" alt="Planeta">
                </picture>
                <p>Mercurio</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/venus.webp" type="image/webp">
                    <source srcset="./planetas/venus.png" type="image/png">
                    <img width="100" height="100" src="planetas/venus.png" alt="Planeta">
                </picture>
                <p>Venus</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/tierra.webp" type="image/webp">
                    <source srcset="./planetas/tierra.png" type="image/png">
                    <img width="100" height="100" src="planetas/tierra.png" alt="Planeta">
                </picture>
                <p>Tierra</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/marte.webp" type="image/webp">
                    <source srcset="./planetas/marte.png" type="image/png">
                    <img width="100" height="100" src="planetas/marte.png" alt="Planeta">
                </picture>
                <p>Marte</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/jupiter.webp" type="image/webp">
                    <source srcset="./planetas/jupiter.png" type="image/png">
                    <img width="100" height="100" src="planetas/jupiter.png" alt="Planeta">
                </picture>
                <p>Jupiter</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/saturno.webp" type="image/webp">
                    <source srcset="./planetas/saturno.png" type="image/png">
                    <img width="100" height="100" src="planetas/saturno.png" alt="Planeta">
                </picture>
                <p>Saturno</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/urano.webp" type="image/webp">
                    <source srcset="./planetas/urano.png" type="image/png">
                    <img width="100" height="100" src="planetas/urano.png" alt="Planeta">
                </picture>
                <p>Urano</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/mercurio.webp" type="image/webp">
                    <source srcset="./planetas/mercurio.png" type="image/png">
                    <img width="100" height="100" src="planetas/mercurio.png" alt="Planeta">
                </picture>
                <p>Mercurio</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/venus.webp" type="image/webp">
                    <source srcset="./planetas/venus.png" type="image/png">
                    <img width="100" height="100" src="planetas/venus.png" alt="Planeta">
                </picture>
                <p>Venus</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/tierra.webp" type="image/webp">
                    <source srcset="./planetas/tierra.png" type="image/png">
                    <img width="100" height="100" src="planetas/tierra.png" alt="Planeta">
                </picture>
                <p>Tierra</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/marte.webp" type="image/webp">
                    <source srcset="./planetas/marte.png" type="image/png">
                    <img width="100" height="100" src="planetas/marte.png" alt="Planeta">
                </picture>
                <p>Marte</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/jupiter.webp" type="image/webp">
                    <source srcset="./planetas/jupiter.png" type="image/png">
                    <img width="100" height="100" src="planetas/jupiter.png" alt="Planeta">
                </picture>
                <p>Jupiter</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/saturno.webp" type="image/webp">
                    <source srcset="./planetas/saturno.png" type="image/png">
                    <img width="100" height="100" src="planetas/saturno.png" alt="Planeta">
                </picture>
                <p>Saturno</p>
            </li>
            <li>
                <picture>
                    <source srcset="./planetas/urano.webp" type="image/webp">
                    <source srcset="./planetas/urano.png" type="image/png">
                    <img width="100" height="100" src="planetas/urano.png" alt="Planeta">
                </picture>
                <p>Urano</p>
            </li>
        </ul>
    </main>
    <div class="universo-planetas">
        <div class="number">
           <h1 class="title-nunmer">02</h1>
        </div>
        <div class="content-planetas">
            <h2 class="title-neo">Conoce los Planetas?</h2>
            <p class="text-neo">
            Después de explorar los objetos cercanos a la Tierra, es momento de hacer un recorrido por los planetas de nuestro Sistema Solar. Desliza a través del carrusel y descubre información única sobre cada planeta, desde el abrasador Mercurio hasta los anillos majestuosos de Saturno.
            </p>
            <h2 class="title-neo">¿Listo para explorar</h2>
            <p class="text-neo">
            Ahora que sabes qué son los NEOs, ¡es hora de verlos en acción! Haz clic en el botón de abajo para sumergirte en una simulación 3D interactiva. Explora el espacio cercano a la Tierra y descubre los objetos que nos rodean desde una perspectiva totalmente nueva
            </p>

            <div class="btn--info-main">
               <a href="#">Iniciar Exploracion</a>
            </div>
        </div>
   </div>
    <div id="spinner" class="lds-ripple"></div>
        <div></div><div></div>
    </div>
    <!-- <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/}js/bootstrap.min.js"></script> -->
    <script src="index.js"></script>
</body>
</html>