<?php
 // add navwalker class to bootstrap navigation menu 
 require_once('wp-bootstrap-navwalker.php');

// function import_styles() {
//     wp_enqueue_style("bootstrap-style", get_template_directory_uri()."/css/bootstrap.min.css");

//     wp_enqueue_style("fontawesome", get_template_directory_uri()."/css/all.min.css");
//     // wp_enqueue_style("fontawesome", get_template_directory_uri()."/css/font-awesome.min.css");

//     wp_enqueue_style("main-style", get_template_directory_uri()."/css/main.css");
//     wp_enqueue_style("bootstrap-social", get_template_directory_uri()."/css/bootstrap-social.css");
//     wp_enqueue_style("wordpress-style", get_template_directory_uri()."/style.css");
// }

function import_scripts() {
    //adding jquery to the footer
    // wp_deregister_script('jquery'); //remove jquery default registeration
    // wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), array(),false, true); // create new registeration
    // wp_enqueue_script('jquery'); //add jquery

    // wp_enqueue_script("bootstrap-script", get_template_directory_uri() ."/js/bootstrap.min.js",array('jquery'), false, true);
    // wp_enqueue_script("my-script", get_template_directory_uri() ."/js/main.js",array(), false, true);

    wp_enqueue_script("html5shiv", get_template_directory_uri() ."/js/html5shiv.min.js");
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
    wp_enqueue_script("respond", get_template_directory_uri() ."/js/respond.min.js");
    wp_script_add_data('respond', 'conditional', 'lt IE 9');

}

function init_navigation_bar() {
    register_nav_menus(array(
        'nav-menu' => 'Navigation bar'
    ));
}


function bootstrap_navigation_bar() {
    wp_nav_menu(array(
        'theme_location' => 'nav-menu',
        'menu_class'     => 'navbar-nav ml-auto',
        'container'      => '',
        'depth'          => 2,
        'walker'         => new wp_bootstrap_navwalker()
    ));

}

// add_action('wp_enqueue_scripts', 'import_styles');
add_action('wp_enqueue_scripts', 'import_scripts');
add_action('init', 'init_navigation_bar');

?>
