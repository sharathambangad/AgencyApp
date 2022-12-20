<?php
include('admin/config/dbconfig.php');
$about_image_path = "admin/uploads/images/team/";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8" />
  <title>ClickForDern</title>
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
              <li class="dropdown">
                <a href="blog-rightside.html">Blog</a>
              </li>
              <li class="dropdown active">
                <a href="about-us.php">About Us</a>
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
      <img src="images/banner/banner1.jpg" alt="" />
      <div class="parallax-overlay"></div>
      <!-- Subpage title start -->
      <div class="banner-title-content">
        <div class="text-center">
          <h2>About Us</h2>
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>About Us</li>
          </ul>
        </div>
      </div>
      <!-- Subpage title end -->
    </div>
    <!-- Banner area end -->

    <!-- Main container start -->

    <section id="main-container">
      <div class="container">
        <!-- Company Profile -->

        <div class="row">
          <div class="col-md-12 heading text-center">
            <h2 class="title2">
              About Our Company
              <span class="title-desc">A Quality Experience Team with 4 years experience</span>
            </h2>
          </div>
        </div>
        <!-- Title row end -->

        <div class="row about-wrapper-top">
          <div class="col-md-6 ts-padding about-message">
            <h3>Who We Are</h3>
            <p>
              "Cras mattis consectetur purus sit amet fermentum. Etiam porta
              sem malesuada magna mollis euismod. Aenean eu leo quam.
              Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed
              posuere consectetur est at lobortis. Donec ullamcorper nulla non
              metus auctor fringilla. Lorem ipsum dolor sit amet mattis ut
              consequat mauris cursus.
            </p>
            <p>
              Curabitur metus felis, venenatis eu ultricies vel, vehicula eu
              urna. Phasellus eget augue id est fringilla feugiat id a tellus.
              Sed hendrerit quam sed ante euismod posuere element ante."
            </p>
          </div>
          <!--/ About message end -->
          <div class="col-md-6 ts-padding about-img" style="
                height: 374px;
                background: url(images/pages/about-1.jpg) 50% 50% / cover
                  no-repeat;
              "></div>
          <!--/ About image end -->
        </div>
        <!--/ Content row end -->

        <div class="row about-wrapper-bottom">
          <div class="col-md-6 ts-padding about-img" style="
                height: 374px;
                background: url(images/pages/about-2.jpg) 50% 50% / cover
                  no-repeat;
              "></div>
          <!--/ About image end -->
          <div class="col-md-6 ts-padding about-message">
            <h3>What We Do</h3>
            <p>
              "Cras mattis consectetur purus sit amet fermentum. Etiam porta
              sem malesuada magna mollis euismod. Aenean eu leo quam.
              Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed
              posuere consectetur est at lobortis.
            </p>
            <ul class="unstyled arrow">
              <li><a href="#">Etiam porta sem malesuada</a></li>
              <li><a href="#">Pellentesque ornare sem lacinia</a></li>
              <li><a href="#">Cras mattis consectetur purus</a></li>
              <li><a href="#">Sed hendrerit quam sed ante</a></li>
            </ul>
          </div>
          <!--/ About message end -->
        </div>
        <!--/ Content row end -->

        <!-- Company Profile -->
      </div>
      <!--/ 1st container end -->

      <div class="gap-60"></div>

      <div class="container">
        <!-- 2nd container start -->

        <!-- Team start -->
        <div class="team">
          <div class="row">
            <div class="col-md-12 heading text-center">
              <h2 class="title2">
                Meet With Our Company
                <span class="title-desc">A Quality Experience Team with 4 years experience</span>
              </h2>
            </div>
          </div>
          <!-- Title row end -->

          <div class="row text-center">

            <?php
            $query = "SELECT * FROM about_us";
            $query_run = mysqli_query($connection, $query);

            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <div class="col-md-3 col-sm-6 hexagonContainer">
                  <div class="team wow slideInLeft">
                    <div class="img-hexagon">
                      <?php echo '<img src = "' . $about_image_path . $row['image'] . '">' ?>
                      <span class="img-top"></span>
                      <span class="img-bottom"></span>
                    </div>
                    <div class="team-content">
                      <h3><?php echo $row['name']; ?></h3>
                      <p><?php echo $row['designation']; ?></p>
                      <div class="team-social">
                        <a class="linkdin" href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
                        <a class="gplus" href="mailto:<?php echo $row['email']; ?>"><i class="fa fa-google-plus"></i></a>
                        <a class="fb" href="<?php echo $row['fb_url']; ?>"><i class="fa fa-facebook"></i></a>
                        <a class="insta" href="<?php echo $row['ig_url']; ?>"><i class="fa fa-instagram"></i></a>
                        <a class="twt" href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

            <?php
              }
            }
            ?>
            <!-- <div class="col-md-3 col-sm-6">
              <div class="team wow slideInLeft">
                <div class="img-hexagon">
                  <img src="images/team/team1.jpg" alt="" />
                  <span class="img-top"></span>
                  <span class="img-bottom"></span>
                </div>
                <div class="team-content">
                  <h3>Vosgi Varduhi</h3>
                  <p>Web Designer</p>
                  <div class="team-social">
                    <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
                  </div>
                </div>
              </div>
            </div> -->
            <!--/ Team 1 end -->
            <!-- <div class="col-md-3 col-sm-6">
              <div class="team wow slideInLeft">
                <div class="img-hexagon">
                  <img src="images/team/team2.jpg" alt="" />
                  <span class="img-top"></span>
                  <span class="img-bottom"></span>
                </div>
                <div class="team-content">
                  <h3>Robert Aleska</h3>
                  <p>Web Designer</p>
                  <div class="team-social">
                    <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
                  </div>
                </div>
              </div>
            </div> -->
            <!--/ Team 2 end -->
            <!-- <div class="col-md-3 col-sm-6">
              <div class="team wow slideInRight">
                <div class="img-hexagon">
                  <img src="images/team/team3.jpg" alt="" />
                  <span class="img-top"></span>
                  <span class="img-bottom"></span>
                </div>
                <div class="team-content">
                  <h3>Taline Voski</h3>
                  <p>Web Designer</p>
                  <div class="team-social">
                    <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
                  </div>
                </div>
              </div>
            </div> -->
            <!--/ Team 3 end -->
            <!-- <div class="col-md-3 col-sm-6">
              <div class="team animate wow slideInRight">
                <div class="img-hexagon">
                  <img src="images/team/team4.jpg" alt="" />
                  <span class="img-top"></span>
                  <span class="img-bottom"></span>
                </div>
                <div class="team-content">
                  <h3>Alban Spencer</h3>
                  <p>Web Designer</p>
                  <div class="team-social">
                    <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
                  </div>
                </div>
              </div>
            </div> -->
            <!--/ Team 4 end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!-- Team end -->
      </div>
      <!-- 2nd container end -->
    </section>
    <!--/ Main container end -->
    <div class="gap-40"></div>

    <?php
    include('footer.php');
    ?>