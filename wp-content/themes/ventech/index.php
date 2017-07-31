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
      class ="<?php if (isset($layout)) echo $layout; ?>
              <?php if (isset($background)) echo $background; ?>
              <?php if (isset($body_extra_class)) echo $body_extra_class; ?>
              <?php if (isset($header_padding) && $header_padding) echo 'header-padding' ?>
              <?php if (isset($menu_vertical) && $menu_vertical) echo 'menu-vertical' ?>
              clearfix">
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

<header id="header" class="header-wrapper header-1 <?php
 if( isset($layout) &&  !$layout == 'boxed-layout') echo 'full-layout';  ?>" <?php if(isset($header_sticky) && $header_sticky) echo 'data-spy="sticky"';  ?> data-offset-top=50 >
    <div class="container">
        <div class="stack stack-xl stack-primary">
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
                            <i class="bar-icon b1">
                            </i>
                            <i class="bar-icon b2">
                            </i>
                            <i class="bar-icon b3">
                            </i>


                        </button>

                    </div>
                </div>
            </div>

            <div class="stack-group stack-right stack-top stack-break-md stack-content-break-sm menu-stack" id="menu-stack">
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


                <section class="section full-layout">
                <div class="height-xs-6 height-sm-7" data-gmap="47.770553,9.40845458984375"  data-markers='[{ "coordinate": "47.670553,9.47845458984375", "icon": "success", "infoTarget": "#map-large-info-1" }, { "coordinate": "47.770553,9.57845458984375", "icon": "warning", "infoTarget": "#map-large-info-2" },{ "coordinate": "47.800553,9.37845458984375", "icon": "danger", "infoTarget": "#map-large-info-3" }]'  data-map-zoom='10' data-map-type='TERRAIN' data-controls='advance' data-scroll-wheel='false'>
                    <div id="map-large-info-1" class="hidden">
                        <div class="width-xs-3">
                            <h3 class="widget-title">
                                Headquarters 1
                            </h3>
                            <p>
                                Grüner Weg 6<br/>
                                61169 Friedberg<br/>
                                GERMANY
                            </p>
                        </div>
                    </div>
                    <div id="map-large-info-2" class="hidden">
                        <div class="width-xs-3">
                            <h3 class="widget-title">
                                Headquarters 2
                            </h3>
                            <p>
                                Schorbachstrasse 9 <br/>
                                35510 Butzbach<br/>
                                GERMANY
                            </p>
                        </div>
                    </div>
                    <div id="map-large-info-3" class="hidden">
                        <div class="width-xs-3">
                            <h3 class="widget-title">
                                Headquarters 3
                            </h3>
                            <p>
                                Schulstrasse 4 <br/>
                                32547 Bad Oyenhausen<br/>
                                GERMANY
                            </p>
                        </div>
                    </div>

                </div>
            </section>
            <!-- .section -->

            <section class="main-content pd-submenu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mgb-xs-40 mgb-md-0">

                            <div class="section-title mgt-0">
                                <div class="mgb-10">
                                    Contact Us
                                </div>
                                <div class="section-subtitle text-light-grey">
                                    Let us just say hi to you
                                </div>
                            </div>
                            <form action="functions/contact.php" class="form-horizontal" data-form="validate">
                                <input type="hidden" id="to-email" name="to-email" value="info@venmond.com">
                                <input type="hidden" id="to-name" name="to-name" value="Venmond, Inc.">
                                <div class="alert alert-danger hide-form" data-alert="error">
                                    <div class="content-list list-xs list-vm">
                                        <div class="list-wrapper">
                                            <div class="list-item pd-0">
                                                <div class="menu-item menu-icon">
                                                    <i class="lnr lnr-warning  text-danger-0 font-xs-5">
                                                    </i>
                                                </div>
                                                <div class="menu-item menu-text">
                                                    Please check on the error !
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-success hide-form" data-alert="success">
                                    <button  data-dismiss="alert" class="close" type="button">
                                        <i class="lnr lnr-cross">
                                        </i>
                                    </button>
                                    <div class="content-list list-xs list-vm">
                                        <div class="list-wrapper">
                                            <div class="list-item pd-0">
                                                <div class="menu-item menu-icon">
                                                    <i class="lnr lnr-checkmark-circle  text-success-0 font-xs-5">
                                                    </i>
                                                </div>
                                                <div class="menu-item menu-text">
                                                    Message successfully sent !
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 controls mgb-10">
                                        <label class="control-label font-normal font-xs-2"  for="contact-form-name">
                                            Name:
                                            <span class="text-danger font-extralight font-xs-4">
                                                *
                                            </span>
                                        </label>
                                        <input type="text" class="form-control input-minimal" id="contact-form-name" name="contact-form-name" placeholder="" required>
                                    </div>
                                    <div class="col-sm-6 controls mgb-10">
                                        <label class="control-label font-normal font-xs-2"  for="contact-form-email">
                                            Email:
                                            <span class="text-danger font-extralight font-xs-4">
                                                *
                                            </span>
                                        </label>
                                        <input type="email" class="form-control input-minimal" id="contact-form-email" name="contact-form-email" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 controls mgb-10">
                                        <label class="control-label font-normal font-xs-2" for="contact-form-phone">
                                            Phone:
                                        </label>
                                        <input type="text" class="form-control input-minimal" placeholder="" id="contact-form-phone" name="contact-form-phone">
                                    </div>
                                    <div class="col-sm-6 controls mgb-10">
                                        <label class="control-label font-normal font-xs-2">
                                            Services:
                                        </label>
                                        <div class="services-select">
                                            <select data-rel="select" data-style="btn-default btn-line input-minimal form-control" data-width="100%" id="contact-form-service" name="contact-form-service"  title="Choose one of the following...">
                                                <option>
                                                    Web Design
                                                </option>
                                                <option>
                                                    Logo Design
                                                </option>
                                                <option>
                                                    Meeting
                                                </option>
                                                <option>
                                                    Other
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 controls mgb-10">
                                        <label class="control-label font-normal font-xs-2" for="contact-form-subject">
                                            Subject:
                                            <span class="text-danger font-extralight font-xs-4">
                                                *
                                            </span>
                                        </label>
                                        <input type="text" class="form-control input-minimal" placeholder="" id="contact-form-subject" name="contact-form-subject" required>
                                    </div>



                                    <div class="col-sm-12 controls mgb-30">
                                        <label class="control-label font-normal font-xs-2" for="contact-form-message">
                                            Notes :
                                            <span class="text-danger font-extralight font-xs-4">
                                                *
                                            </span>
                                        </label>
                                        <textarea placeholder="" class="form-control input-minimal height-xs-3" id="contact-form-message" name="contact-form-message" required>
                                        </textarea>
                                    </div>
                                    <div class="col-sm-12 controls mgb-10">
                                        <button type="submit" class="btn  btn-primary pdl-40 pdr-40" id="contact-form-submit" name="contact-form-submit" data-button="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>




                        </div>
                        <div class="col-md-4">
                            <div class="widget bg-pat-light-9 pdt-10 pdl-30 pdr-30 pdb-20">
                                <h3 class="widget-title">
                                    Address
                                </h3>
                                <address>
                                    <strong>
                                        Twitter, Inc.
                                    </strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">
                                        P:
                                    </abbr> (123) 456-7890
                                </address>
                                <p>
                                    Come and talk with us
                                </p>
                            </div>
                            <div class="widget bg-pat-light-9 pdt-10 pdl-30 pdr-30 pdb-30">
                                <h3 class="widget-title ">
                                    Office Schedule
                                </h3>
                                <div class="widget-body">
                                    <p class="font-light">
                                        Donec sed odio dui nulla vitae elit libero, a pharetra augue.
                                    </p>
                                    <div class="content-list">
                                        <div class="list-item">
                                            <div class="menu-item width-xs-2">
                                                Monday - Friday
                                            </div>
                                            <div class="menu-item menu-text font-light">
                                                8.00 AM - 18.00 PM
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="menu-item width-xs-2">
                                                Saturday
                                            </div>
                                            <div class="menu-item menu-text font-light">
                                                8.00 AM - 13.00 PM
                                            </div>
                                        </div>
                                        <div class="list-item">
                                            <div class="menu-item width-xs-2">
                                                Sunday
                                            </div>
                                            <div class="menu-item menu-text font-light">
                                                Close
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- .main-content -->

