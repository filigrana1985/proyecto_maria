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

    
  <title>I.D.E.A. Ingeniería en Diseños Electronicos y Automatización</title>
</head>

<body>


  <div class="containert-fluid">
    <!-- Menu de navegacion  -->
    <nav class="navbar navbar-dark bg-yellow fixed-top  ">
      <a class="navbar-brand" href="./index.html">
        <h5> <span class="logo"><span class="logolah5"></span>I.D.E.<span class="logoa">A</span></span> <small
            class="colorsmall">Ingeniería en Diseños Electronicos y Automatización</small></h5>
      </a>
      <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <li class="nav-item"><a href="https://www.facebook.com/idea.filigrana" target="_blank"
            class="nav-link p-1 ml-4 icons-a animated fadeInLeft"><img src="./img/facebook.svg" alt="facebook"
              width="24" height="24"></a></li>
        <li class="nav-item"><a
            href="https://wa.me/573117740721?text=Me%20Gustaria%20conocer%20mas%20sobre%20los%20servicios"
            target="_blank" class="nav-link p-1 ml-4 icons-a animated fadeInLeft" data-toggle="tooltip"
            data-placement="bottom" title="+573117740721"><img src="./img/whatsapp.svg" alt="whatsapp" width="24"
              height="24"></a></li>
        <li class="nav-item " data-toggle="modal" data-target="#contactomodal"><span
            class="pointer nav-link p-1 ml-4 mr-4 icons-a animated fadeInLeft"><img src="./img/envelope.svg" alt="Email"
              width="24" height="24"></span>
        </li>
      </ul>
      <?php
            
            if(!isset($_SESSION['usuario'])){
              echo '<button type="button" class="btn btn-dark btn-round" data-toggle="modal" data-target="#loginModal"> Iniciar Sesion</button> ';
            }else{
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
            <a href="https://www.facebook.com/idea.filigrana" target="_blank"
              class="nav-link text-center d-smartphone ml-2 icons-a animated fadeInLeft"><img src="./img/facebook.svg"
                alt="facebook" width="24" height="24"></a>
            <a href="https://wa.me/573117740721?text=Me%20Gustaria%20conocer%20mas%20sobre%20los%20servicios"
              data-toggle="tooltip" data-placement="bottom" title="+573117740721"
              class="nav-link text-center d-smartphone ml-2 icons-a animated fadeInLeft"><img src="./img/whatsapp.svg"
                alt="whatsapp" width="24" height="24"></a>
            <a href="mailto:ideaelectricity@gmail.com"
              class=" 13edc12   ws text-center d-smartphone ml-2 mr-4 icons-a animated fadeInLeft"><img
                src="./img/envelope.svg" alt="Email" width="24" height="24"></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav-close" href="./index.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav-close" href="#quienesomos">¿Quienes Somos?</a>
          </li>
          <li class="nav-item  active dropdown transitions-1">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Servicios</a>
            <div class="dropdown-menu bg-yellow" aria-labelledby="dropdown01">
              <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                href="#piping">Piping</a>
              <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                href="#estructura">Estructura</a>
              <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                href="#servicio">Servicios</a>
              <a data-scroll class="dropdown-item text-secondary nav-close bg-yellow transitions-1"
                href="#mantenimiento">Mantenimiento</a>
            </div>
          </li>
          <li class="nav-item active">
            <a data-scroll href="#contacto" class="nav-link nav-close navcontac">Contactanos</a>
          </li>

          <?php
            
            if(!isset($_SESSION['usuario'])){
              echo '<li class="nav-item inactive">
                      <a data-scroll data-toggle="modal" href="#" class="nav-link nav-close navcontac">Reportes de Mantenimientos</a>
                    </li>';
            
            }else{
              echo '<li class="nav-item active">
                      <a data-scroll data-toggle="modal" href="#" data-target="#reporte" class="nav-link nav-close navcontac">Reportes de Mantenimientos</a>
                    </li>
                    <li class="nav-item active">
                      <a  href="/logout.php" data-target="#cerrar" class="nav-link nav-close navcontac">Cerrar Sesion</a>
                    </li>
                    ';
            }
          
          ?>
        </ul>
      </div>
    </nav>

     
    <!-- Modal de Iniciar sesion  -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form id="login"  method="post" >
                  <div class="form-group">
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu Usuario">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu Contraseña">
                  </div>
                  <button type="button" class="btn btn-warning btn-block btn-round" id="btnIniciar">Iniciar sesion</button>
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
          <h1><span class="logo"><span class="logolah1"></span>I.D.E.<span class="logoa">A.</span></span> Ingeniería en Diseños Electronicos y Automatización</h1>
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
      <div class="parte2">
        <h1 class="text-center display-4">Somos una empresa dedica a brindar soluciones industriales </h1>
        <div class="row m-3">
          <div class="col-md-6">
            <img src="./img/factory2.png" alt="factory" class="rounded-circle center1" width="140" height="140">
            <h2 class="text-center">Historia de <span class="logo"><span class="logolah1">LA</span>TIN<span
                  class="logob">A</span></span></h2>
            <p>
              Desde hace más de una década, estamos abocados a la tarea de ejecutar los proyectos de empresas de la
              construcción, metalúrgica, minería y toda otra empresa que requiera mano de obra calificada, estándares de
              calidad certificados y celeridad en los plazos necesarios.
              <br><br>
              habiendo satisfecho la demandas de empresas con certificación ISO, UNE, IRAM y AWS. En obras como la
              ampliación de mayor producción de destilería en 2012. La provisión de soportes y estructuras metálicas de
              seguridad (escaleras, barandales y pasarelas) para ICSA, en la construcción de las subestaciones MTV en
              destilería Lujan de Cuyo.
              <br><br>
              Mantenimiento para empresas mineras dedicadas al área del petróleo, y explotación de áridos, CONSTRUMIN y
              LOGICO S.A.
            </p>
          </div>
          <div class="col-md-6">
            <img class="rounded-circle center1" src="./img/factory.png" alt="factory" width="140" height="140">
            <h2 class="text-center">Visión</h2>
            <p>
              Nuestra visión es crecer hasta convertirnos en la empresa que ejecute los grandes y pequeños proyectos de
              todo rubro que requiera de nuestros servicios. <br> <br>
              Proveyendo seguridad mano de obra calificada y tecnología a su proyecto y brindando a través de nuestra
              experiencia soluciones para la ejecución del mismo. <br> <br>
              Adquiriendo nuevas tecnologías y herramientas que nos permitan ser cada vez más eficientes, a la vez que
              expeditivos en la concreción de los trabajos con las calidades requeridas.

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
            <img src="./img/flechasbuttom.svg" class="flechabuttom rotate mt-0  d-none d-sm-none d-md-block" alt="">
          </div>
          <!-- Slider de Servicios -->
          <div id="carouselExampleIndicators" class="carousel slide d-none d-sm-none d-md-block" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 " height="445" src="./img/piping1.jpeg" height="445" alt="First slide">
                <div class="carousel-caption  d-none d-md-block  ">
                  <div class="tamtext1">
                    <h5 class="display-1  text-shadow">PIPING</h5>
                    <h5 class="text-sm-left text-shadow ">
                      Personal calificado para la ejecución de isometrías de todo tipo. Trabajando bajo nomas exigentes
                      de seguridad y calidad, para lograr los resultados y plazos que su obra requiere. Aplicando toda
                      nuestra experiencia y tecnología en el prefabricado, soldadura, aplicación de tratamientos de
                      superficie (arenado) y todo tipo de pinturas industriales requeridas. También amplias
                      instalaciones para acopio, carga y descarga de materiales.
                    </h5>
                    <button data-toggle="modal" data-target="#pipingModal" data-toggle="modal"
                      class="btn btn-warning text-light d-none d-sm-none d-md-block">
                      Ver mas
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 " height="445" src="./img/estructura2.jpeg" alt="Second slide">
                <div class="carousel-caption  d-none d-md-block  ">
                  <div class="tamtext1">
                    <h5 class="display-1 text-shadow">ESTRUCTURA</h5>
                    <h5 class="text-sm-left text-shadow">
                      Construcción y montaje de toda clase de estructuras metálicas, (soportería, techos, aberturas,
                      escaleras, entrepisos, etc.) cumpliendo con todas las normas y calidades solicitadas en planos.
                      Contamos con personal calificado y capacitado en ejecución de trabajos en planta y obra, con
                      seguridad y eficiencia. Aplicando toda nuestra experiencia y tecnología en el prefabricado,
                      soldadura, aplicación de tratamientos de superficie (arenado) y todo tipo de pinturas industriales
                      requeridas.
                    </h5>
                    <button data-toggle="modal" data-target="#estructuraModal" data-toggle="modal"
                      class="btn btn-turquesa text-light d-none d-sm-none d-md-block">
                      Ver mas
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 " height="445" src="./img/casco.jpg" alt="Third slide">
                <div class="carousel-caption  d-none d-md-block  ">
                  <div class="tamtext1">
                    <h5 class="display-1 text-shadow">SERVICIOS</h5>
                    <h5 class="text-sm-left text-shadow">
                      Personal con experiencia y capacitación para el mantenimiento de calderas acuotubulares y
                      humotubulares, cintas transportadoras, tolvas, silos tanques, zarandas y separadores. Para
                      empresas mineras, de alimentación y/o petroleras.
                    </h5>
                    <button data-toggle="modal" data-target="#ServiciosModal" data-toggle="modal"
                      class="btn btn-azulintenso text-light d-none d-sm-none d-md-block">
                      Ver mas
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 " height="445" src="./img/casco.jpg" alt="fourth slide">
                <div class="carousel-caption  d-none d-md-block ">
                  <div class="tamtext1">
                    <h5 class="display-1 text-shadow">MANTENIMIENTO</h5>
                    <h5 class=" text-sm-left text-shadow">
                      Montaje de líneas de alimentación de gas, energía eléctrica, redes de incendios y otros, mediante
                      todo tipo de conducción, hacia y desde plantas industriales. Contamos con personal calificado y
                      capacitado en ejecución de trabajos en planta y obra, con seguridad y eficiencia.
                    </h5>
                    <button data-toggle="modal" data-target="#mantenimientoModal" data-toggle="modal"
                      class="btn btn-rojofluor text-light d-none d-sm-none d-md-block">
                      Ver mas
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev zindex-300" href="#carouselExampleIndicators" role="button"
              data-slide="prev">
              <span class="flechas__left" aria-hidden="true">❮</span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next zindex-300" href="#carouselExampleIndicators" role="button"
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
          <div class="row no-gutters" id="piping">
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
                  <h4 class="card-title text-warning">PIPING</h4>
                  <p class="card-text">Personal calificado para la ejecución de isometrías de todo tipo. Trabajando bajo
                    nomas
                    exigentes de seguridad y calidad, para lograr los resultados y plazos que su obra requiere.
                    Aplicando toda nuestra experiencia y tecnología en el prefabricado, soldadura, aplicación
                    de tratamientos de superficie (arenado) y todo tipo de pinturas industriales requeridas.
                    También amplias instalaciones para acopio, carga y descarga de materiales.</p>
                  <button data-toggle="modal" data-target="#pipingModal"
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
                  <h4 class="card-title text-turquesa" id="estructura">ESTRUCTURA</h4>
                  <p class="card-text">Construcción y montaje de toda clase de estructuras metálicas, (soportería,
                    techos, aberturas,
                    escaleras, entrepisos, etc.) cumpliendo con todas las normas y calidades solicitadas en planos.
                    Contamos con personal calificado y capacitado en ejecución de trabajos en planta y obra, con
                    seguridad y eficiencia. Aplicando toda nuestra experiencia y tecnología en el prefabricado,
                    soldadura, aplicación de tratamientos de superficie (arenado) y todo tipo de pinturas
                    industriales requeridas.</p>
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
                  <h4 class="card-title text-azulintenso" id="servicio">SERVICIOS</h4>
                  <p>
                    Personal con experiencia y capacitación para el mantenimiento de calderas acuotubulares y
                    humotubulares,
                    cintas transportadoras, tolvas, silos tanques, zarandas y separadores. Para empresas mineras,
                    de alimentación y/o petroleras.
                  </p>
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
                  <h4 class="card-title text-rojofluor" id="mantenimiento">MANTENIMIENTO</h4>
                  <p>Montaje de líneas de alimentación de gas, energía eléctrica, redes de incendios y otros,
                    mediante todo tipo de conducción, hacia y desde plantas industriales. Contamos con personal
                    calificado y capacitado en ejecución de trabajos en planta y obra, con seguridad y eficiencia.</p>
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
          <h1 class="text-center bg-yellow h1especial text-light display-3">Contamos con personal altamente capacitado
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
            <div class="col-md-4 text-center ">
              <div class="card w-75 center1  border-dark shadow ">
                <!-- <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap"> -->
                <div class="card-body">
                  <h2 class="card-title "> Mario F. Santana </h2>
                  <img src="./img/myavatar.jpg" alt="" class="rounded-circle" width="140px" height="140px">
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
            <div class="col-md-4 text-center">
              <div class="card w-75 center1  border-dark shadow ">
                <!-- <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap"> -->
                <div class="card-body">
                  <h2 class="card-title "> Dante A. Campoy </h2>
                  <img src="./img/myavatar.jpg" alt="" class="rounded-circle" width="140px" height="140px">
                  <p class="card-text">
                    <span>
                      <h3> <strong> Gerente tecnico</strong></h3>
                      <p class="lead">
                        Co-Fundador <br>
                        Ejecucion y tecniscismos laborales
                      </p>
                    </span>
                  </p>
                  <!-- <a href="#!" class="btn btn-primary">Go somewhere</a> -->
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card w-75 center1  border-dark shadow ">
                <!-- <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap"> -->
                <div class="card-body">
                  <h3 class="card-title "> Ariel A. Campoy</h3>
                  <img src="./img/myavatar.jpg" alt="" class="rounded-circle" width="140px" height="140px">
                  <p class="card-text">
                    <span>
                      <h3> <strong> Relaciones Comerciales</strong></h3>
                      <p class="lead">
                        A cargo de establecer contactos Comerciales con clientes potenciales.
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
        <!-- fin del personal -->
        <!-- Inicio de contacto y mapas -->
        <h3 class="display-3 text-center col-lg-12 mb-5 mt-5 d-none d-sm-none d-md-block" id="contacto">Contactanos</h3>
        <h3 class="display-4 text-center col-lg-10 d-block d-sm-block d-md-none" id="contacto">Contactanos</h3>
        <section class="row ml-2 mr-2 mb-5">
          <div class="col-sm-6">
            <div class="d-none d-sm-none d-md-block">

              <form action="enviar.php" method="post">
                <div class="form-inline">
                  <div class="input-group col-sm-6 pr-0">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><img src="./img/person.png" alt="" width="20" height="20"></div>
                    </div>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                  </div>
                  <div class="input-group col-sm-6 pr-0">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><img src="./img/telephone.png" alt="" width="20" height="20"></div>
                    </div>
                    <input type="tel" class="form-control" placeholder="Telefono" name="telefono">
                  </div>
                </div>
                <div class="form-group mt-4">
                  <div class="input-group col-sm-12 pr-0">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><img src="./img/envelope.png" alt="" width="20" height="20"></div>
                    </div>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="form-group mt-4  mr-0">
                  <div class="input-group col-sm-12 pr-0">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><img src="./img/pencil.png" alt="" width="20" height="20"></div>
                    </div>
                    <input type="text" class="form-control formtamtext " placeholder="Consulta" name="consulta">
                  </div>
                </div>

                <div class="form-group ">
                  <div class="col-lg-12 pr-0 center">
                    <button type="submit" class="btn btn-warning w-100 text-light">Enviar</button>
                  </div>
                </div>
              </form>
              <div class="row ml-2 mr-2">
                <h5 class="lineamedio mt-5 "><span>O también</span></h5>
                <div class="col-md-4 pl-1 pr-1">
                  <span class="text-center col-sm-12">
                    <h3> <small>Por Whatsapp</small></h3>
                  </span>
                  <a href="https://wa.me/5492612496785?text=Me%20Gustaria%20conocer%20mas%20informacion" target="_blank"
                    data-toggle="tooltip" data-placement="bottom" title="+54926126947457"
                    class="btn btn-success float-sm-right  p-1 col-12"><img src="./img/whatsapp.svg" alt="email"
                      width="24" height="24"></a>
                </div>
                <div class="col-md-4 pl-1 pr-1">
                  <span class="text-center col-sm-12">
                    <h3> <small>Por Email</small></h3>
                  </span>
                  <a href="mailto:inbox@latinaindustrial.com" class="btn btn-warning float-sm-right  p-1 col-12"><img
                      src="./img/envelope.svg" alt="email" width="24" height="24"></a>
                </div>
                <div class="col-md-4 pl-1 pr-1">
                  <span class="text-center col-sm-12">
                    <h3> <small>Por Facebook</small></h3>
                  </span>
                  <a href="https://www.facebook.com/pages/category/Industrial-Company/Latina-Servicios-Industriales-314298915357289/"
                    target="_blank" class="btn btn-primary float-sm-right  p-1 col-12"><img src="./img/facebook.svg"
                      alt="email" width="24" height="24"></a>

                </div>


              </div>
            </div>
            <!-- solo para smartphone -->
            <div class="d-block d-sm-block d-md-none">

              <form action="enviar.php" method="post">
                <div class="form-inline">
                  <div class="input-group col-sm-6 pr-0">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><img src="./img/person.png" alt="" width="20" height="20"></div>
                    </div>
                    <input type="text" class="form-control" name="nombre" placeholder="nombre">
                  </div>
                  <div class="input-group col-sm-6 pr-0">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><img src="./img/telephone.png" alt="" width="20" height="20"></div>
                    </div>
                    <input type="tel" class="form-control" name="telefono" placeholder="telefono">
                  </div>
                  <div class="input-group col-sm-12 pr-0">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><img src="./img/envelope.png" alt="" width="20" height="20"></div>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="email">
                  </div>
                </div>

                <div class="form-group mt-1  mr-0">
                  <div class="input-group col-sm-12 pr-0">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><img src="./img/pencil.png" alt="" width="20" height="20"></div>
                    </div>
                    <input type="text" class="form-control formtamtext " id="consulta" name="consulta"
                      placeholder="Consulta">
                  </div>
                </div>

                <div class="form-group ">
                  <div class="col-lg-12 pr-0 center">
                    <button type="submit" class="btn btn-warning w-100">Envia Mensaje</button>
                  </div>
                </div>
              </form>
              <div class="row center1">
                <h5 class="lineamedio mt-5 "><span>e también</span></h5>
                <div class="col-md-4 pl-1 pr-1">
                  <h3 class="text-center col-sm-12"> <small>Por Whatsapp</small></h3></span>
                  <a href="https://wa.me/5492612496785?text=Me%20Gustaria%20conocer%20mas%20informacion" target="_blank"
                    data-toggle="tooltip" data-placement="bottom" title="+54926126947457"
                    class="btn btn-success float-sm-right  p-1 col-12"><img src="./img/whatsapp.svg" alt="email"
                      width="24" height="24"></a>
                </div>
                <div class="col-md-4 pl-1 pr-1">
                  <h3 class="text-center col-sm-12"> <small>Por Email</small></h3></span>
                  <a href="mailto:inbox@latinaindustrial.com" class="btn btn-warning float-sm-right  p-1 col-12"><img
                      src="./img/envelope.svg" alt="email" width="24" height="24"></a>
                </div>
                <div class="col-md-4 pl-1 pr-1 mb-4">
                  <h3 class="text-center col-sm-12"> <small>Por Facebook</small></h3></span>
                  <a href="https://www.facebook.com/pages/category/Industrial-Company/Latina-Servicios-Industriales-314298915357289/"
                    target="_blank" class="btn btn-primary float-sm-right  p-1 col-12"><img src="./img/facebook.svg"
                      alt="email" width="24" height="24"></a>

                </div>


              </div>
            </div>
          </div>

          <!-- mapa -->
          <div class="col-sm-6">
            <div class="rounded-lg border-yellow shadow" id="mapid">

            </div>
          </div>
        </section>
        <!-- empresas que trabajaron para nosotros  -->
        <h3 class="display-3 text-center col-lg-12 mb-5">Empresas que confian en nosotros</h3>
        <div class="row w-100 mb-5">
          <div class="col-sm-4 ">
            <img src="./img/logos/Construmin.png" alt="" width="250" height="150"
              class="d-sm-block mt-4 shadow rounded border border-warning center1 ">
            <img src="./img/logos/falter.png" alt="" width="250" height="150"
              class="d-sm-block mt-4 shadow rounded border border-warning center1 ">
            <img src="./img/logos/GRUPO PETTERSEN.png" alt="" width="250" height="150"
              class="d-sm-block mt-4 shadow    rounded border border-warning center1 ">
          </div>
          <div class="col-sm-4">
            <img src="./img//logos/ICSA LOGO.png" alt="" width="250" height="150"
              class="d-sm-block mt-4 shadow rounded border border-warning center1">
            <img src="./img//logos/IMPSA_logo.gif" alt="" width="250" height="150"
              class="d-sm-block mt-4 shadow    rounded border border-warning center1">
            <img src="./img//logos/Insercom srl.jpg" alt="" width="250" height="150"
              class="d-sm-block mt-4 shadow  rounded border border-warning center1">
          </div>
          <div class="col-sm-4">
            <img src="./img//logos/red_cordoba.png" width="250" height="150" alt=""
              class="d-sm-block mt-4 shadow   rounded border border-warning center1">
            <img src="./img//logos/solis sa.jpg" width="250" height="150" alt=""
              class="d-sm-block mt-4 shadow  rounded border border-warning center1">
            <img src="./img//logos/vinaterra.jpg" width="250" height="150" alt=""
              class="d-sm-block mt-4 shadow rounded border border-warning center1">
          </div>
        </div>


    </main>

    <!-- inicio del modal de Reporte -->

    <div class="modal" id="reporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title w-100" id="exampleModalLabel">Consulta tu Reporte</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="d-none d-sm-none d-md-block"  method="post">
              <div class="form-inline">
                <div class="input-group col-sm-6 pr-0">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><img src="./img/person.png" alt="" width="20" height="20"></div>
                  </div>
                  <input type="text" class="form-control" placeholder="No.Activo" id="activo" name="activo" required>
                </div>
              </div>
              <div class="form-group mt-4">
              </div>
              <div class="form-group mt-4  mr-0">
              </div>
              </div>
              <!-- Muestra el PDF -->
              <center><div id="resultado"></div></center> 

              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> -->
                <button type="button" class="btn btn-warning w-100 text-light" id="buscar" name="buscar">Enviar</button>
              </div>.
          </form>
        </div>
      </div>
    </div>

    <div class="modal" id="contactomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
          <form class="d-none d-sm-none d-md-block" action="enviar.php" method="post">
            <div class="form-inline">
              <div class="input-group col-sm-6 pr-0">
                <div class="input-group-prepend">
                  <div class="input-group-text"><img src="./img/person.png" alt="" width="20" height="20"></div>
                </div>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
              </div>
              <div class="input-group col-sm-6 pr-0">
                <div class="input-group-prepend">
                  <div class="input-group-text"><img src="./img/telephone.png" alt="" width="20" height="20"></div>
                </div>
                <input type="tel" class="form-control" placeholder="Telefono" name="telefono">
              </div>
            </div>
            <div class="form-group mt-4">
              <div class="input-group col-sm-12 pr-0">
                <div class="input-group-prepend">
                  <div class="input-group-text"><img src="./img/envelope.png" alt="" width="20" height="20"></div>
                </div>
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
            </div>
            <div class="form-group mt-4  mr-0">
              <div class="input-group col-sm-12 pr-0">
                <div class="input-group-prepend">
                  <div class="input-group-text"><img src="./img/pencil.png" alt="" width="20" height="20"></div>
                </div>
                <input type="text" class="form-control formtamtext " placeholder="Consulta" name="consulta">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button> -->
          <button type="submit" class="btn btn-warning w-100 text-light">Enviar <i
              class="glyphicon glyphicon-send"></i></button>
        </div>
        </form>
        <div class="row ml-2 mr-2 mb-1">
          <h5 class="lineamedio "><span>w también</span></h5>
          <div class="col-md-12 ">
            <h3 class="text-center col-sm-12"> <small>Email</small></h3>
            <a href="mailto:inbox@latinaindustrial.com" class="btn btn-warning float-sm-right  p-1 col-12"><img
                src="./img/envelope.svg" alt="email" width="24" height="24"></a>
          </div>
          <div class="col-md-12 ">
            <h3 class="text-center col-sm-12"> <small>Whastsapp</small></h3>
            <a href="https://wa.me/5492612496785?text=Me%20Gustaria%20conocer%20mas%20informacion" target="_blank"
              data-toggle="tooltip" data-placement="bottom" title="+54926126947457"
              class="btn btn-success float-sm-right  p-1 col-12"><img src="./img/whatsapp.svg" alt="email" width="24"
                height="24"></a>
          </div>
          <div class="col-md-12 ">
            <h3 class="text-center col-sm-12"> <small>Facebook</small></h3>
            <a href="https://www.facebook.com/pages/category/Industrial-Company/Latina-Servicios-Industriales-314298915357289/"
              target="_blank" class="btn btn-primary float-sm-right  p-1 col-12"><img src="./img/facebook.svg"
                alt="email" width="24" height="24"></a>

          </div>


        </div>
      </div>
    </div>
  </div>

    <!-- piping modal-->

    <div class="modal" class="d-none d-sm-none d-md-block" id="pipingModal">
      <div class="modal-dialog modal-xl modal-sm">
        <div class="modal-content">
          <!-- header -->
          <div class="modal-header">
            <h5 class="modal-title w-100">PIPING</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">&times;</button>
          </div>
          <!-- body -->
          <div class="modal-body">
            <div class="bd-example">
              <div id="pipingCorouselModal" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#pipingCorouselModal" data-slide-to="0" class="active"></li>
                  <li data-target="#pipingCorouselModal" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block w-100 " height="445" src="./img/piping1.jpeg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 " height="445" src="./img/casco.jpg" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#pipingCorouselModal" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#pipingCorouselModal" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1 class="text-warning text-uppercase">
                  Piping
                </h1>

              </div>
              <div class="col-sm-12">
                <p>Personal calificado para la ejecución de isometrías de todo tipo.
                  Trabajando bajo nomas exigentes de seguridad y calidad, para lograr
                  los resultados y plazos que su obra requiere. Aplicando toda nuestra
                  experiencia y tecnología en el prefabricado, soldadura, aplicación de
                  tratamientos de superficie (arenado) y todo tipo de pinturas industriales
                  requeridas. También amplias instalaciones para acopio, carga y descarga de materiales.</p>
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
            <h5 class="modal-title w-100 text-uppercase">estructura</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">&times;</button>
          </div>
          <!-- body -->
          <div class="modal-body">
            <div class="bd-example">
              <div id="estructuraCorouselModal" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#estructuraCorouselModal" data-slide-to="0" class="active"></li>
                  <li data-target="#estructuraCorouselModal" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block w-100 " height="445" src="./img/estructura1.jpeg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 " height="445" src="./img/estructura2.jpeg" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#estructuraCorouselModal" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#estructuraCorouselModal" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1 class="text-turquesa text-uppercase">
                  Estuctrura
                </h1>

              </div>
              <div class="col-sm-12">
                <p>Construcción y montaje de toda clase de estructuras metálicas,
                  (soportería, techos, aberturas, escaleras, entrepisos, etc.)
                  cumpliendo con todas las normas y calidades solicitadas en planos.
                  Contamos con personal calificado y capacitado en ejecución de trabajos
                  en planta y obra, con seguridad y eficiencia. Aplicando toda nuestra
                  experiencia y tecnología en el prefabricado, soldadura, aplicación de
                  tratamientos de superficie (arenado) y todo tipo de pinturas industriales requeridas.</p>
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
            <h5 class="modal-title w-100 text-uppercase">Servicios</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">&times;</button>
          </div>
          <!-- body -->
          <div class="modal-body">
            <div class="bd-example">
              <div id="ServiciosCorouselModal" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#ServiciosCorouselModal" data-slide-to="0" class="active"></li>
                  <li data-target="#ServiciosCorouselModal" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block w-100 " height="445" src="./img/casco.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 " height="445" src="./img/casco.jpg" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#ServiciosCorouselModal" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#ServiciosCorouselModal" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1 class="text-azulintenso text-uppercase">
                  Servicios
                </h1>

              </div>
              <div class="col-sm-12">
                <p>Personal con experiencia y capacitación para el
                  mantenimiento de calderas acuotubulares y humotubulares,
                  cintas transportadoras, tolvas, silos tanques, zarandas y
                  separadores. Para empresas mineras, de alimentación y/o
                  petroleras.</p>
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
            <h5 class="modal-title w-100 text-uppercase">MANTENIMIENTO</h5>
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
                    <img class="d-block w-100 " height="445" src="./img/casco.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 " height="445" src="./img/casco.jpg" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#mantenimientoCorouselModal" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mantenimientoCorouselModal" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1 class="text-rojofluor text-uppercase">
                  MANTENIMIENTO
                </h1>

              </div>
              <div class="col-sm-12">
                <p>Montaje de líneas de alimentación de gas, energía eléctrica,
                  redes de incendios y otros, mediante todo tipo de conducción,
                  hacia y desde plantas industriales. Contamos con personal calificado
                  y capacitado en ejecución de trabajos en planta y obra, con seguridad
                  y eficiencia.</p>
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
      <p class="gabriel">Creado por &copy; Gabriel Vauccassovitch</p>
    </footer>

  </div>
      <!-- Modal -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
  <script src="./js/smooth-scroll.polyfills.min.js"></script>
  <!-- Cierre del menu al hacer click en un link -->
  <script>
    
    $(document).ready(() => {
      $('#loginModal').modal('show');
        $(function () {
         $('[data-toggle="tooltip"]').tooltip()
       });
      $('.nav-close').click(function () {
        $('.navbar-toggler-icon').click();
      });
      $('.carousel-item').hover(() => {
        $(".carousel").carousel('pause');
      });
    });
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });

    $("#btnIniciar").click(function () {
      $.ajax({
        url: "database.php",
        type: "post",
        data: $("#login").serialize(), 
        success: function (resultado) {
          alert(resultado);
          location.reload()
        }
      });
    });

    $("#buscar").click(function () {
      $.ajax({
        url: "enviar.php",
        type: "post",
        data: $("#activo"),
        success: function (resultado) {
          $("#resultado").html(resultado);
          $('#activo').val('');
        }
      });
    });
 
    
  </script>
  <!-- iniciacion y markado del mapa -->
  <script src="./js/main.js">
  </script>
</body>

</html>