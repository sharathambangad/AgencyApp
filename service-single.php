<?php
include('admin/config/dbconfig.php');
$id = $_GET['id'];
$unmasked_id = base64_decode($id);
$query = "SELECT * FROM service WHERE id='$unmasked_id'";
$query_run = mysqli_query($connection, $query);
if (mysqli_num_rows($query_run) > 0) {
	$row = mysqli_fetch_assoc($query_run);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	
	<title><?php echo $row['service_name'] . "-ClickForDern" ?></title>
	<meta name="description" content="<?php echo $row['description'] ?>">
	<meta name="keywords" content="<?php echo $row['seo_keywords'] ?>">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

	<!-- CSS
	================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset1.css" media="screen" rel="stylesheet" type="text/css">

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

		<div id="banner-area">
			<img src="images/banner/servicepage.jpg" style="width:100%;" alt="" />
			<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
				<div class="text-center">
					<h2><?php echo $row['service_name']; ?></h2>
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li><a href="service.php">Services</a></li>
						<li><?php echo $row['service_name']; ?></li>
					</ul>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Portfolio item start -->
		<section id="portfolio-item">
			<div class="container">
				<!-- Portfolio item row start -->
				<div class="row">
					<!-- Portfolio item slider start -->
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="portfolio-slider">
							<div class="flexportfolio flexslider">
								<ul class="slides">
									<li><img src="images/portfolio/portfolio-bg1.jpg" alt=""></li>
									<li><img src="images/portfolio/portfolio-bg2.jpg" alt="" /></li>
									<li><img src="images/portfolio/portfolio-bg3.jpg" alt="" /></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Portfolio item slider end -->

					<!-- sidebar start -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="sidebar">
							<div class="portfolio-desc">
								<h3 class="widget-title"><?php echo $row['service_name']; ?></h3>
								<p><?php echo $row['short_desc']; ?></p>
								<br />
								<h3 class="widget-title"><?php echo $row['service_name']; ?></h3>
								<p style=" text-align: justify;text-justify: inter-word;">
									<?php echo $row['description']; ?>
								</p>
								<br />
							</div>
						</div>
					</div>
					<!-- sidebar end -->
				</div><!-- Portfolio item row end -->
			</div><!-- Container end -->
		</section><!-- Portfolio item end -->

		<div class="gap-40"></div>
		<?php
		include('footer.php');
		?>
		<!-- Javascript Files
	================================================== -->

		<!-- initialize jQuery Library -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<!-- Bootstrap jQuery -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Style Switcher -->
		<script type="text/javascript" src="js/style-switcher.js"></script>
		<!-- Owl Carousel -->
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<!-- PrettyPhoto -->
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<!-- Bxslider -->
		<script type="text/javascript" src="js/jquery.flexslider.js"></script>
		<!-- CD Hero slider -->
		<script type="text/javascript" src="js/cd-hero.js"></script>
		<!-- Isotope -->
		<script type="text/javascript" src="js/isotope.js"></script>
		<script type="text/javascript" src="js/ini.isotope.js"></script>
		<!-- Wow Animation -->
		<script type="text/javascript" src="js/wow.min.js"></script>
		<!-- SmoothScroll -->
		<script type="text/javascript" src="js/smoothscroll.js"></script>
		<!-- Eeasing -->
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<!-- Counter -->
		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
		<!-- Waypoints -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		<!-- Template custom -->
		<script type="text/javascript" src="js/custom.js"></script>
	</div><!-- Body inner end -->
</body>

</html>