<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <title>
        <?php wp_title(' ','true', 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/open-iconic-bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/animate.css"; ?> ">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/owl.carousel.min.css"; ?> ">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/owl.theme.default.min.css"?> ">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/magnific-popup.css"?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/aos.css"?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/ionicons.min.css"?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/bootstrap-datepicker.css"; ?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/jquery.timepicker.css";?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/flaticon.css"?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/icomoon.css"; ?> ">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/font-awesome.min.css";?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/style.css"; ?> ">

    <?php wp_head(); ?>
</head>

<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> القائمه
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <?php bootstrap_navigation_bar() ?>
            </div>
            <a class="navbar-brand d-none d-md-block mr-auto" href="<?php get_home_url();?>">
                <img src="<?php echo get_template_directory_uri()."/images/eis-trans.png";?>" alt="eis">
            </a>
        </div>
    </nav>
    <!-- END nav -->

    <? if(is_front_page()) {?>
    <section class="hero-wrap d-flex js-fullheight align-items-center cover" style="background-image: url(<?php echo get_template_directory_uri(). '/images/bg_2.jpg' ?>);">
        <div class="overlay"></div>
        <div class="forth js-fullheight d-flex align-items-center">
            <div class="text text-center">
                <h1><?php bloginfo('name');?> </h1>
                <h2 class="text-warning">
                    <?php echo get_bloginfo('description'); ?>
                </h2>
                <a href="tel:01000977901" class="d-md-none btn btn-success" role="button">
                    <i class="fa fa-phone fa-flip-horizontal"></i>
                    اتصل بنا
                </a>
            </div>
        </div>
    </section>
    <?php } ?> 
    <?php //else { ?>
    <!-- <section class="hero-wrap hero-wrap-2 cover">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread"><?php echo get_the_title(); ?></h1>
                </div>

            </div>
        </div>
    </section> -->

    <?php //} //end if?>



    <!-- <header class="jumbotron">
        <div class="row row-header">
            <img class=" col-6 col-sm-4 col-md-2"
                src="https://www.eis-egy.com/wp-content/uploads/2016/12/FB_IMG_1466215238540.jpg">
            <div class="col-12 col-sm-8 text-primary ">
                <h1>
                    <?php bloginfo('name');?>
                </h1>
                <p class="text-danger">
                    <?php echo get_bloginfo('description'); ?>
                </p>
            </div>
            <div class="col-12 col-sm align-self-center">
                <a role="button" class="btn btn-block btn-warning nav-link" data-toggle="modal"
                    data-target="#contactUs">
                    اتصل بنا
                </a>
            </div>
        </div>
    </header>

    <div class="modal fade" id="contactUs" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">تواصل مع شركة EIS للطاقه الشمسيه</h5>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <i class="fas fa-phone"></i><a href="tel:01000977901"> 01000977901</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark  bg-primary sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <?php bootstrap_navigation_bar() ?>

        </div>
    </nav> -->