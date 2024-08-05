<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MI PAGINA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="resources/css/app.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>
    <body class="antialiased">
        <nav
        class="navbar navbar-transparent navbar-top"
        role="navigation"
        style="position: SC IA"
      >
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <!--button
              id="menu-toggle"
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#example"
            >
              <span class="sr-only">Navegación de palanca</span>
              <span class="icon-bar bar1"></span>
              <span class="icon-bar bar2"></span>
              <span class="icon-bar bar3"></span>
            </!--button-->
              <div class="logo-container">
                <div class="logo">
                  <img src="img/scia0.jpg" alt="Creative Tim Logo" />
                </div>
                <div class="brand">SC IA</div>
              </div>
            </a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="example">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="#section-nosotros"> Nosotros </a>
              </li>
              <li>
                <a href="#section-servicios"> Servicios </a>
              </li>
              <li>
                <a href="#section-contacto"> Contacto </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
      </nav>
  
      <div class="wrapper" id="section-nosotros">
        <div class="parallax filter-gradient blue primercard" data-color="blue">
          <div class="container">
            <div class="row align-items-start">
              <div class="col-md-7">
                <div class="parallax-image blob">
                  <img src="img/new_logo.JPG" />
                </div>
              </div>
              <div class="col-md-5 align-self-start">
                <div class="description text-center">
                  <h2><b> </b>SC.IA Ingeniería Aplicada</h2>
                  <br />
                  <h5>
                    <strong>SC.IA </strong> Ingeniería Aplicada es una empresa
                    especializada en la integración y aplicación de tecnologías
                    avanzadas de ingeniería para mejorar la eficiencia,
                    productividad y calidad en diversos sectores industriales.
                  </h5>
                  <!--div class="buttons">
                                      <a href="http://www.creative-tim.com/product/awesome-landing-page" class="btn btn-fill btn-neutral">
                                      <i class="fa fa-download"></i> Download
                                      </a>
                                  </!--div-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <h1 style="text-align: center" id="section-servicios">
          <b>Servicios</b>
        </h1>
        <div
          id="myCarousel"
          class="carousel slide"
          data-ride="carousel"
          style="margin-bottom: 60px"
        >
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
  
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="micard" style="height: 80vh">
                <div class="col-md-5">
                  <h4 class="header-text">Instalación de StarLink y Red local</h4>
                  <p>
                    La propuesta comercial de Starlink se ha visto beneficiada por
                    una rápida expansión geográfica y diversos acuerdos con
                    entidades públicas y privadas.
                  </p>
                  <p>
                    Tiene operaciones en cerca de 75 países y regiones en todo el
                    globo. En mayo pasado, reportó 2.7 millones de suscriptores.
                    En SC IA en Bolivia te contamos todo lo que debes saber sobre
                    Starlink.
                  </p>
                </div>
                <div class="col-md-6 col-md-offset-1">
                  <div class="demo-image">
                    <img
                      style="height: 80vh"
                      src="img/mac10.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
  
            <div class="item">
              <div class="micard" style="height: 80vh">
                <div class="col-md-5">
                  <h4 class="header-text">
                    Servicios de la NAS: comoDropbox, comoPlex.tv
                  </h4>
                  <p>
                    Los servicios de NAS (Network Attached Storage) proporcionan
                    almacenamiento de datos centralizado y accesible a través de
                    una red.
                  </p>
                  <p>
                    Estos servicios ofrecen funcionalidades similares a las de
                    servicios en la nube como Dropbox y aplicaciones de medios
                    como Plex.tv.
                  </p>
                </div>
                <div class="col-md-6 col-md-offset-1">
                  <div class="demo-image">
                    <img
                      style="height: 80vh"
                      src="img/showcases/home_4.jpg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <h1 style="text-align: center; margin-top: 30px" id="section-Informmacion credencial">
          <b>Credencial</b>
        </h1>
        <div class="section section-testimonial">
          <div class="container">
              <h4 class="header-text text-center">Perfil</h4>
              <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                      <div class="item">
                          <div class="mask">§
                              <img src="img/face-4.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>Keneth Sebastian Ayo Alarcon</p>
                          </div>
                      </div>
                      <div class="item active">
                          <div class="mask">
                              <img src="img/face-3.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>Najai Sosa Berna</p>
                              <h3></h3>
                          </div>
                      </div>
                      <div class="item">
                          <div class="mask">
                              <img src="img/face-2.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>José Carlos Apala</p>
                              <h3></h3>
                          </div>
                      </div>
                      <div class="item">
                          <div class="mask">
                              <img src="img/face-2.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>Fabiola Rojas Janco</p>
                              <h3></h3>
                          </div>
                      </div>
                      <div class="item">
                          <div class="mask">
                              <img src="img/face-2.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>Alexander Justiniano Aranibar</p>
                              <h3></h3>
                          </div>
                      </div>
                      <div class="item">
                          <div class="mask">
                              <img src="img/face-2.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>Andru Fernando Rospilloso</p>
                              <h3></h3>
                          </div>
                      </div>
                      <div class="item">
                          <div class="mask">
                              <img src="img/face-2.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>Bertho Barrios Velarde</p>
                              <h3></h3>
                          </div>
                      </div>
                      <div class="item">
                          <div class="mask">
                              <img src="img/face-2.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>Keneth Sebastian Ayo Alarcon</p>
                              <h3></h3>
                          </div>
                      </div>
                      <div class="item">
                          <div class="mask">
                              <img src="img/face-2.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>Jean Pierre Guzmán Terrazas</p>
                              <h3></h3>
                          </div>
                      </div>
                      <div class="item">
                          <div class="mask">
                              <img src="img/face-2.jpg">
                          </div>
                          <div class="carousel-testimonial-caption">
                              <p>Jose Julian Sarabia Roque</p>
                              <h3></h3>
                          </div>
                      </div>
                  </div>
                  <ol class="carousel-indicators carousel-indicators-blue">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                  </ol>
              </div>
          </div>
      </div>
  
        <div class="section section-no-padding">
          <div class="parallax filter-gradient blue" data-color="blue">
            <div class="parallax-background">
              <img
                class="parallax-background-image"
                src="img/bg2.jpg"
              />
            </div>
            <div class="info">
              <h1>Sala de Reunión</h1>
              <p></p>
            </div>
          </div>
        </div>
        <h1 style="text-align: center; margin-top: 30px" id="section-contacto">
          <b>Contacto</b>
        </h1>
        <section class="address-content dark">
          <!--  BG parallax -->
          <div id="address-content">
            <div class="bcg"
                    data-center="background-position: 50% 0px;"
                    data-bottom-top="background-position: 50% 100px;"
                    data-top-bottom="background-position: 50% -100px;"
                    data-anchor-target="#address-content"
                    style="background-image:url('img/banner/certification.jpg');"
                  >
              <!-- BG transparent -->
              <div class="bg-transparent padding-100">
                <div class="container">
                  <div class="row">
                    
                    <!-- Adress -->
                    <div class="col-md-4 adress">
                      <!-- Icon -->
                      <div class="col-md-3 icon "> <i class="fa fa-road"></i> </div>
                      <!-- End Icon -->
                      <!-- Content Item -->
                      <div class="col-md-9 content-item">
                        <h3>Dirección</h3>
                        <p>Ciudad Santa Cruz. <br>
                          Bolivia.</p>
                      </div>
                      <!-- End content Item -->
                    </div>
                    <!--End Adress -->
                    <!-- Phone -->
                     
                    <div class="col-md-4 Phone">
                      
                      <!-- Icon -->
                      <div class="col-md-3 icon"> <i class="fa fa-phone"></i> </div>
                      
                      <!-- End Icon -->
                      <!-- Content Item -->
                      <div class="col-md-9 content-item">
                        <h3>TELEFONO</h3>
                        <p>CELULAR:<span>(591) 727848391</span></p>
                      </div>
                      <!-- End content Item -->
                    </div>
                    <!--End Phone -->
                    <!-- Email -->
                    <div class="col-md-4 email">
                      <!-- Icon -->
                      <div class="col-md-3 icon"> <i class="fa fa-envelope"></i> </div>
                      <!-- End Icon -->
                      <!-- Content Item -->
                      <div class="col-md-9 content-item">
                        <h3>E-MAIL</h3>
                        <p>Support:<a href="mailto:admin@e-mail.com">adminscia@e-mail.com</a></p>
                      </div>
                      <!-- End content Item -->
                    </div>
                    <!--End Email -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End BG transparent -->
          </div>
          <!-- End BG parallax -->
        </section>
  
  
        <footer class="footer">
          <div class="container">
            <nav class="pull-left">
              <!--ul>
                              <li>
                                  <a href="#">
                                  Home
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                  Company
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                  Portfolio
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                  Blog
                                  </a>
                              </li>
                          </!--ul-->
            </nav>
            <div class="unique-social-area social-area pull-right">
              <a href="https://www.facebook.com" class="btn btn-social btn-facebook btn-simple">
                  <i class="fa fa-facebook-square"></i>
              </a>
              <a href="https://www.twitter.com" class="btn btn-social btn-twitter btn-simple">
                  <i class="fa fa-twitter"></i>
              </a>
              <a href="https://www.google.com/maps/place/Via+Santa+Cruz+-+Tienda/@-17.7729498,-63.1815488,17z/data=!3m1!4b1!4m6!3m5!1s0x93f1e7ce01ec5a5b:0x533962396acb9f49!8m2!3d-17.7729549!4d-63.1789739!16s%2Fg%2F11pzy15rwm?entry=ttu" class="btn btn-social btn-google-maps btn-simple">
                  <i class="fa fa-map-marker-alt"></i>
              </a>
            </div>
            <div class="copyright">&copy; 2024 SC IA - Santa Cruz - Bolivia</div>
          </div>
        </footer>
      </div>
    </body>
</html>
