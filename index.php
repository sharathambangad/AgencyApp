<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8" />
  <title>Home </title>
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- Mobile Specific Metas
	================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Favicons
	================================================== -->
  <link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png" />

  <!-- CSS
	================================================== -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css" />
  <!-- Responsive styles-->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- Animation -->
  <link rel="stylesheet" href="css/animate.css" />
  <!-- Prettyphoto -->
  <link rel="stylesheet" href="css/prettyPhoto.css" />
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/owl.theme.css" />
  <!-- Flexslider -->
  <link rel="stylesheet" href="css/flexslider.css" />
  <!-- Flexslider -->
  <link rel="stylesheet" href="css/cd-hero.css" />
  <!-- Style Swicther -->
  <link id="style-switch" href="css/presets/preset1.css" media="screen" rel="stylesheet" type="text/css" />

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- Style switcher start -->
  <!-- <div class="style-switch-wrapper">
      <div class="style-switch-button">
        <i class="fa fa-sliders"></i>
      </div>
      <h3>Style Options</h3>
      <button id="preset1" class="btn btn-sm btn-primary"></button>
      <button id="preset2" class="btn btn-sm btn-primary"></button>
      <button id="preset3" class="btn btn-sm btn-primary"></button>
      <button id="preset4" class="btn btn-sm btn-primary"></button>
      <button id="preset5" class="btn btn-sm btn-primary"></button>
      <button id="preset6" class="btn btn-sm btn-primary"></button>
      <br /><br />
      <a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
    </div> -->
  <!-- Style switcher end -->

  <div class="body-inner">
    <!-- Header start -->
    <header id="header" class="navbar-fixed-top header2" role="banner">
      <div class="container">
        <div class="row">
          <!-- Logo start -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
              <a href="index.php">
                <img class="img-responsive" src="images/logo.png" alt="logo" />
              </a>
            </div>
          </div>
          <!--/ Logo end -->
          <nav class="collapse navbar-collapse clearfix" role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown active">
                <a href="index.php">Home</a>
              </li>
              <li class="dropdown">
                <a href="service.php">Services</a>
              </li>
              <li class="dropdown">
                <a href="portfolio-classic.php">Portfolio</a>
              </li>
              <li class="dropdown">
                <a href="career.php">Career</a>
              </li>
              <li class="dropdown">
                <a href="blog-rightside.html">Blog </a>
              </li>
              <li class="dropdown">
                <a href="about-us.php">About Us </a>
              </li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
          <!--/ Navigation end -->
        </div>
        <!--/ Row end -->
      </div>
      <!--/ Container end -->
    </header>
    <!--/ Header end -->

    <!-- Slider start -->
    <section id="home" class="no-padding">
      <div id="main-slide" class="ts-flex-slider">
        <div class="flexSlideshow flexslider">
          <ul class="slides">
            <li>
              <div class="overlay2">
                <img class="" src="images/slider/bg1.jpg" alt="slider" />
              </div>
              <div class="flex-caption slider-content">
                <div class="col-md-12 text-center">
                  <h2 class="animated2">Need To Invent The Future!</h2>
                  <h3 class="animated3">
                    We Making Difference To Great Things Possible
                  </h3>
                  <p class="animated4">
                    <a href="contact.php" class="slider btn btn-primary white">Call Now</a>
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="overlay2">
                <img class="" src="images/slider/bg2.jpg" alt="slider" />
              </div>
              <div class="flex-caption slider-content">
                <div class="col-md-12 text-center">
                  <h2 class="animated4">How Big Can You Dream?</h2>
                  <h3 class="animated5">We are here to make it happen</h3>
                  <p class="animated6">
                    <a href="contact.php" class="slider btn btn-primary white">Call Now</a>
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="overlay2">
                <img class="" src="images/slider/bg3.jpg" alt="slider" />
              </div>
              <div class="flex-caption slider-content">
                <div class="col-md-12 text-center">
                  <h2 class="animated7">Your Challenge is Our Progress</h2>
                  <h3 class="animated8">
                    So, You Don't Need to Go Anywhere Today
                  </h3>
                  <div class="">
                    <a class="animated4 slider btn btn-primary btn-min-block white" href="contact.php">Call Now</a>
                    <!-- <a
                        class="animated4 slider btn btn-primary btn-min-block solid"
                        href="#"
                        >Live Demo</a
                      > -->
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!--/ Main slider end -->
    </section>
    <!--/ Slider end -->

    <section id="image-block" class="image-block no-padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 ts-padding" style="
                height: 650px;
                background: url(images/image-block-bg.jpg) 50% 50% / cover
                  no-repeat;
              "></div>
          <div class="col-md-6 ts-padding img-block-right">
            <div class="img-block-head text-center">
              <h2>Know More About Our Company</h2>
              <h3>Why Choose Us</h3>
              <p>
                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                consequat ipsum, nec sagittis sem nibh id elit. Proin gravida
                nibh vel velit auctor Aenean sollicitudin, adipisicing elit
                sed lorem quis bibendum auctor.
              </p>
            </div>

            <div class="gap-30"></div>

            <div class="image-block-content">
              <span class="feature-icon pull-left"><i class="fa fa-bicycle"></i></span>
              <div class="feature-content">
                <h3>Tons of Features</h3>
                <p>
                  Consectetur adipisicing elit sed do eiusmod tempor
                  incididunt ut
                </p>
              </div>
            </div>
            <!--/ End 1st block -->

            <div class="image-block-content">
              <span class="feature-icon pull-left"><i class="fa fa-diamond"></i></span>
              <div class="feature-content">
                <h3>PowerPack Theme</h3>
                <p>
                  Proin gravida nibh vel velit auctor Aenean sollicitudin
                  adipisicing
                </p>
              </div>
            </div>
            <!--/ End 1st block -->

            <div class="image-block-content">
              <span class="feature-icon pull-left"><i class="fa fa-street-view"></i></span>
              <div class="feature-content">
                <h3>Day Night Support</h3>
                <p>
                  Simply dummy text and typesettings industry has been the
                  industry
                </p>
              </div>
            </div>
            <!--/ End 1st block -->
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio start -->
    <section id="portfolio" class="portfolio portfolio-box">
      <div class="container">
        <div class="row">
          <div class="col-md-12 heading text-center">
            <span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
            <h2 class="title2">
              Project Completed
              <span class="title-desc">A Quality Experience Team with 4 years experience</span>
            </h2>
          </div>
        </div>
        <!-- Title row end -->

        <!--Isotope filter start -->
        <div class="row text-center">
          <div class="isotope-nav" data-isotope-nav="isotope">
            <ul>
              <li><a href="#" class="active" data-filter="*">All</a></li>
              <li><a href="#" data-filter=".web-design">Web Design</a></li>
              <li><a href="#" data-filter=".development">Development</a></li>
              <li><a href="#" data-filter=".joomla">Joomla</a></li>
              <li><a href="#" data-filter=".wordpress">Wordpress</a></li>
            </ul>
          </div>
        </div>
        <!-- Isotope filter end -->

        <div class="row">
          <div id="isotope" class="isotope">
            <div class="col-sm-3 web-design isotope-item">
              <div class="grid">
                <figure class="effect-oscar">
                  <img src="images/portfolio/portfolio1.jpg" alt="" />
                  <figcaption>
                    <h3>Startup Business</h3>
                    <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                    <a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <!-- Isotope item end -->

            <div class="col-sm-3 development isotope-item">
              <div class="grid">
                <figure class="effect-oscar">
                  <img src="images/portfolio/portfolio2.jpg" alt="" />
                  <figcaption>
                    <h3>Easy to Lanunch</h3>
                    <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                    <a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i class="fa fa-search"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <!-- Isotope item end -->

            <div class="col-sm-3 joomla isotope-item">
              <div class="grid">
                <figure class="effect-oscar">
                  <img src="images/portfolio/portfolio3.jpg" alt="" />
                  <figcaption>
                    <h3>Your Business</h3>
                    <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                    <a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg3.jpg"><i class="fa fa-search"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <!-- Isotope item end -->

            <div class="col-sm-3 wordpress isotope-item">
              <div class="grid">
                <figure class="effect-oscar">
                  <img src="images/portfolio/portfolio4.jpg" alt="" />
                  <figcaption>
                    <h3>Prego Match</h3>
                    <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                    <a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg4.jpg"><i class="fa fa-search"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <!-- Isotope item end -->

            <div class="col-sm-3 joomla isotope-item">
              <div class="grid">
                <figure class="effect-oscar">
                  <img src="images/portfolio/portfolio5.jpg" alt="" />
                  <figcaption>
                    <h3>Fashion Brand</h3>
                    <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                    <a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg5.jpg"><i class="fa fa-search"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <!-- Isotope item end -->

            <div class="col-sm-3 development isotope-item">
              <div class="grid">
                <figure class="effect-oscar">
                  <img src="images/portfolio/portfolio6.jpg" alt="" />
                  <figcaption>
                    <h3>The Insidage</h3>
                    <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                    <a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <!-- Isotope item end -->

            <div class="col-sm-3 development isotope-item">
              <div class="grid">
                <figure class="effect-oscar">
                  <img src="images/portfolio/portfolio7.jpg" alt="" />
                  <figcaption>
                    <h3>Light Carpet</h3>
                    <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                    <a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i class="fa fa-search"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <!-- Isotope item end -->

            <div class="col-sm-3 development isotope-item">
              <div class="grid">
                <figure class="effect-oscar">
                  <img src="images/portfolio/portfolio8.jpg" alt="" />
                  <figcaption>
                    <h3>Amazing Keyboard</h3>
                    <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                    <a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg3.jpg"><i class="fa fa-search"></i></a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <!-- Isotope item end -->
          </div>
          <!-- Isotope content end -->
        </div>
        <!-- Content row end -->
      </div>
      <!-- Container end -->
      <div class="gap-40"></div>
    </section>
    <!-- Portfolio end -->

    <?php
    include('footer.php');
    ?>