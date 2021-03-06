<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta charset="UTF-8">
	<meta name="description" content="VERSE Technology"/>
	<title>VERSE Technology</title>
    <meta name="description" content="VERSE Technology. Enabling Access to the Industrial Digital World."/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Normalize/normalize.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/font-verse.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/paperkit.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/style.css' ?>">
	<link href="<?php echo get_template_directory_uri() . '/images/favicon.ico';?>" rel="shortcut icon" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" type="text/css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123121556-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-123121556-1');
	</script>

</head>
<body>

 <!-- Load Facebook SDK for JavaScript -->
 <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


<header class="cd-morph-dropdown">
		<a href="<?php echo get_home_url(); ?>">
			<img alt="" class="logomobile" src="<?php echo get_template_directory_uri() . '/images/Logo.png'?>">
		</a>
		<a href="#0" class="nav-trigger">
			<span aria-hidden="true"></span>
		</a>	
		<nav class="main-nav">
			<ul>
				<li>
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
					<img alt="" class="logoImg" src="<?php echo get_template_directory_uri() . '/images/Logo.png'?>">
				</a>
				</li>
				<li>
					<a href="<?php echo get_home_url() . "/blog"; ?>">Blog</a>
				</li>
				<li>
					<a href="<?php echo get_home_url() . "/careers"; ?>">Careers</a>
				</li>
				<li>
					<a href="<?php echo get_home_url() . "/investment"; ?>">Investment</a>
				</li>
				<li>
					<a href="<?php echo get_home_url() . "/shop"; ?>">Shop</a>
				</li>
				<li class="has-dropdown links industriesnav" data-content="about">
					<a href="#">Industries</a>
				</li>
			</ul>
		</nav>
		
		<div class="morph-dropdown-wrapper">
			<div class="dropdown-list">
				<ul>
					<li id="about" class="dropdown gallery">
						<a href="#" class="label">Industries</a>
						<div class="content">	
							<ul>
								<li>
									<a href="<?php echo get_home_url() . "/agriculture"; ?>">
										<em>Agriculture</em>
									</a>
								</li>

								<li>
									<a href="<?php echo get_home_url() . "/aquaculture"; ?>">
										<em>Aquaculture</em>
									</a>
								</li>

								<li>
									<a href="<?php echo get_home_url() . "/manufacturing"; ?>">
										<em>Manufacturing</em>
									</a>
								</li>
								<li>
									<a href="<?php echo get_home_url() . "/logistics"; ?>">
										<em>Logistics</em>
									</a>
								</li>
								<li>
									<a href="<?php echo get_home_url() . "/livestock"; ?>">
										<em>Livestock</em>
									</a>
								</li>
								<li>
									<a href="<?php echo get_home_url() . "/smartcities"; ?>">
										<em>Smart Cities</em>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li id="about" class="dropdown gallery">
						<a href="#" class="label">Industries</a>
						<div class="content">	
							<ul>
								<li>
									<a href="<?php echo get_home_url() . "/shop"; ?>">
										<em>Shop</em>
									</a>
								</li>

								<li>
									<a href="<?php echo get_home_url() . "/investment"; ?>">
										<em>Investment</em>
									</a>
								</li>

								<li>
									<a href="<?php echo get_home_url() . "/careers"; ?>">
										<em>Careers</em>
									</a>
								</li>
								<li>
									<a href="<?php echo get_home_url() . "/blog"; ?>">
										<em>Blog</em>
									</a>
								</li>
							</ul>
						</div>
					</li>

					
				</ul>

				<div class="bg-layer" aria-hidden="true" style="transform: scaleX(390) scaleY(320);"></div>
			</div> <!-- dropdown-list -->
		</div> <!-- morph-dropdown-wrapper -->
	</header>
	<main class="cd-main-content" id="main-content">