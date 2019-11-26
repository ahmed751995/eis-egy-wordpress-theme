<!DOCTYPE html>
<html dir="ltr" lang="ar">

    <head>
	<meta charset="utf-8">
	<title>
            <?php wp_title(' ','true', 'right'); ?>
            <?php bloginfo('name'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?php echo get_template_directory_uri()."/lib/bootstrap/css/bootstrap.min.css"?>" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/lib/fontawesome/css/all.css" ?> ">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/lib/font-awesome/css/font-awesome.min.css" ?> ">
	<link href="<?php echo get_template_directory_uri()."/lib/animate/animate.min.css" ?> " rel="stylesheet">
	<link href="<?php echo get_template_directory_uri()."/lib/ionicons/css/ionicons.min.css"?>" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri()."/lib/owlcarousel/assets/owl.carousel.min.css"?>" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri()."/lib/lightbox/css/lightbox.min.css"?>" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="<?php echo get_template_directory_uri()."/css/style.css"?>" rel="stylesheet">

	<?php wp_head(); ?>
    </head>
    <body>


        <!-- 

	     <nav class="navbar navbar-expand-lg navbar-light bg-light">
	     <a class="navbar-brand" href="#">
	     <img src="https://www.eis-egy.com/wp-content/uploads/2016/12/FB_IMG_1466215238540.jpg" width="30" height="30" alt="">
	     </a>
	     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	     <span class="navbar-toggler-icon"></span>
	     </button>
	     <div class="collapse navbar-collapse" id="navbarNav">
	     <?php bootstrap_navigation_bar() ?>

	     </div>
	     </nav> -->

	<header id="header" class="fixed-top">
	    <div class="container">

		<div class="logo float-left">
		    <!-- Uncomment below if you prefer to use an image logo -->
		    <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
		    <a href="#intro" class="scrollto">
			<img src="https://www.eis-egy.com/wp-content/uploads/2016/12/FB_IMG_1466215238540.jpg" alt="" class="img-fluid">
		    </a>
		</div>

		<nav class="main-nav float-right d-none d-lg-block">
		    <?php bootstrap_navigation_bar() ?>

		</nav>
	    </div>
	</header><!-- #header -->
	<!--==========================
	     Intro Section
	     ============================-->
	<? if(is_front_page()) {?>
	    <section id="intro" class="clearfix">
		<div class="container">
		    <div class="intro-info">
			<h2><?php bloginfo('name');?></h2>
			<h4> <?php echo get_bloginfo('description'); ?> </h4>
			<div>
			    <a href="#about" class="btn-get-started scrollto">عن الشركه</a>
			    <a href="#services" class="btn-services scrollto">خدماتنا</a>
			</div>
		    </div>

		</div>
	    </section><!-- #intro -->
	<?php } else { ?>
	    <section id="intro" class="clearfix intro2 mb-5">
		<div class="container">
		    <div class="intro-info">
			<h2><?php echo get_the_title(); ?></h2>
		    </div>
		</div>
	    </section><!-- #intro -->
	    
	<?php } ?>
	<main id="main">
