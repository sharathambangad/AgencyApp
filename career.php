<?php
include('admin/config/dbconfig.php');
$career_image_path = "admin/uploads/images/career/";

$limit = 2;

$query = "SELECT COUNT(*) FROM careers";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_row($result);

$total_rows = $row[0];

$total_pages = ceil($total_rows / $limit);

?>

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
  <script src="js/jquery.min.js"></script>
  <script src="js/pagination.js" type="text/javascript"></script>

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
              <li class="dropdown active">
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
          <h2>Jobs Openings</h2>
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Career</li>
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
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="container">
              <div class="table-wrapper">
                <div id="target-content"></div>
                <div class="clearfix">
                  <ul class="pagination">
                    <?php
                    if ($total_rows != 0) {
                      if (!empty($total_pages)) {
                        for ($i = 1; $i <= $total_pages; $i++) {
                          if ($i == 1) {
                    ?>
                            <li class="pageitem active" id="<?php echo $i; ?>"><a href="JavaScript:Void(0);" data-id="<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                          <?php
                          } else {
                          ?>
                            <li class="pageitem" id="<?php echo $i; ?>"><a href="JavaScript:Void(0);" class="page-link" data-id="<?php echo $i; ?>"><?php echo $i; ?></a></li>
                      <?php
                          }
                        }
                      }
                    } else {
                      ?>
                      <h3 class="post-title"> Currently No Vacancies Available ... </h3>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--/ Content col end -->

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="sidebar sidebar-right">
              <!-- category start -->
              <div class="widget widget-categories">
                <h3>How to Apply</h3>
                <p>
                  Send your cv, relevant work experience and anything else
                  that will make you stand out to <b><a href="mailto:career@clickfordern.com">
                      career@clickfordern.com</a></b>
                </p>
              </div>
              <!-- category end -->

              <!-- tags start -->
              <!-- tags end -->
            </div>
            <!--/ Sidebar end -->
          </div>
          <!--/ Sidebar col end -->
        </div>
        <!--/ row end -->
      </div>
      <!--/ container end -->
    </section>
    <!--/ Main container end -->
    <div class="gap-40"></div>

    <?php
    include('footer.php');
    ?>