<?php

function v_enqueue() {
    wp_register_style( 'v_bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css' ); 
    wp_register_style( 'v_font-awesome', get_template_directory_uri() . '/assets/fonts/fontawesome/font.min.css' ); 
    wp_register_style( 'v_hawcon', get_template_directory_uri() . '/assets/fonts/hawcon/font.css' ); 
    wp_register_style( 'v_linearicons', get_template_directory_uri() . '/assets/fonts/linearicons/font.css' ); 
    wp_register_style( 'v_montserrat', get_template_directory_uri() . '/assets/fonts/montserrat/font.css' ); 
    wp_register_style( 'v_oswald', get_template_directory_uri() . '/assets/fonts/oswald/font.css' ); 
    wp_register_style( 'v_animsition', get_template_directory_uri() . '/assets/plugins/animsition/css/animsition.min.css' ); 
    wp_register_style( 'v_boostrap-select', get_template_directory_uri() . '/assets/plugins/bootstrap-select/css/bootstrap-select.min.css' ); 
    wp_register_style( 'v_animatecss', get_template_directory_uri() . '/assets/plugins/animatecss/animate.min.css' ); 
    wp_register_style( 'v_prettyPhoto-plugin', get_template_directory_uri() . '/assets/plugins/prettyPhoto-plugin/css/prettyPhoto.css' ); 
    wp_register_style( 'v_isotope', get_template_directory_uri() . '/assets/plugins/isotope/css/isotope.css' ); 
    wp_register_style( 'v_google-code-prettify', get_template_directory_uri() . '/assets/plugins/google-code-prettify/prettify.css' ); 
    wp_register_style( 'v_vs-plugin', get_template_directory_uri() . '/assets/plugins/vs-plugin/css/vs.min.css' ); 
    wp_register_style( 'v_slick', get_template_directory_uri() . '/assets/plugins/slick/slick.css' ); 
    wp_register_style( 'v_slick-theme', get_template_directory_uri() . '/assets/plugins/slick/slick-theme.css' ); 
    wp_register_style( 'v_masterslider', get_template_directory_uri() . '/assets/plugins/masterslider/style/masterslider.css' ); 
    wp_register_style( 'v_theme', get_template_directory_uri() . '/assets/css/theme.min.css' ); 

    wp_enqueue_style('v_bootstrap');
    wp_enqueue_style('v_font-awesome');
    wp_enqueue_style('v_hawcon');
    wp_enqueue_style('v_linearicons');
    wp_enqueue_style('v_montserrat');
    wp_enqueue_style('v_oswald');
    wp_enqueue_style('v_animsition');
    wp_enqueue_style('v_boostrap-select');
    wp_enqueue_style('v_animatecss');
    wp_enqueue_style('v_prettyPhoto-plugin');
    wp_enqueue_style('v_isotope');
    wp_enqueue_style('v_google-code-prettify');
    wp_enqueue_style('v_vs-plugin');
    wp_enqueue_style('v_slick');
    wp_enqueue_style('v_slick-theme');
    wp_enqueue_style('v_masterslider');
    wp_enqueue_style('v_theme');

    wp_register_script( 'v_bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array(), false, true ); 
    wp_register_script( 'v_jquery-easing', get_template_directory_uri() . '/assets/plugins/jquery-easing/jquery.easing.min.js', array(), false, true ); 
    wp_register_script( 'v_bootstrap-select', get_template_directory_uri() . '/assets/plugins/bootstrap-select/js/bootstrap-select.min.js', array(), false, true ); 
    wp_register_script( 'v_animsition', get_template_directory_uri() . '/assets/plugins/animsition/js/animsition.min.js', array(), false, true ); 
    wp_register_script( 'v_jquery-validation', get_template_directory_uri() . '/assets/plugins/jquery-validation/jquery-validation.min.js', array(), false, true ); 
    wp_register_script( 'v_jquery-countdown', get_template_directory_uri() . '/assets/plugins/jquery-countdown/jquery.countdown.min.js', array(), false, true ); 
    wp_register_script( 'v_jquery-parallax', get_template_directory_uri() . '/assets/plugins/jquery-parallax/jquery.parallax-1.1.3.js', array(), false, true ); 
    wp_register_script( 'v_prettyPhoto-plugin', get_template_directory_uri() . '/assets/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js', array(), false, true ); 
    wp_register_script( 'v_isotope', get_template_directory_uri() . '/assets/plugins/isotope/isotope.pkgd.min.js', array(), false, true ); 
    wp_register_script( 'v_jquery-animate-number', get_template_directory_uri() . '/assets/plugins/jquery-animate-number/jquery.animateNumber.min.js', array(), false, true ); 
    wp_register_script( 'v_google-code-prettify', get_template_directory_uri() . '/assets/plugins/google-code-prettify/prettify.js', array(), false, true ); 
    wp_register_script( 'v_twitter', get_template_directory_uri() . '/assets/"functions/twitter/jquery.tweet.js', array(), false, true ); 
    wp_register_script( 'v_jflickrfeed', get_template_directory_uri() . '/assets/plugins/jflickrfeed/jflickrfeed.min.js', array(), false, true ); 
    wp_register_script( 'v_vs-plugin', get_template_directory_uri() . '/assets/plugins/vs-plugin/js/jquery.venmond.vs.plugins.min.js', array(), false, true ); 
    wp_register_script( 'v_vs', get_template_directory_uri() . '/assets/plugins/vs-plugin/js/jquery.venmond.vs.min.js', array(), false, true ); 
    wp_register_script( 'v_slick', get_template_directory_uri() . '/assets/plugins/slick/slick.min.js', array(), false, true ); 
    wp_register_script( 'v_masterslider', get_template_directory_uri() . '/assets/plugins/masterslider/masterslider.min.js', array(), false, true ); 
    wp_register_script( 'v_googleapi', 'https://maps.google.com/maps/api/js?key=AIzaSyBTgeRi4UiqfMmuaVsjsF2x2PhsldbQtjc', array(), false, true ); 
    wp_register_script( 'v_gmap', get_template_directory_uri() . '/assets/plugins/jquery-gmap/jquery.gmap.min.js', array(), false, true ); 
    wp_register_script( 'v_theme', get_template_directory_uri() . '/assets/js/theme.js', array(), false, true ); 

    wp_enqueue_script('jquery');
    wp_enqueue_script('v_bootstrap');
    wp_enqueue_script('v_jquery-easing');
    wp_enqueue_script('v_bootstrap-select');
    wp_enqueue_script('v_animsition');
    wp_enqueue_script('v_jquery-validation');
    wp_enqueue_script('v_jquery-countdown');
    wp_enqueue_script('v_jquery-parallax');
    wp_enqueue_script('v_prettyPhoto-plugin');
    wp_enqueue_script('v_jquery-animate-number');
    wp_enqueue_script('v_google-code-prettify');
    wp_enqueue_script('v_twitter');
    wp_enqueue_script('v_jflickrfeed');
    wp_enqueue_script('v_vs-plugin');
    wp_enqueue_script('v_vs');
    wp_enqueue_script('v_slick');
    wp_enqueue_script('v_masterslider');
    wp_enqueue_script('v_googleapi');
    wp_enqueue_script('v_gmap');
    wp_enqueue_script('v_theme');
}