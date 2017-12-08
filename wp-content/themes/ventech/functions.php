<?php

// Setup

// Includes
include (get_template_directory() . '/includes/front/class.php');
include (get_template_directory() . '/includes/front/enqueue.php');
include (get_template_directory() . '/includes/front/widgets.php');
include (get_template_directory() . '/includes/front/setup.php');


// Hooks
add_action('wp_enqueue_scripts', 'v_enqueue' );
add_action('after_setup_theme', 'v_setup_theme' );
add_action('widgets_init', 'v_widgets' );

// Shortcodes

// filter
// add custom class to tag
function add_small_btn_class($html){
    //$postid = get_the_ID();
    $html = str_replace('<a','<a class="btn btn-primary btn-xs btn-line mgb-5 mgr-5"', $html);
    return $html;
}
function style_prev_link($html) {
    $html = str_replace('<a','<a class="btn btn-primary btn-xs btn-line mgb-5 mgr-5"', $html);
    $html = str_replace('">','">&laquo; ', $html);
    return $html;
}
function style_next_link($html) {
    $html = str_replace('<a','<a class="btn btn-primary btn-xs btn-line mgb-5 mgr-5"', $html);
    $html = str_replace('</a',' &raquo; </a', $html);
    return $html;
}
function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
     
    

add_filter('the_tags','add_small_btn_class');
add_filter('wp_link_pages','add_small_btn_class');
add_filter('previous_post_link','style_prev_link');
add_filter('next_post_link','style_next_link');
add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom' );