<!-- footer START -->
<footer class="footer-1"  id="footer">
    <div class="clearfix">
    </div>
    <div class="bottom  <?php
 if(isset($bottom_extra_class)) echo($bottom_extra_class); ?>">
        <div class="container">
            <div class="row">
                <div class="footer-widget col-sm-6 col-md-3 mgb-xs-30 mgb-md-0">
                    <?php include("templates/widgets/widget-schedule.tpl.php"); ?>
                </div>
                <div class="footer-widget col-sm-6 col-md-3 mgb-xs-30 mgb-md-0">
                    <?php include("templates/widgets/widget-gallery-carousel.tpl.php"); ?>
                </div>
                <div class="footer-widget col-sm-6 col-md-3 mgb-xs-30 mgb-md-0">
                    <?php include("templates/widgets/widget-twitter.tpl.php"); ?>
                </div>
                <div class="footer-widget col-sm-6 col-md-3 mgb-xs-30 mgb-md-0">
                    <?php include("templates/widgets/widget-newsletter.tpl.php"); ?>
                </div>
            </div>
            <!--row -->
            <div class="bottom-row">
                <div class="textline textline-right">
                    <div class="line">
                        <img class="img-responsive width-xs-3" alt="logo bottom" src="img/logo-bottom.png">
                    </div>
                </div>
                <div class="copyright">
                    <?php
                    if(isset($footer_message)) echo($footer_message); ?>
                </div>
            </div>

        </div>
        <!-- container -->
    </div>
    <!-- bottom -->

