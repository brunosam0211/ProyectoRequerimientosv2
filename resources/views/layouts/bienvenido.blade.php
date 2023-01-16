<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inicio/Vista General</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./impact/assets/img/favicon.png" rel="icon">
  <link href="./impact/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./impact/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./impact/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./impact/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./impact/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./impact/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./impact/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <header id="header" class="header d-flex align-items-center" style="background-color: #AE223F;" >

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between" style="background-color: #AE223F;">
      <a href="" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Inicio<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar" style="background-color: #AE223F;">
        <ul>
          <li><a href="#hero">Inicio</a></li>
          <li><a href="#about">Sobre nosotros</a></li>
        
          <li><a href="#activities">Actividades</a></li>
          <li><a href="#team">Equipo</a></li>
          <li><a href="#pricing">Cargos</a></li>
          
          <li><a href="{{route('iniciar')}}"><i  class="fas fa-user"></i> Acceder al sistema</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero" style="background-color: #AE223F;">
    <div class="container position-relative" style="background-color: #AE223F;">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Bienvenido al sistema!</h2>
          <p>Estamos trabajando en el desarrollo de esta pagina, pronto tendremos mas contenido para ti!</p>
          
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="./impact/assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about" style="background-color: #202124;">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 style="color: aliceblue;">SOBRE NOSOTROS</h2>
          <P style="color: aliceblue;" >Somos una institucion educativa enfocada en la correcta formacion academica de todos nuestros estudiantes!</P>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3 style="color: aliceblue;">Que esperas para formar parte de nuestra familia!</h3>
            <img src="./img/patiocolegio.jpg" class="img-fluid rounded-4 mb-4" alt="">
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic" style="color: aliceblue;">
                Para el presente año 2023 tenemos el objetivo principal de aumentar las participaciones de quienes fueron nuestros alumnos,
                mediante las siguientes pautas:
              </p>
              <ul>
                <li style="color: aliceblue;"><i class="bi bi-check-circle-fill" ></i> Acelerar el registro de eventos en un 90%.</li>
                <li style="color: aliceblue;"><i class="bi bi-check-circle-fill" ></i> Mejorar el control de la cantidad de asistentes a las actividades programadas.</li>
                <li style="color: aliceblue;"><i class="bi bi-check-circle-fill" ></i> Mejorar el control de registro de cargos para los exalumnos.</li>
                <li style="color: aliceblue;"><i class="bi bi-check-circle-fill"></i> Mejorar la implementacion de encuestas para la programacion de las actividades.</li>
              </ul>

              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Our Services Section ======= -->
    <section id="activities" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>ACTIVIDADES</h2>
          <p>En nuestra institucion realizamos las mejores actividades, en las que diversas promociones pueden participar y disfrutar de jornadas entretenidas!</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

      
         @if (count($evento)<=0)

         @else
            @foreach($evento as $itemevento)

            <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity" align="center"></i>
              </div>
              <h3 align="center">{{$itemevento->nombre}}</h3>
              <h6>Inicia el {{$itemevento->fechaini}}.</h6>
              <h6>Termina el {{$itemevento->fechafin}}.</h6>
           
              <h6>Costo por persona: s/{{$itemevento->costoevento}} </h6>
              <a href="{{route('iniciar')}}" class="readmore stretched-link">Leer mas<i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
            @endforeach
          @endif
          

   
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team" style="background-color: #202124;">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2  style="color: aliceblue;">EQUIPO DESARROLLADOR</h2>
          <p  style="color: aliceblue;"> Se muestra a continuacion el equipo de trabajo, en la gestion del sistema:</p>
        </div>

        <div class="row gy-4" align="center">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="./img/palma.jpg" class="img-fluid" alt="">
              <h4>Anthony Palma</h4>
              <span>Desarrollador web</span>
              <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100012264062008" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/anthonypalma226/" target="_blank"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="./img/bocanegra.jpg" class="img-fluid" alt="">
              <h4>Bruno Bocanegra</h4>
              <span>Desarrollador web</span>
              <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100009524751163" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/brunosamir0211/" target="_blank"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="./img/hermes.jpg" class="img-fluid" alt="">
              <h4>Hermes Castillo</h4>
              <span>Desarrollador web</span>
              <div class="social">
                <a href="https://www.facebook.com/hermes.castillosarmiento" target="_blank"> <i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/hermescastillosarmiento/" target="_blank"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->


          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="./img/marcelo.jpeg" class="img-fluid" alt="">
              <h4>Marcelo Infante</h4>
              <span>Desarrollador web</span>
              <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100077065476458" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/marceloinfante19/" target="_blank"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" align="center" data-aos-delay="400">
            <div class="member" align="center">
              <img src="./img/samana.jpg" class="img-fluid" alt="">
              <h4>Manuel Samana</h4>
              <span>Desarrollador web</span>
              <div class="social">
                <a href="https://www.facebook.com/Manz.SR" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="" target="_blank"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>CARGOS</h2>
          <p>A continuacion se muestran los precios correspondientes por asignacion de cargo:</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">


        @if (count($cargo)<=0)

        @else
          @foreach($cargo as $itemcargo)
          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>{{$itemcargo->descripcion}}</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>

              @if(($itemcargo->descripcion)=="Presidente")
              <h4><sup>s/</sup>30<span> / alumno</span></h4>
              @else
                @if(($itemcargo->descripcion)=="Tesorero(a)")
                <h4><sup>s/</sup>20<span> / alumno</span></h4>
                @else
                  @if(($itemcargo->descripcion)=="Secretario(a)")
                  <h4><sup>s/</sup>20<span> / alumno</span></h4>
                  @else
                    @if(($itemcargo->descripcion)=="Vocal")
                    <h4><sup>s/</sup>25<span> / alumno</span></h4>
                    @else
                      @if(($itemcargo->descripcion)=="Comité ejecutivo")
                      <h4><sup>s/</sup>35<span> / alumno</span></h4>
                      @else
                        @if(($itemcargo->descripcion)=="Director(a) Electo(a)")
                        
                        <h4><sup>s/</sup>28<span>/alumno</span></h4>
                        @else
                        <h4><sup>s/</sup>28<span>/alumno</span></h4>
                        @endif
                      @endif
                    @endif
                  @endif
                @endif
              @endif
                  
              <div class="text-center"><a href="#" class="buy-btn">Leer mas</a></div>
            </div>
          </div><!-- End Pricing Item -->
          @endforeach
        @endif

       

        </div>

      </div>
    </section><!-- End Pricing Section -->


  </main><!-- End #main -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="./impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./impact/assets/vendor/aos/aos.js"></script>
  <script src="./impact/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./impact/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="./impact/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./impact/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./impact/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./impact/assets/js/main.js"></script>

</body>

</html>