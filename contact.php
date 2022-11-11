<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8" />
  <title>BizCraft - Responsive Html5 Template</title>
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
              <li class="dropdown">
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
              <li class="active"><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
          <!--/ Navigation end -->
        </div>
        <!--/ Row end -->
      </div>
      <!--/ Container end -->
    </header>
    <!--/ Header end -->

    <div id="banner-area">
      <img src="images/banner/banner2.jpg" alt="" />
      <div class="parallax-overlay"></div>
      <!-- Subpage title start -->
      <div class="banner-title-content">
        <div class="text-center">
          <h2>Contact Us</h2>
          <ul class="breadcrumb">
            <li>Home</li>
            <li><a href="#"> Contact</a></li>
          </ul>
        </div>
      </div>
      <!-- Subpage title end -->
    </div>
    <!-- Banner area end -->

    <!-- Main container start -->

    <section id="main-container">
      <div class="container">
        <div class="row">
          <!-- Map start here -->
          <div id="map-wrapper" class="no-padding">
            <div class="map" id="map"></div>
          </div>
          <!--/ Map end here -->
        </div>
        <!-- Content row  end -->

        <div class="gap-40"></div>

        <div class="row">
          <div class="col-md-7">
            <form id="contact-form" action="contact-form.php" method="post" role="form">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" id="name" placeholder="" type="text" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" id="email" placeholder="" type="email" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Subject</label>
                    <input class="form-control" name="subject" id="subject" placeholder="" required />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
              </div>
              <div class="text-right">
                <br />
                <button class="btn btn-primary solid blank" type="submit">
                  Send Message
                </button>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <div class="contact-info">
              <h3>Contact Details</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Suspendisse eget erat magna. Pellentesque justo ante
              </p>
              <br />
              <p>
                <i class="fa fa-home info"></i> 1102 Saint Marys, Junction
                City, KS
              </p>
              <p><i class="fa fa-phone info"></i> +(785) 238-4131</p>
              <p><i class="fa fa-envelope-o info"></i> info@bizcraft.com</p>
              <p><i class="fa fa-globe info"></i> www.bizcraft.com</p>
            </div>
          </div>
        </div>
      </div>
      <!--/ container end -->
    </section>
    <!--/ Main container end -->
    <div class="gap-40"></div>

    <?php
    include('footer.php');
    ?>