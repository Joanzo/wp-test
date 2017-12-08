<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="en"><!--<![endif]-->
<head>

    <!-- Meta Information -->
    <meta charset="utf-8" />
    <title><?php if (isset($title)) echo $title; ?> | <?php if (isset($website_name)) echo $website_name; ?></title>
    <meta name="keywords" content="<?php if (isset($keywords)) echo $keywords; ?>" />
    <meta name="description" content="<?php if (isset($description)) echo $description; ?>">
    <meta name="author" content="<?php if (isset($author)) echo $author; ?>">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.ico">

    <?php wp_head(); ?>

    <link href="css/colors/<?php if (isset($color_theme)) echo $color_theme; else echo 'color-default'; ?>.css" rel="stylesheet" type="text/css" id="color-css">
    
    <!-- PRELOADER CSS -->
    <style>
        .preloader-container {
            background: #FFFFFF; width:100%; height:100%; position:fixed; z-index: 9999; top: 0; left: 0;
            transition:all cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.5s;
        }
        .preloader-container.remove{
            opacity: 0;
        }
    </style>


    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">


    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="plugins/modernizr/modernizr.js"></script> 


</head>

<body data-active-menu ="<?php if (isset($active_menu)) echo $active_menu; ?>"
      data-active-submenu ="<?php if (isset($active_submenu)) echo $active_submenu; ?>"
      data-page-transition ="<?php if (isset($page_transition)) echo $page_transition; ?>"
      data-transition-in ="<?php  if (isset($transition_in)) echo $transition_in; ?>"
      data-transition-out ="<?php  if (isset($transition_out)) echo $transition_out; ?>"
      data-transition-selector = '<?php  if (isset($transition_selector)) echo $transition_selector; ?>'
      <?php body_class() ?>
      >
      <!-- class ="<php if (isset($layout)) echo $layout; ?>
      <php if (isset($background)) echo $background; ?>
              <php if (isset($body_extra_class)) echo $body_extra_class; ?>
              <php if (isset($header_padding) && $header_padding) echo 'header-padding' ?>
              <php if (isset($menu_vertical) && $menu_vertical) echo 'menu-vertical' ?>
              clearfix" -->
    <div class="preloader-container">
        <div class="square-split loader-container">
            <div class="loader">
                <div class="square-1"></div>
                <div class="square-2"></div>
                <div class="square-3"></div>
                <div class="square-4"></div>
            </div>
        </div>
    </div>
    <div class="body-inner animsition">
    <header id="header" class="header-wrapper header-2 header-sm header-light header-light-sticky full-layout" <?php if(isset($header_sticky) && $header_sticky) echo 'data-spy="sticky"';  ?> data-offset-top=50 >
    <div class="container">
        <div class="stack stack-sm stack-primary">
            <div class="stack-group stack-main stack-left stack-break-md logo-stack">
                <div class="stack-item">
                    <div class="stack-content">
                        <div class="logo">
                            <a href="index.php" data-rel="translink">

                                <img src="<?php
                                if(isset($logo_path)) echo $logo_path; ?>" class="img-responsive stack-img hidden-sticky" alt="Ventech Logo">

                                <!-- switch logo with other image if you need to change on sticky -->
                                <img src="<?php
                                if(isset($logo_sticky_path)) echo $logo_sticky_path; ?>" class="img-responsive stack-img visible-sticky" alt="Ventech Logo">

                                <div class="logo-title hide-pos">
                                    VENTECH
                                </div>
                                <div class="logo-subtitle hide-pos">
                                    RESPONSIVE TEHCNOLOGY WEB THEME
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stack-group stack-right stack-top menu-toggle-stack visible-xs hidden-sm">
                <div class="stack-item">
                    <div class="stack-content">
                        <button id="sidebar-toggle-btn" data-target="#menu-stack" data-toggle="nav-right-collapse" type="button" class="menu-toggle" >
                            <i class="bar-icon b1 bg-extra-2">
                            </i>
                            <i class="bar-icon b2 bg-extra-2">
                            </i>
                            <i class="bar-icon b3 bg-extra-2">
                            </i>
                        </button>

                    </div>
                </div>
            </div>

            <div class="stack-group stack-right stack-top stack-break-md stack-content-break-sm menu-stack">
                <div class="stack-item stack-auto-sm">
                    <div class="stack-content">
                        <?php
                            if (has_nav_menu( 'primary' )) {
                                wp_nav_menu( array(
                                    'theme_location'  => 'primary',
                                    'container'       => 'nav',
                                    'container_class' => 'mega-menu mega-responsive primary-menu',
                                    'menu_class'      => 'mega-ul',
                                    'fallback_cb'     => false,
                                    'depth'           => 4,
                                ));
                            }
                        ?>
                    </div>
                </div>

                <div class="stack-item stack-auto-sm">
                    <div class="stack-content">
                        <!-- menu/here -->
                    </div>
                </div>
                <div class="stack-item stack-auto-sm stack-additional">
                    <div class="stack-content">
                        <a href="<?php
 if(isset($buy_link)) echo $buy_link; ?>" class="btn btn-primary btn-line">
                            <span class="mega-text">
                                Buy Theme
                            </span>
                        </a>
                        <button class="btn btn-link"  data-toggle="modal" data-target="#page-search">
                            <span class="mega-text">
                                <i class="fa fa-search">
                                </i>
                            </span>
                        </button>

                    </div>
                </div>

            </div>


        </div>
    </div>



</header>