<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta charset="UTF-8">
	<meta name="description" content="VERSE Technology"/>
  <meta property="og:url"           content="<?php echo esc_url( get_permalink() ); ?>" />
  <meta property="og:title"         content="<?php the_title()?>" />
  <meta property="og:image"         content="<?php echo get_the_post_thumbnail_url() ?>" />
	  <title>VERSE Technology</title>
    <meta name="description" content="VERSE Technology. Enabling Access to the Industrial Digital World."/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Normalize/normalize.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/Bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/font-verse.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/paperkit.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/style.css' ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
<style>
  
.align-center {
  text-align: center;
}

.single-post {
  padding-top: 0px;
}
.single-post .post-head {
  padding: 50px 0px;
  background-size: cover;
  background-position: center;
  color: #ffffff;
  position: relative;
  margin-bottom: 48px;
}
.single-post .post-head:before {
  content: '';
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.single-post .post-head a {
  color: #ffffff;
}
.single-post .post-head a:hover,
.single-post .post-head a:focus {
  text-decoration: underline;
}
.single-post .post-head .category {
  position: relative;
  font-size: 26px;
}
.single-post .post-head .category:before,
.single-post .post-head .category:after {
  content: "";
  height: 1px;
  width: 16px;
  background: rgba(255, 255, 255, 0.5);
  position: absolute;
  top: 50%;
  margin-top: -1px;
}
.single-post .post-head .category:before {
  left: -24px;
}
.single-post .post-head .category:after {
  right: -24px;
}
.single-post .post-head .category a {
  text-transform: uppercase;
  font-weight: 400;
}
.single-post .post-head .title {
  color: #ffffff;
  text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
  margin: 32px 0px;
  font-size: 49px;
  line-height: 64px;
}
.single-post .post-head .page-title {
  margin: 0px;
}
.single-post .post-head .post-meta {
  text-transform: uppercase;
}
.single-post .post-head .post-meta .author {
  margin-right: 12px;
}
.single-post .post-head .post-meta .time {
  position: relative;
  font-weight: 300;
}

.single-post .post-head.no-image {
  padding: 80px 0px;
}
.single-post .post-head.no-image:before {
  background: #19ddc4;
}
.single-post .post-head.no-image a {
  color: #ffffff;
}
.single-post .post-head.no-image a:hover,
.single-post .post-head.no-image a:focus {
  color: #e6e6e6;
}
.single-post .post-head.no-image .title {
  color: #ffffff;
  text-shadow: none;
}
.single-post .post-content {
  max-width: 700px;
  margin: 0 auto;
  font-size: 18px;
  line-height: 3.6rem;
  word-wrap: break-word;
}

.single-post .post-content p{
  max-width: 699px;
  margin: 0 auto;
  font-size: 20px;
  line-height: 2.6rem;
  margin-bottom: 18px;
  text-align: left;
  font-weight: 300;
}

.single-post .post-content h2, .single-post .post-content h3, .single-post .post-content h4 {
  margin-top: 56px;
  margin-bottom: 20px;
  line-height: 45px;
}



.single-post .post-content img {
  max-width: 100%;
  margin-top: 28px;
  margin-bottom: 20px;
}
.single-post .post-content .fluid-width-video-wrapper {
  margin-bottom: 30px;
}
/*====================================================
	8. share
====================================================*/
.share-wrap {
  max-width: 700px;
  margin: 24px auto 40px;
}
.share-wrap .share-links {
  padding: 0;
  margin: 0;
  list-style: none;
  font-size: 0px;
  line-height: 0px;
}
.share-wrap .share-links li {
  display: inline-block;
  margin: 0px 4px 8px 4px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  overflow: hidden;
}
.share-wrap .share-links li a {
  display: block;
  width: 120px;
  color: #ffffff;
  font-size: 1.4rem;
  line-height: 28.5px;
}
.share-wrap .share-links li a:hover,
.share-wrap .share-links li a:focus {
  border: none;
}
.share-wrap .share-links li a i {
  margin-right: 8px;
}
.share-wrap .share-links li .facebook {
  background: #3b5998;
}
.share-wrap .share-links li .facebook:hover {
  background: #2d4373;
}
.share-wrap .share-links li .twitter {
  background: #1da1f2;
}
.share-wrap .share-links li .twitter:hover {
  background: #0c85d0;
}
.share-wrap .share-links li .google-plus {
  background: #db4437;
}
.share-wrap .share-links li .google-plus:hover {
  background: #bd2e22;
}
.share-wrap .share-links li .linkedin {
  background: #097bb5;
}
.share-wrap .share-links li .linkedin:hover {
  background: #075a84;
}
.share-wrap .share-links li .pinterest {
  background: #cc2127;
}
.share-wrap .share-links li .pinterest:hover {
  background: #a01a1f;
}
/*====================================================
	9. about author
====================================================*/
.about-author-wrap {
  max-width: 700px;
  margin: 40px auto;
}
.about-author {
  padding: 24px;
  -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.15);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.about-author .avatar {
  width: 96px;
  height: 96px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.about-author .details {
  margin-left: 112px;
}
.about-author .details .author {
  margin-top: 0px;
}
.about-author .details .author a {
  color: #222222;
}
.about-author .details .author a:hover,
.about-author .details .author a:focus {
  color: #19ddc4;
}
.about-author .details .meta-info {
  margin-top: 8px;
  padding: 0;
}
.about-author .details .meta-info li {
  list-style: none;
  float: left;
  margin-right: 16px;
  color: #999999;
}
.about-author .details .meta-info li a {
  color: #999999;
}
.about-author .details .meta-info li a:hover,
.about-author .details .meta-info li a:focus {
  color: #19ddc4;
}
.about-author .details .meta-info li.location i {
  margin-right: 8px;
}
/*====================================================
	10. subscribe form
====================================================*/
.subscribe-box-wrap {
  max-width: 700px;
  margin: 40px auto;
}
.subscribe-box-wrap .subscribe {
  padding: 24px;
  -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.15);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  text-align:center;
}
.subscribe-box-wrap .subscribe .subscribe-title {
  margin-top: 0;
}
.sign-up-form {
  display: -webkit-flex;
  display: flex;
}
.sign-up-form .form-group {
  display: -webkit-flex;
  display: flex;
  -webkit-flex: 1;
  flex: 1;
  -webkit-flex-basis: auto;
  flex-basis: auto;
  margin-right: 8px;
}
.sign-up-form .btn {
  display: -webkit-flex;
  display: flex;
}

</style>



<?php if (have_posts()) : while (have_posts()) : the_post();?>

  	<div class="main-content-area single-post">
  		<article>
  			<div class="post-head" style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');">
  				<div class="container align-center">
  					<div class="row">
  						<div class="col-md-offset-1 col-md-10">
  							<span class="category">
                  <?php $categories = get_the_category(); ?>
                  <a href="<?php echo get_category_link($categories[0]->term_id)?>">
                  <?php
                  if ( ! empty( $categories ) ) {
                      echo esc_html( $categories[0]->name );
                    }
                  ?>
                </a>
  							</span>
  							<h1 class="title"><?php the_title() ?></h2>
  							<div class="post-meta">
  								<time class="time" datetime="{{date format="YYYY-MM-DD HH:MM:SS"}}" itemprop="datePublished"><?php the_date(); ?></time>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="container">
  				<div class="row">
  					<div class="col-md-offset-1 col-md-10">
  						<div class="post-content">
                  <?php the_content(); ?>
  						</div>
              <div class="share-wrap clearfix align-center">
                <br>
                <br>
              	<ul class="share-links">
              		<!-- twitter -->
                  <li>
              			<a style="display: block;width: 120px;color: #ffffff;font-size: 14px;line-height: 28.5px;font-weight: bold;" class="twitter" href="https://twitter.com/share?url=<?php echo get_permalink();?>" onclick="window.open(this.href, 'twitter-share', 'width=580,height=296');return false;" title="Share on Twitter"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
              		</li>
                  <!-- facebook -->
              		<li>
                    <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="<?php the_permalink(); ?>">Share</a></div>
              		</li>
                  <!-- linkedin -->
                  <li>
              			<a style="display: block;width: 120px;color: #ffffff;font-size: 14px;line-height: 28.5px;font-weight: bold;"  class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink();?>" onclick="window.open(this.href, 'linkedin-share', 'width=580,height=296');return false;" title="Share on Linkedin"><i class="fab fa-linkedin"></i>&nbsp;Linkedin</a>
              		</li>

              	</ul>
              </div>
              <div class="comment-wrap" style="margin-bottom:40px;margin-bottom: 40px;padding: 0 6%;">
                <div id="fb-root"></div>
                  <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11&appId=244242639444076';
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-comments" data-width="100%"></div>
              </div>              
              <?php endwhile; endif; ?>
  					</div>
  				</div>
  			</div>
  		</article>
  </div>


<? get_footer() ?>