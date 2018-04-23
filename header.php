<?php

?><!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="">
		<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
		<link href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500" type="text/css">
		<!--<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css"> -->
		<link rel="stylesheet" type="text/css" href="<?php get_stylesheet(); ?> /style.css"> 
	<?php wp_head(); ?>
	</head>

	<?php
	global $fullscreen;
	$extra = '';
	if ( ( $post->post_type == 'wpb_portfolio' && isset($_GET['ss']) && $_GET['ss'] == 'true' ) || $fullscreen == true ) { $extra .= ' fullscreen_slideshow'; }
	if ( post_password_required() ) { $extra .= ' pasword_protected_page'; }
	?>
	<body <?php body_class($extra); ?> >
		
		
		<div class="container-fluid class01" style="background-color: #000; padding:15px 0;">
			<div class="container clearfix social-nav">
			  <div class="col-md-6 col">
				<div class="contact-info">
					<?php
							if(is_active_sidebar('header-link')){
							dynamic_sidebar('header-link');
							}
						?>
				</div>
			  </div>
			  
			  <div class="col-md-6">
				<div id="social-top-bar" class="social-links"> 
					<?php
						if(is_active_sidebar('header-icon')){
						dynamic_sidebar('header-icon');
					}
					?>
				</div>
			  </div>
			</div>
		</div>
		<header class="masthead">
			<nav id="nav-menu-container" class="navbar">	<!-- Navigation -->
				
				<div class="container logo-menu">
				  <?php $logopath = (get_option('wpb_logo')) ? get_option('wpb_logo') : get_bloginfo('template_directory') . "/img/logo.png"; ?>
					<div class="logo col-md-4">
						<a id="logo" class="navbar-brand" href="<?php bloginfo('template_directory'); ?>" title="<?php echo bloginfo('blog_name'); ?>" style="float:left; z-index:99;">
							<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php echo bloginfo('blog_name'); ?>" width="120" height="60" style="border-radius:15px" class="img-responsive"/>
						</a>
					</div>
					
				  <?php wp_nav_menu( array('theme_location' => 'primary','menu_id' => 'navbarResponsive', 'menu_class' => 'collapse navbar-collapse' ) ); ?>
					
				  <div class="wpb_clear"></div>	<!-- end of megamenu -->
				</div>
			</nav><!-- #nav-menu-container -->
		
			<div class="container-fluid logo-menu">
				<div class="col-sm-12 col-md-12 txt_head">
					<h1>Making Your Room<br> As Good as New</h1>
					<p style="color:#fff;">It is a long established fact that a reader will be distracted by the readable<br> content of a page when looking at its layout.</p><br>
					<button type="submit">
						<a href="#" style=" font-size:17px; color:#fff;text-decoration:none">Read More</a>
					</button>
				</div>
			  
			</div>
		</header><!-- #header -->
		
		<!-- Main content start here -->
		<main id="main">
	
	
	
	
	
	<!-- <nav id="nav-menu-container" class="navbar">	
			
		  <div class="container" style=" padding-left: 0px; padding-right: 0px">
			<?php $logopath = (get_option('wpb_logo')) ? get_option('wpb_logo') : get_bloginfo('template_directory') . "/img/logo.png"; ?>
				<a id="logo" class="navbar-brand" href="<?php bloginfo('template_directory'); ?>" title="<?php echo bloginfo('blog_name'); ?>" style="float:left; z-index:99;">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php echo bloginfo('blog_name'); ?>" width="120" height="60" style="border-radius:15px" class="img-responsive"/>
				</a>
				
				<div class="collapse navbar-collapse" id="navbarResponsive" style="float:right;">
				  <ul class="navbar-nav">
					<li class="nav-item" ">
					  <a class="nav-link" href="#" style="text-decoration:none;">Home</a>
					</li>
					<li class="nav-item" ">
					  <a class="nav-link" href="about.html" style="text-decoration:none;color:#ffffff">About Us</a>
					</li>
					<li class="nav-item" ">
					  <a class="nav-link" href="services.html" style="text-decoration:none;color:#ffffff">Our Services</a>
					</li>
					<li class="nav-item" ">
					  <a class="nav-link" href="contact.html" style="text-decoration:none;color:#ffffff">Price</a>
					</li>
					<li class="nav-item" ">
					  <a class="nav-link" href="contact.html" style="text-decoration:none;color:#ffffff">Contact Us</a>
					</li>
				  </ul>
				</div>
				
				<div class="wpb_clear"></div> 		end of megamenu 
		  </div>
		</nav> #nav-menu-container 
		<header class="masthead">
			<div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="top:-81px;z-index:-9">
				
				<div class="carousel-inner">  
				  <div class="item active">
					<img src="<?php bloginfo('template_directory'); ?> /img/slide.jpg"" alt="img1" class="img-responsive" style="width:100%;">
				  </div>
				  <div class="item">
					<img src="<?php bloginfo('template_directory'); ?> /img/slide.jpg" alt="img2" class="img-responsive" style="width:100%;">
				  </div>
				</div>
				
			  </div>
			</div>
		</header><!-- #header -->