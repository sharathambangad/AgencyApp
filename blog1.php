<?php
include('admin/config/dbconfig.php');
$blog_image_path = "admin/uploads/images/blogs/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8" />
  <title>ClickForDern-Blog</title>
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
                <img class="img-responsive" src="images/logo200.png" alt="logo" />
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
              <li class="dropdown active">
                <a href="blog.php">Blog </a>
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
      <img src="images/banner/blogpage.jpg" style="width:100%;" alt="" />
      <div class="parallax-overlay"></div>
      <!-- Subpage title start -->
      <div class="banner-title-content">
        <div class="text-center">
          <h2>Blogs</h2>
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Blogs</li>
          </ul>
        </div>
      </div>
      <!-- Subpage title end -->
    </div>
    <!-- Banner area end -->

    <!-- Blog details page start -->
    <section id="main-container">
      <div class="container">
        <div class="row">
          <!-- Blog start -->
          <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> -->
          <div class="grid-container">
              <!-- 1st post start -->
              <div class="post">
                <!-- post image start -->
                <div class="post-image-wrapper">
                  <img src="images/portfolio/blog1.jpg" class="img-responsive" alt="IMG" />
                  <span class="blog-date"> 12-01-2022</span>
                </div>
                <!-- post image end -->
                <div class="post-header clearfix">
                  <h2 class="post-title">
                    heading
                  </h2>
                  <div class="post-meta">
                    <span class="post-meta-author">Posted by Admin</span>
                    <div class="pull-right">
                      <span class="post-meta-comments"><i class="fa fa-comment-o"></i> 0</span>
                      <span class="post-meta-hits"><i class="fa fa-heart-o"></i> 0</span>
                    </div>
                  </div>
                  <!-- post meta end -->
                </div>
                <!-- post heading end -->
                <div class="post-body">
                  <p style=" text-align: justify;text-justify: inter-word;">
                    we are a dynamic and forward-thinking creative advertising company that
                    specializes in delivering exceptional results for our clients in both virtual
                    and traditional advertising spaces. With our comprehensive range of services and
                    innovative approach, we help businesses thrive and stand out in today's competitive market.
                    we are a dynamic and forward-thinking creative advertising company that
                    specializes in delivering exceptional results for our clients in both virtual
                    and traditional advertising spaces. With our comprehensive range of services and
                    innovative approach, we help businesses thrive and stand out in today's competitive market.
                  </p>
                </div>
              </div>
          </div>
        </div>
      </div>
        <!--/ container end -->
    </section>
    <!-- Blog details page end -->

    <div class="gap-40"></div>

    <?php
    include('footer.php');
    ?>