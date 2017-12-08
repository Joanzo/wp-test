<?php

function v_widgets() {
    register_sidebar(array(
        'name'        => __( 'My Frist Theme Sidebar', 'udemy'),
        'id'          => 'v_sidebar',
        'description' => __( 'Sidebar for the udemy theme', 'udemy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3> <div class="widget-body">'
        
    ));
}