</footer>
<!-- footer END -->
<a class="top-btn"  href="#" data-scroll-to="body" data-active-scroll=300>
    <i class="lnr lnr-chevron-up text-white">
    </i>
</a>
</div>
<!-- .inner-body END  -->

<div id="page-search" role="dialog" tabindex="-1"  class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="lnr lnr-cross-circle" aria-hidden="true">
                    </i>
                </button>
                <input type="text" class="form-control input-xl input-minimal pdr-50" placeholder="Search Here">
            </div>
        </div>
    </div>
</div>
<div id="cart-modal" role="dialog" tabindex="-1"  class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    Shopping Cart
                </h3>            
            </div>
            <div class="modal-body">
                <ul class="content-list list-sm list-bordered">
                    <li class="list-item">
                        <div class="menu-item menu-icon">
                            <img src="img/shop/dlink-01.jpg" alt="example image" class="menu-i">
                        </div>
                        <div class="menu-item menu-text">
                            <div class="sc-item">
                               <span class="sc-qty ">1x </span>
                               <a class="sc-name" href="#">DIR-657 HD Media Router 1000</a>
                            </div>
                            <div class="sc-price">
                               $ 150.00 
                            </div>
                        </div>
                        <div class="menu-item menu-action">
                            <button class="btn btn-link text-grey pdt-0"  data-toggle="tooltip" data-original-title="delete item"><i class="lnr lnr-cross"></i>
                            </button>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="menu-item menu-icon">
                            <img src="img/shop/tp-wireless-01.jpg" alt="example image" class="menu-i">
                        </div>
                        <div class="menu-item menu-text">
                            <div class="sc-item">
                               <span class="sc-qty ">2x </span>
                               <a class="sc-name" href="#">TL-WA854RE 300Mbps WiFi Range Extender</a>
                            </div>
                            <div class="sc-price">
                               $ 40.00 
                            </div>
                        </div>
                        <div class="menu-item menu-action">
                            <button class="btn btn-link text-grey pdt-0"  data-toggle="tooltip" data-original-title="delete item"><i class="lnr lnr-cross"></i>
                            </button>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="menu-item menu-icon">
                            <img src="img/shop/headphone-01.jpg" alt="example image" class="menu-i">
                        </div>
                        <div class="menu-item menu-text">
                            <div class="sc-item">
                               <span class="sc-qty ">3x </span>
                               <a class="sc-name" href="#">Bluedio H+ Turbine Headphone with Bluetooth 4.1 </a>
                            </div>
                            <div class="sc-price">
                               $ 90.00 
                            </div>
                        </div>
                        <div class="menu-item menu-action">
                            <button class="btn btn-link text-grey pdt-0" data-toggle="tooltip" data-original-title="delete item"><i class="lnr lnr-cross"></i>
                            </button>
                        </div>
                    </li>                                        
                </ul>
                <hr class="mgt-0"/>
                <div class="sc-total">
                    $ 280.00
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-body" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    View Cart
                </button>
            </div>
        </div>
    </div>
</div>

    <?php wp_footer(); ?>

<!-- STYLE SWITCHER JS -->
<?php
if(isset($style_switcher) && $style_switcher)
{
    echo '<script type="text/javascript" src="demo/demo.js"></script>';
}
?>


</html>