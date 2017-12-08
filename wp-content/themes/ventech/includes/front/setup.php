<?php

function v_setup_theme() {
    add_theme_support('post-thumbnails');
    //add_theme_support('menus');

    // The register_nav_menu() function automatically  call the add_theme_support( ‘menus’ ) function.
    register_nav_menu(
        'primary',
        // __ for translation
        __( 'Primary Menu', 'udemy' )
    );
}