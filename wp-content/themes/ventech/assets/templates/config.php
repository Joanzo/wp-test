<?php

/*  GENERAL SETTING  */
$author                     = 'Venmond'; // for author meta data: < meta name = "author" content = "$author; " >
$website_name               = 'Ventech'; // for closing title every page: < title > $title; | $website_name;</title >
$footer_message             = 'Copyright &copy;2016 Venmond Inc.'; // Set Copyright message on footer
$logo_path                  = 'img/logo.png'; // Default logo URL path
$logo_sticky_path           = 'img/logo.png'; // Logo for sticky primary menu URL path
$color_theme                = 'color-default'; // Use color theme (look available  colors in css/colors/)
$background                 = ''; // add additional class at <body> element for background usually used for boxed-layout
$buy_link                   = '#'; // Buy button link
$style_switcher             = 0; // Style switcher: 0 = disable, 1 = enable


/*  PAGE TRANSITION SETTING  */ // See the transition list class option in: http://git.blivesta.com / animsition /
$page_transition            = 1; // Page Transition: 0 = disable, 1 = enable
$transition_selector        = '[data-rel^="translink"]'; // Selector for transition ( default: <a data-rel="translink" href="linkhere.php">Link</a> )
$transition_in              = "fade-in"; // page transition in class
$transition_out             = "fade-out"; // page transition out class


/*  LAYOUT SETTING  */
$layout                     = ''; // 'full-layout',  'boxed-layout'


/*  HEADER SETTING  */
$header                     = 'header-1';    // Header Template 'header - 1' or 'header - 2' or 'header - 3' or 'header - 4' ,or other 'header-*' located at templates / headers / $header.tpl.php
$menu_primary               = 'menu-primary';    // Primary Menu template located at templates/headers/$menu_primary.tpl.php
$header_sticky              = 1; // 1 = sticky ,  0 = normal
$menu_vertical              = 0; // change menu to vertical 0 = disable   1 = enable (need to add button to open the vertical menu example: features-header-3 page)
$header_padding             = 0; // Add padding top to body inner dynamically according header height, 1 = yes, 0 = no


/*  FOOTER SETTING   */  
$footer                     = 'footer-1'; // 'footer-1' or 'footer-2' or 'footer-3' or 'footer-4' ,or other 'footer-*' located at templates / footers / $footer.tpl.php


/*  EXTRA CLASS SETTING  */
$bottom_extra_class         = ''; // add additional class at inside footer < div class = "bottom $bottom_extra_class" >
$body_extra_class           = ''; // add additional class at <body> element for specific page customization

?>