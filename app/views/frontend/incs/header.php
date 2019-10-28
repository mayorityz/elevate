<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150947091-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150947091-1');
</script>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $data['title'] ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/et-line-icons.css" />
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/iconmonstr-iconic-font.min.css" />
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/lity.min.css" />
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/animate.css" />
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/owl.theme.default.min.css" />
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/main.css">
	<link rel="stylesheet" href="<?php echo ROOT; ?>/public/frontend/css/responsive.css">
	<link rel="icon" href="<?php echo ROOT; ?>/public/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800%7cPoppins:100,200,300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
	<!-- ==================================================
							load-wrapp
      ================================================== -->
	<div class="load-wrapp">
		<div class="wrap">
			<ul class="dots-box">
				<li class="dot"><span></span></li>
				<li class="dot"><span></span></li>
				<li class="dot"><span></span></li>
				<li class="dot"><span></span></li>
				<li class="dot"><span></span></li>
			</ul>
		</div>
	</div>
	<!-- ==================================================
							End load-wrapp
      ================================================== -->

	<!-- ==================================================
							navbar
      ================================================== -->
	<nav class="navbar navbar-transparent active-green navbar-black-links navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href="<?php echo ROOT; ?>">
				<img src="<?php echo ROOT; ?>/public/main_logo.png" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="main-navbar">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					  	<a class="nav-link" href="<?php echo ROOT ?>">Home</a>
				  	  </li>
					  <li class="nav-item">
					  	<a class="nav-link" href="<?php echo ROOT ?>/aboutus">About</a>
					  </li>
					  <li class="nav-item">
					  	<a class="nav-link" href="<?php echo ROOT ?>/pricing">Pricing</a>
					  </li>
					  <li class="nav-item">
					  	<a class="nav-link" href="<?php echo ROOT ?>/services">Services</a>
					  </li>
					  <li class="nav-item">
					  	<a class="nav-link" href="<?php echo ROOT ?>/blog">Our Narrative</a>
					  </li>
					  <li class="nav-item dropdown mega-item">
						  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Platform
						  </a>
						  <div class="dropdown-menu mega-menu pb-20px" aria-labelledby="navbarDropdown">
						       <div class="row">
								   <div class="col-lg-3">
								   <img alt="img" src="<?php echo ROOT; ?>/public/frontend/images/mega_menu_2.jpg" class="ml-auto mr-auto" id="nav_image">
								   </div>
								   <div class="col-lg-3">
									   <ul class="pl-15px mt-25px list-unstyled">
										   <li><h5 class="fw-600">Get Engaged</h5></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/howitworks"><span class="color-blue">-</span>How It Works</a></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/calculator"><span class="color-blue">-</span>Calculate Reach</a></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/features"><span class="color-blue">-</span>Features</a></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/auth/lostpassword"><span class="color-blue">-</span>Lost Password</a></li>
										</ul>
								   </div>
								   <div class="col-lg-3">
									   <ul class="pl-15px mt-25px list-unstyled">
										   <li><h5 class="fw-600">Company</h5></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/leadership"><span class="color-blue">-</span> Leadership</a></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/contactus"><span class="color-blue">-</span> Contact Us</a></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/careers"><span class="color-blue">-</span> Work With Us</a></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/auth/register"><span class="color-blue">-</span>Register</a></li>
							  			</ul>
								   </div>
								   <div class="col-lg-3">
									   <ul class="pl-15px mt-25px list-unstyled">
										   <li><h5 class="fw-600">Support</h5></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/pricing"><span class="color-blue">-</span> Subscribe</a></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/requestcall"><span class="color-blue">-</span> Rent An Advocate</a></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/portfolio/port3_mason_3"><span class="color-blue">-</span> Speak With Bella</a></li>
										   <li><a class="dropdown-item fs-14" href="<?php echo ROOT ?>/earnings"><span class="color-blue">-</span>Employee Earnings</a></li>
										   
							  			</ul>
								   </div>
							  </div> 
						  </div>
					  </li>
					  <li class="nav-item">
					  	<a class="nav-link" href="<?php echo ROOT ?>/stafflogin">Staff</a>
					  </li>
					<li class="nav-item log-in">
						<a class="nav-link flex-center bg-green radius-5px transition-2" href="<?php echo ROOT ?>/auth">Log In</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- ==================================================
							End navbar
      ================================================== -->
