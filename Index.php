<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FONT WESOME 5 -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Materials icons -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- estilos propios -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- parallax -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script> -->
    <!-- animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Leatflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
    <!-- scroll -->
    <script src="./js/smooth-scroll.polyfills.min.js" before></script>
    <link rel="shortcut icon" href="./img/favicon.ico" />
    <!--Stylesheet-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>I.D.E.A. Ingeniería en Diseños Eléctricos y Automatización</title>
</head>

<body>


    <div class="containert-fluid">
        <!-- Menu de navegacion  -->
        <nav class="navbar navbar-dark bg-yellow fixed-top  ">
            <a class="navbar-brand" href="index.php">
                <h5> <span class="logo"><span class="logolah5"></span>I.D.E.<span class="logoa">A</span></span> <small
                        class="colorsmall">Ingeniería en Diseños Eléctricos y Automatización</small></h5>
            </a>
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item"><a href="https://www.facebook.com/profile.php?id=100083149910305" target="_blank"
                        class="nav-link p-1 ml-4 icons-a animated fadeInLeft"><img src="img/facebook.png" alt="facebook"
                            width="24" height="24"></a></li>
                <li class="nav-item"><a
                        href="https://wa.me/573147767370?text=Me%20Gustaria%20conocer%20mas%20sobre%20los%20servicios"
                        target="_blank" class="nav-link p-1 ml-4 icons-a animated fadeInLeft" data-toggle="tooltip"
                        data-placement="bottom" title="+573147767370"><img src="img/whatsapp.png" alt="whatsapp"
                            width="24" height="24"></a></li>
                <li class="nav-item " data-toggle="modal" data-target="#contactomodal"><span
                        class="pointer nav-link p-1 ml-4 mr-4 icons-a animated fadeInLeft"><img src="./img/envelope.svg"
                            alt="Email" width="24" height="24"></span>
                </li>
            </ul>
            <?php

      if (!isset($_SESSION['usuario'])) {
        echo '<button type="button" class="btn btn-dark btn-round" data-toggle="modal" data-target="#loginModal"> Iniciar Sesion</button> ';
      } else {
        echo '';
      }

      ?>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsmenu"
                aria-controls="navbarsmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon active"></span>
            </button>



            <!-- Navbar del submenu -->
            <div class="navbar-collapse collapse" id="navbarsmenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item d-block d-sm-block d-md-none text-center">
                        <a href="https://www.facebook.com/profile.php?id=100083149910305" target="_blank"
                            class="nav-link text-center d-smartphone ml-2 icons-a animated fadeInLeft"><img
                                src="./img/facebook.svg" alt="facebook" width="24" height="24"></a>
                        <a href="https://wa.me/573147767370?text=Me%20Gustaria%20conocer%20mas%20sobre%20los%20servicios"
                            data-toggle="tooltip" data-placement="bottom" title="+573147767370"
                            class="nav-link text-center d-smartphone ml-2 icons-a animated fadeInLeft"><img
                                src="./img/whatsapp.svg" alt="whatsapp" width="24" height="24"></a>
                        <a href="mailto:ideaelectricity3@gmail.com"
                            class=" 13edc12   ws text-center d-smartphone ml-2 mr-4 icons-a animated fadeInLeft"><img
                                src="./img/envelope.svg" alt="Email" width="24" height="24"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link nav-close" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link nav-close" href="#quienesomos">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item  active dropdown transitions-1">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Servicios</a>
                        <div class="dropdown-menu bg-yellow" aria-labelledby="dropdown01">
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#mantenimiento_electrico">Mantenimiento eléctrico</a>
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#mantenimiento_mecanico">Mantenimiento mecánico</a>
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#instalacion_electrica_comercial">Instalación eléctrica comercial</a>
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#instalacion_electrica_residencial">Instalación eléctrica Residencial e
                                Industrial</a>
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#refigeracion_aire_acondicionado">Refrigeración y aire acondicionado</a>
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#fabricacion_equipos_panaderia">Fabricación de equipos para panadería</a>
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#sistema_fotovoltaico">Sistema fotovoltaico energía solar</a>
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#capacitacion">Capacitación en el manejo de equipos</a>
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#asesoria">Asesoría</a>
                            <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                                href="#certificacion_retie">Certificación RETIE para instalaciones nuevas eléctricas</a>
                        </div>
                    </li>

                    <?php

          if (!isset($_SESSION['usuario'])) {
            echo '<li class="nav-item inactive">
                      <a data-scroll data-toggle="modal" href="#" class="nav-link nav-close navcontac">Reportes de Mantenimientos</a>
                    </li>';
          } else {
            echo '<li class="nav-item active">
                      <a data-scroll data-toggle="modal" href="#" data-target="#reporte" class="nav-link nav-close navcontac">Reportes de Mantenimientos</a>
                    </li>
                    ';
          }

          if (!isset($_SESSION['usuario'])) {
            echo '<li class="nav-item inactive">
                      <a data-scroll data-toggle="modal" href="#" class="nav-link nav-close navcontac">Ordenes de Trabajo (OT)</a>
                    </li>';
          } else {
            echo '<li class="nav-item active">
                      <a data-scroll data-toggle="modal" href="#" data-target="#reporte" class="nav-link nav-close navcontac">Ordenes de Trabajo (OT)</a>
                    </li>
                                        
                    <li class="nav-item active">
                      <a  href="logout.php" data-target="#cerrar" class="nav-link nav-close navcontac">Cerrar Sesion</a>
                    </li>
                    ';
          }
          ?>

                </ul>
            </div>
        </nav>


        <!-- Modal de Iniciar sesion  -->
        <div class="modal fade" id="loginModal" tabi="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-title text-center">
                            <h4>Iniciar Sesion</h4>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <form id="login" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="usuario" name="usuario"
                                        placeholder="Ingresa tu Usuario">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Ingresa tu Contraseña">
                                </div>
                                <button type="button" class="btn btn-warning btn-block btn-round"
                                    id="btnIniciar">Iniciar sesion</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main>
            <!-- Presentacion inicial escritorio -->
            <div class="presentacion  animated  fadeIn margin58px  d-none d-sm-none d-md-block ">
                <img src="./img/casco.jpg" alt="" class="foto1">
                <div class=" presentacion animated fadeIn  delay-1 position-absolute">
                    <img src="./img/triangulo1.png" alt="" class="triangulo1 ">
                </div>
                <div class="presentacion animated fadeIn  delay-2 triangulo2 d-none d-sm-none d-md-block">
                    <img src="./img/triangulo2.png" alt="" class="triangulo2 ">
                </div>

                <div class="text-1  animated fadeInRight delay-3 d-none d-sm-none d-md-block">
                    <h1><span class="logo"><span class="logolah1"></span>I.D.E.<span class="logoa">A.</span></span>
                        Ingeniería en
                        Diseños Eléctricos y Automatización</h1>
                </div>
                <div class="text-2 ml-3 animated fadeInLeft delay-3 d-none d-sm-none d-md-block">
                    <!-- slogan -->
                    <h3 class="text-uppercase">
                        SU SATISFACCIÓN ES NUESTRA META.


                        <br>
                        <small>SOLUCIONES A LA VANGUARDIA DE LA TECNOLOGÍA</small>
                    </h3>

                </div>
            </div>

            <!-- Presentacion Smartphone -->
            <div class="d-block d-sm-block d-md-none margin58px">


            </div>
            <!-- Flechas buttom -->
            <img src="./img/flechasbuttom.svg" class="flechabuttom" alt="" id="quienesomos">
            <!-- segunda parte -->
            <br>
            <br>
            <br>
            <br>
            <div class="parte2">
                <h1 class="text-center display-4">Somos una empresa dedica a brindar soluciones industriales </h1>
                <div class="row m-3">
                    <div class="col-md-6">
                        <img src="./img/factory2.png" alt="factory" class="rounded-circle center1" width="140"
                            height="140">
                        <h2 class="text-center">Historia de <span class="logo"><span class="logolah1"></span>I.D.E.<span
                                    class="logob">A</span></span></h2>
                        <p>
                            <br>
                            <br>
                            Somos una empresa de más de 10 años de experiencia en el sector industrial comprometidos con
                            la calidad en
                            el servicio. Trabajamos en la gestión integral de su empresa basados en el desarrollo
                            ingenieril, el
                            diseño, la innovación y la reducción de costos, nuestro compromiso es ser parte de las
                            mejoras del negocio
                            de nuestros clientes y conseguir una alianza “Win to Win”.
                            <br><br>
                            Mantenimiento para empresas dedicadas al área de Producción de productos de panadería,
                            Equipos eléctricos
                            y todo lo relacionado a la industria.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="rounded-circle center1" src="./img/factory3.png" alt="factory" width="140"
                            height="140">
                        <h2 class="text-center">Visión</h2>
                        <p>
                            Para el 2025 catalogarnos como una empresa numero 1 en servicios, que garanticen a nuestros
                            clientes
                            excelentes procesos en su producción, llegan así a ser parte de un importante crecimiento de
                            sus compañías
                            en el sector industrial.<br> <br>
                            Nuestra visión es crecer hasta convertirnos en la empresa que ejecute los grandes y pequeños
                            proyectos de
                            todo rubro que requiera de nuestros servicios. <br> <br>
                            Proveyendo seguridad mano de obra calificada y tecnología a su proyecto y brindando a través
                            de nuestra
                            experiencia soluciones para la ejecución del mismo. <br> <br>
                            Adquiriendo nuevas tecnologías y herramientas que nos permitan ser cada vez más eficientes,
                            a la vez que
                            expeditivos en la concreción de los trabajos con las calidades requeridas.

                        </p>
                    </div>
                    <div class="col-md-12" class="text-center">
                        <img class="rounded-circle center1" src="./img/factory.jpg" alt="factory" width="140"
                            height="140">
                        <h2 class="text-center">Misión</h2>
                        <p class="text-center">
                            Mediante el compromiso integral de nuestras normas, brindarles a nuestros clientes: <br>
                        <ul class="text-center" style="list-style: none;">
                            <li>
                                Confianza.
                            </li>
                            <li>
                                Rentabilidad.
                            </li>
                            <li>
                                Honestidad.
                            </li>
                            <li>
                                Respeto.
                            </li>
                            <li>
                                Veracidad en todos los procesos y servicios.
                            </li>
                        </ul>

                        </p>
                    </div>
                </div>
                <!-- Carrusel de servicios -->
                <div>
                    <h1 class="text-center mb-2 mt-5 display-3" id="service">Servicios <small>Ofrecidos</small></h1>
                </div>
                <!-- slider -->
                <div class=" d-none d-sm-none d-md-block">
                    <!-- flecha rotaada -->
                    <div>
                        <img src="./img/flechasbuttom.svg" class="flechabuttom rotate mt-0  d-none d-sm-none d-md-block"
                            alt="">
                    </div>
                    <!-- Slider de Servicios -->
                    <div id="carouselExampleIndicators" class="carousel slide d-none d-sm-none d-md-block"
                        data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 " height="445" src="img/mantenimienro_electrico.jpg"
                                    height="445" alt="First slide">
                                <div class="carousel-caption  d-none d-md-block  ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1  text-shadow">Mantenimiento Eléctrico</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/Mantenimiento-industrial.jpg"
                                    alt="Second slide">
                                <div class="carousel-caption  d-none d-md-block  ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1 text-shadow">Mantenimiento Mecánico</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/electricidad_comercial.jpg"
                                    alt="Third slide">
                                <div class="carousel-caption  d-none d-md-block  ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1 text-shadow">Instalación Eléctrica Comercial</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/electricidad_residencial.jpg"
                                    alt="fourth slide">
                                <div class="carousel-caption  d-none d-md-block ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1 text-shadow">Instalación Eléctrica Residencial</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/instalacion_electrica_industrial.jpg"
                                    alt="fourth slide">
                                <div class="carousel-caption  d-none d-md-block ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1 text-shadow">Instalación Eléctrica Industrial</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/refigeracion.jpg" alt="fourth slide">
                                <div class="carousel-caption  d-none d-md-block ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1 text-shadow">Refrigeración y Aire Acondicionado</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/equipos_panaderia.webp"
                                    alt="fourth slide">
                                <div class="carousel-caption  d-none d-md-block ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1 text-shadow">Fabricación de equipos para Panadería</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/sistemas_fotovoltaicos.jpg"
                                    alt="fourth slide">
                                <div class="carousel-caption  d-none d-md-block ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1 text-shadow">Sistema fotovoltaico Energía Solar</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/capacitacion.webp" alt="fourth slide">
                                <div class="carousel-caption  d-none d-md-block ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1 text-shadow">Capacitación en el manejo de Equipos</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/asesorias.png" alt="fourth slide">
                                <div class="carousel-caption  d-none d-md-block ">
                                    <div class="tamtext1" style="color: orange;">
                                        <h5 class="display-1 text-shadow">Asesoría</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 " height="445" src="img/certificado_retie.png"
                                    alt="fourth slide">
                                <div class="carousel-caption  d-none d-md-block ">
                                    <div class="tamtext2" style="color: orange;">
                                        <h5 class="display-1 text-shadow"></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev zi-300" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="flechas__left" aria-hidden="true">❮</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next zi-300" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="flechas__right" aria-hidden="true">❯</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div>
                        <img src="./img/flechasbuttom.svg" class="flechabuttom" alt="">
                    </div>
                </div>
                <!-- linea  de servicios -->
                <div class="container py-2 ">

                    <!-- timeline item 1 -->
                    <div class="row no-gutters" id="mantenimiento_electrico">
                        <div class="col-sm">
                            <!--Espacio-->
                        </div>
                        <!-- timeline item 1 center dot -->
                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <h5 class="m-2">
                                <span class="badge badge-pill bg-warning border">&nbsp;</span>
                            </h5>
                            <div class="row h-50">
                                <div class="col border-right">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <!-- timeline item 1 COntent -->
                        <div class="col-sm py-2">
                            <div class="card border-warning shadow">
                                <!-- aca es donde se pinta el borde-->
                                <div class="card-body">
                                    <h4 class="card-title text-warning">Mantenimiento eléctrico</h4>
                                    <p class="card-text"> A medida que los equipos industriales van completando ciclos
                                        operativos, aumentan las posibilidades de que presenten <b> fallos o anomalías
                                            funcionales.</b> Las consecuencias de estas averías pueden ir desde leves
                                        descensos
                                        en la producción hasta la detención completa de la cadena.</p>
                                    <p>Por consiguiente, el <b>impacto económico</b> que puede sufrir la empresa es
                                        potencialmente elevado y compromete su rentabilidad a corto, medio y largo
                                        plazo. Además, como consecuencia de estas averías, es probable que se produzcan
                                        <b>accidentes</b> que puedan dañar a otros equipos, instalaciones e incluso a
                                        las
                                        propias personas.
                                    </p>
                                    <button data-toggle="modal" data-target="#mantenimiento_electricoModal"
                                        class="btn btn-warning text-light d-none d-sm-none d-md-block">
                                        Ver mas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <!-- timeline item 2 -->
                    <div class="row no-gutters">
                        <div class="col-sm py-2">
                            <div class="card border-turquesa shadow">
                                <!-- aca es donde se pinta el borde-->
                                <div class="card-body">
                                    <h4 class="card-title text-turquesa" id="estructura">Mantenimiento Mecánico</h4>
                                    <p class="card-text">El mantenimiento mecánico es una categoría dentro de la gestión
                                        de mantenimiento que abarca el mejoramiento de la eficiencia de la maquinaria.
                                        El técnico mecánico encargado logra esto realizando trabajos planificados y no
                                        planificados como:</p>
                                    <ul>
                                        <li>Lubricación.</li>
                                        <li>Reemplazo de piezas gastadas.</li>
                                        <li>Instalación de nuevos sistemas mecánicos.</li>
                                        <li>Detección visual y auditiva de fallas.</li>
                                        <li>Pruebas de diagnóstico.</li>
                                        <li>Reparaciones de emergencia.</li>
                                        <li>Alineación y calibración de piezas.</li>
                                        <li>Balanceo.</li>
                                    </ul>
                                    <button data-toggle="modal" data-target="#estructuraModal"
                                        class="btn btn-turquesa text-light d-none d-sm-none d-md-block">
                                        Ver mas
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col border-right">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <h5 class="m-2">
                                <span class="badge badge-pill bg-turquesa">&nbsp;</span>
                            </h5>
                            <div class="row h-50">
                                <div class="col border-right">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <!--spacer-->
                        </div>
                    </div>
                    <!--/row-->
                    <!-- timeline item 3 -->
                    <div class="row no-gutters">
                        <div class="col-sm">
                            <!--spacer-->
                        </div>
                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col border-right">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <h5 class="m-2">
                                <span class="badge badge-pill bg-azulintenso border">&nbsp;</span>
                            </h5>
                            <div class="row h-50">
                                <div class="col border-right">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col-sm py-2">
                            <div class="card border-azulintenso shadow">
                                <div class="card-body">
                                    <h4 class="card-title text-azulintenso" id="servicio">Instalación Eléctrica
                                        Comercial</h4>
                                    <p>
                                        Las instalaciones eléctricas comerciales requieren de ciertas características
                                        para su funcionamiento demandante, donde la iluminación y la conexión de equipos
                                        o aparatos de aire acondicionado son primordiales y donde debe existir un
                                        rendimiento aceptable.

                                    </p>
                                    <p>Las instalaciones eléctricas comerciales comprenden los siguientes servicios:</p>
                                    <ul>
                                        <li>Instalación de contactos: duplex, falla a tierra, regulados.</li>
                                        <li>Tableros de alumbrado y fuerza.</li>
                                        <li>Equipos de aire acondicionado: minisplit, unidades condensadoras.</li>
                                        <li>Reguladores de voltaje y UP’s.</li>
                                        <li>Conexiones de bombas de agua, electroniveles, hidrománticos.</li>
                                    </ul>
                                    <button data-toggle="modal" data-target="#ServiciosModal"
                                        class="btn btn-azulintenso text-light d-none d-sm-none d-md-block">
                                        Ver mas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <!-- timeline item 4 -->
                    <div class="row no-gutters">
                        <div class="col-sm py-2">
                            <div class="card border-rojofluor shadow">
                                <div class="card-body" id="mantenimiento">
                                    <h4 class="card-title text-rojofluor" id="mantenimiento">Capacitación en el manejo
                                        de Equipos</h4>
                                    <p>La capacitación de los empleados es un factor fundamental para la eficiencia en
                                        las operaciones de máquinas, en sectores como la agricultura y el transporte.
                                        Promueve la reducción de riesgos al mínimo mediante la introducción de medidas
                                        técnicas u organizativas y prácticas seguras.</p>
                                    <p>
                                        Debido a la gran variedad de equipos utilizados, que a menudo requieren
                                        conocimientos específicos para su funcionamiento. Los estándares regulatorios
                                        definen que cada operador debe estar calificado, calificado, calificado o
                                        autorizado para operar este equipo.
                                    </p>
                                    <p>
                                        La capacitación de los operadores debe realizarse, preferiblemente, antes de que
                                        asuman su rol en la empresa, a fin de preparar a los nuevos empleados para que
                                        tengan el conocimiento necesario sobre los procedimientos de seguridad y salud
                                        ocupacional al manipular máquinas e implementos.
                                    </p>
                                    <button data-toggle="modal" data-target="#mantenimientoModal"
                                        class="btn btn-rojofluor text-light d-none d-sm-none d-md-block">
                                        Ver mas
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                                <div class="col border-right">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                            <h5 class="m-2">
                                <span class="badge badge-pill bg-rojofluor border">&nbsp;</span>
                            </h5>
                            <div class="row h-50">
                                <div class="col">&nbsp;</div>
                                <div class="col">&nbsp;</div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <!--spacer-->
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <!-- Personal -->
                <!-- flecha rotaada -->
                <div>
                    <img src="./img/flechasbuttom.svg" class="flechabuttom rotate mt-0" alt="">
                </div>
                <!-- titulo  + personal-->
                <div class="">
                    <h1 class="text-center bg-yellow h1especial text-light display-3">Contamos con personal altamente
                        capacitado
                    </h1>
                </div>
                <!--  flecha normal-->
                <div>
                    <img src="./img/flechasbuttom.svg" class="flechabuttom" alt="">
                </div>
                <!-- inicio personal -->
                <div class="container-fluid">

                    <div class="row">
                        <!-- personal 1 -->
                        <div class="col-md-6 text-center ">
                            <div class="card w-75 center1  border-dark shadow ">
                                <!-- <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap"> -->
                                <div class="card-body">
                                    <h2 class="card-title "> Maria B. Filigrana Salazar </h2>
                                    <img src="./img/gerente.jpeg" alt="" width="300px" height="300px">
                                    <p class="card-text">
                                        <span>
                                            <h3> <strong> Presidente</strong></h3>
                                            <p class="lead">
                                                Fundador <br>
                                                Ejecución y Administración
                                            </p>
                                        </span>
                                    </p>
                                    <!-- <a href="#!" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- personal 2 -->
                        <div class="col-md-6 text-center">
                            <div class="card w-75 center1  border-dark shadow ">
                                <!-- <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap"> -->
                                <div class="card-body">
                                    <h2 class="card-title "> Edwin A. Mendoza Cobo</h2>
                                    <img src="./img/tecnico.jpeg" alt="" width="300px" height="300px">
                                    <p class="card-text">
                                        <span>
                                            <h3> <strong> Gerente tecnico</strong></h3>
                                            <p class="lead">
                                                Co-Fundador <br>
                                                Ejecución y tecniscismos laborales
                                            </p>
                                        </span>
                                    </p>
                                    <!-- <a href="#!" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Solo Escritorio ⬇️ -->
                </div>
                <!-- Solo Escritorio ⬇️ -->
            </div>
            <!-- empresas que trabajaron para nosotros  -->
            <h3 class="display-3 text-center col-lg-12 mb-5">Empresas que confian en nosotros</h3>
            <div class="row w-100 mb-5">
                <div class="col-sm-6 ">
                    <img src="./img/logos/lucerna.jpeg" alt="" width="250" height="150"
                        class="d-sm-block mt-4 shadow rounded border border-warning center1 ">
                    <img src="./img/logos/sayonara.jpeg" alt="" width="250" height="150"
                        class="d-sm-block mt-4 shadow    rounded border border-warning center1 ">
                </div>
                <div class="col-sm-6">
                    <img src="./img//logos/semillasdelvalle.jpeg" alt="" width="250" height="150"
                        class="d-sm-block mt-4 shadow rounded border border-warning center1">
                    <img src="./img//logos/supertolima.jpeg" alt="" width="250" height="150"
                        class="d-sm-block mt-4 shadow    rounded border border-warning center1">
                </div>
            </div>


        </main>

        <!-- inicio del modal de Reporte -->

        <div class="modal" id="reporte" tabi="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" class="responsive">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title w-100" id="exampleModalLabel">Consulta tu Reporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body1">
                        <form class="d-none d-sm-none d-md-block" method="post">
                            <div class="form-inline">
                                <div class="input-group col-sm-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><img src="./img/person.png" alt="" width="20"
                                                height="20"></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="No.Activo" id="activo"
                                        name="activo" required>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                            </div>
                            <div class="form-group mt-4  mr-0">
                            </div>
                    </div>
                    <!-- Muestra el PDF -->
                    <center>
                        <div id="resultado"></div>
                    </center>

                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> -->
                        <button type="button" class="btn btn-warning w-100 text-light" id="buscar"
                            name="buscar">Consultar</button>
                    </div>.
                    </form>
                </div>
            </div>
        </div>

        <div class="modal" id="contactomodal" tabi="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title w-100" id="exampleModalLabel">Contacto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="d-none d-sm-none d-md-block" method="post" id="guardarbd"
                            name="guardarbd">
                            <div class="form-inline">
                                <div class="input-group col-sm-6 pr-0">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><img src="./img/person.png" alt="" width="20"
                                                height="20"></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre"
                                        id="nombre">
                                </div>
                                <div class="input-group col-sm-6 pr-0">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><img src="./img/telephone.png" alt="" width="20"
                                                height="20"></div>
                                    </div>
                                    <input type="tel" class="form-control" placeholder="Telefono" name="telefono"
                                        id="telefono">
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <div class="input-group col-sm-12 pr-0">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><img src="./img/envelope.png" alt="" width="20"
                                                height="20"></div>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" name="correo"
                                        id="correo">
                                </div>
                            </div>
                            <div class="form-group mt-4  mr-0">
                                <div class="input-group col-sm-12 pr-0">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><img src="./img/pencil.png" alt="" width="20"
                                                height="20"></div>
                                    </div>
                                    <input type="text" class="form-control formtamtext " placeholder="Consulta"
                                        name="consulta" id="consulta">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> -->
                        <button type="submit" class="btn btn-warning w-100 text-light" name="guardardatos" id="guardardatos">Enviar <i
                                class="glyphicon glyphicon-send"></i></button>
                    </div>
                    </form>
                    <?php 
                        include("guardar.php");
                          ?>
                </div>
            </div>
        </div>

        <!-- piping modal-->

        <div class="modal" class="d-none d-sm-none d-md-block" id="mantenimiento_electricoModal">
            <div class="modal-dialog modal-xl modal-sm">
                <div class="modal-content">
                    <!-- header -->
                    <div class="modal-header">
                        <h5 class="modal-title w-100">Mantenimiento eléctrico</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                        <div class="bd-example">
                            <div id="pipingCorouselModal" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#pipingCorouselModal" data-slide-to="0" class="active"></li>
                                    <li data-target="#pipingCorouselModal" data-slide-to="1"></li>
                                    <li data-target="#pipingCorouselModal" data-slide-to="2"></li>
                                    <li data-target="#pipingCorouselModal" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 " height="445" src="img/instalacion_electrica.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="445"
                                            src="img/instalacion_electrica_industrial.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="445" src="img/mantenimienro_electrico.jpg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="10" src="img/fotoidea16.jpeg"
                                            alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#pipingCorouselModal" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#pipingCorouselModal" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Estructura Modal  -->

        <div class="modal" class="d-none d-sm-none d-md-block" id="estructuraModal">
            <div class="modal-dialog modal-xl modal-sm">
                <div class="modal-content">
                    <!-- header -->
                    <div class="modal-header">
                        <h5 class="modal-title w-100 text-uppercase">Mantenimiento Mecánico</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                        <div class="bd-example">
                            <div id="estructuraCorouselModal" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#estructuraCorouselModal" data-slide-to="0" class="active"></li>
                                    <li data-target="#estructuraCorouselModal" data-slide-to="1"></li>
                                    <li data-target="#estructuraCorouselModal" data-slide-to="2"></li>
                                    <li data-target="#estructuraCorouselModal" data-slide-to="3"></li>
                                    <li data-target="#estructuraCorouselModal" data-slide-to="4"></li>
                                    <li data-target="#estructuraCorouselModal" data-slide-to="5"></li>
                                    <li data-target="#estructuraCorouselModal" data-slide-to="6"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 " height="445" src="img/fotoidea19.jpeg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="445" src="img/Mantenimiento-industrial.jpg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="445" src="img/piping1.jpeg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="445" src="img/fotoidea22.jpeg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="445" src="img/fotoidea11.jpeg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <video src="videos/video4.mp4" width="1200" height="480" controls></video>
                                    </div>
                                    <div class="carousel-item">
                                        <video src="videos/video2.mp4" width="1200" height="480" controls></video>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#estructuraCorouselModal" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#estructuraCorouselModal" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- footer modal -->
                    <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div> -->
                </div>
            </div>
        </div>
        <!-- Servicios Modal  -->

        <div class="modal" class="d-none d-sm-none d-md-block" id="ServiciosModal">
            <div class="modal-dialog modal-xl modal-sm">
                <div class="modal-content">
                    <!-- header -->
                    <div class="modal-header">
                        <h5 class="modal-title w-100 text-uppercase">Instalación Eléctrica Comercial</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                        <div class="bd-example">
                            <div id="ServiciosCorouselModal" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#ServiciosCorouselModal" data-slide-to="0" class="active"></li>
                                    <li data-target="#ServiciosCorouselModal" data-slide-to="1"></li>
                                    <li data-target="#ServiciosCorouselModal" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 " height="445" src="img/electricidad_comercial.jpg"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="445" src="img/instalaciones_electricas2.jpg"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="445" src="img/instalaciones_electricas3.jpg"
                                            alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#ServiciosCorouselModal" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#ServiciosCorouselModal" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- footer modal -->
                    <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div> -->
                </div>
            </div>
        </div>
        <!-- Mantenimiento modal -->

        <div class="modal" class="d-none d-sm-none d-md-block" id="mantenimientoModal">
            <div class="modal-dialog modal-xl modal-sm">
                <div class="modal-content">
                    <!-- header -->
                    <div class="modal-header">
                        <h5 class="modal-title w-100 text-uppercase">Capacitación en el manejo de Equipos</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                        <div class="bd-example">
                            <div id="mantenimientoCorouselModal" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#mantenimientoCorouselModal" data-slide-to="0" class="active"></li>
                                    <li data-target="#mantenimientoCorouselModal" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 " height="445" src="img/capacitacion.webp"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 " height="445" src="img/asesorias.png"
                                            alt="Second slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#mantenimientoCorouselModal" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#mantenimientoCorouselModal" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- footer modal -->
                    <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div> -->
                </div>
            </div>
        </div>

        <!-- footer -->


        <footer class="blog-footer text-center bg-yellow">
            <p>
                <a href="#">Regresar arriva</a>
            </p>
            <p class="gabriel">Creado por &copy; WebShopper 2022</p>
        </footer>

    </div>
    </div>

    <!-- Modal -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <script src="./js/smooth-scroll.polyfills.min.js"></script>
    <!-- Cierre del menu al hacer click en un link -->
    <script>
    $(document).ready(() => {
        $('#loginModal').modal('show');
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $('.nav-close').click(function() {
            $('.navbar-toggler-icon').click();
        });
        $('.carousel-item').hover(() => {
            $(".carousel").carousel('pause');
        });
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $("#btnIniciar").click(function() {
        $.ajax({
            url: "database.php",
            type: "post",
            data: $("#login").serialize(),
            success: function(resultado) {
                alert(resultado);
                location.reload()
            }
        });
    });

    $("#buscar").click(function() {
        $.ajax({
            url: "enviar.php",
            type: "post",
            data: $("#activo"),
            success: function(resultado) {
                $("#resultado").html(resultado);
                $('#activo').val('');
            }
        });
    });

    $("#guardardatos").click(function() {
        $.ajax({
            url: "guardar.php",
            type: "post",
            data: $("#guardarbd").serialize(),
            success: function(resultado) {
                alert(resultado);
                location.reload();
                location.destroy();
            }
        });
    });
    </script>
    <!-- iniciacion y markado del mapa -->
    <script src="./js/main.js">
    </script>
</body>

</html>