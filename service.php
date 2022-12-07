<?php
include('admin/config/dbconfig.php');
$service_image_path = "admin/uploads/images/services/";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8" />
  <title>Services</title>
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
  <link rel="stylesheet" href="css/service.css">
  
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
              <li class="dropdown active">
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
    <div id="banner-area">
      <img src="images/banner/banner2.jpg" alt="" />
      <div class="parallax-overlay"></div>
      <!-- Subpage title start -->
      <div class="banner-title-content">
        <div class="text-center">
          <h2>Services</h2>
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Services</li>
          </ul>
        </div>
      </div>
      <!-- Subpage title end -->
    </div>
    <!-- Banner area end -->

    <!-- Main container start -->

    <section id="main-container">
      <div class="container">
        <!-- Services -->

        <div class="row">
          <div class="col-md-12 heading">
            <span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
            <h2 class="title classic">Our Services</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="hexagon-area">
              <?php
              $query = "SELECT * FROM service";
              $query_run = mysqli_query($connection, $query);

              if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {
              ?>
                  <div class="service-container wow fadeInDown" data-wow-delay=".5s">
                    <div class="service-content text-center">
                      <div class="hexagon">
                        <?php
                        echo "<a href='service-single.php?id=" . $row['id'] . "'>".$row['icon_svg']."</a>"
                        ?>
                      </div>
                      <h3> <?php echo $row['service_name']; ?> </h3>

                      <p class="service-short-desc">
                        <?php echo $row['short_desc']; ?>
                      </p>
                    </div>
                  </div>
              <?php
                }
              }
              ?>
            </div>
            <!--/ End first service -->


            <!-- Services end -->
          </div>
          <!--/ 1st container end -->

          <div class="gap-60"></div>
    </section>
    <!--/ Main container end -->


    <?php
    include('footer.php');
    ?>