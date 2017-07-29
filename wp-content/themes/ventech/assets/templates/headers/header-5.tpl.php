<?php require_once('templates/headers/head.tpl.php'); ?>

<!-- Header Start -->
<header id="header" class="header-wrapper header-5 header-light header-xs header-light-sticky  <?php
 if(! $layout == 'boxed-layout') echo 'full-layout';  ?>" <?php if($header_sticky) echo 'data-spy="sticky"';  ?> data-offset-top=50 >
    <div class="hidden-xs top-heading-bordered">
        <div class="container">

            <div class="stack stack-xs stack-secondary">
                <div class="stack-group stack-main stack-left">
                    <div class="stack-item stack-auto-sm">
                        <a class="btn btn-circle btn-default btn-line btn-sm btn-fa" href="#">
                            <i class="fa fa-facebook fa-fw">
                            </i>
                        </a>
                        <a class="btn btn-circle btn-default btn-line btn-sm btn-fa" href="#">
                            <i class="fa fa-twitter fa-fw">
                            </i>
                        </a>
                        <a class="btn btn-circle btn-default btn-line btn-sm btn-fa" href="#">
                            <i class="fa fa-pinterest fa-fw">
                            </i>
                        </a>
                    </div>

                </div>
                <div class="stack-group stack-right stack-top stack-break-md">
                    <div class="stack-item stack-auto-sm">
                        <div class="stack-content">
                            <div class="mega-menu secondary-menu">
                                <ul class="mega-ul">
                                    <li class="mega-li">
                                        <a href="#"  class="mega-link">
                                            <span class="mega-text">
                                                <i class="fa fa-commenting mgr-5">
                                                </i>
                                                Customer Care
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link"  >
                                            <span class="mega-text">
                                                <i class="fa fa-shopping-basket mgr-5">
                                                </i>
                                                Order Status
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mega-li">
                                        <a href="#"  class="mega-link">
                                            <span class="mega-text">
                                                <i class="fa fa-lock mgr-5">
                                                </i>
                                                Login
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link"  >
                                            <span class="mega-text">
                                                <i class="fa fa-user mgr-5">
                                                </i>
                                                Register
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="stack stack-lg stack-primary">
            <div class="stack-group stack-main stack-left stack-break-md logo-stack">
                <div class="stack-item">
                    <div class="stack-content">
                        <div class="logo">
                            <a href="index.php">

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
                        <?php include('templates/headers/'.$menu_primary.'.tpl.php'); ?>
                    </div>
                </div>
                <div class="stack-item stack-auto-sm">
                    <div class="stack-content">
                        <div class="mega-menu mega-responsive primary-menu">
                            <ul class="mega-ul">
                                <li class="mega-li visible-xs">
                                    <a href="#"  class="mega-link">
                                        <span class="mega-text">
                                            <i class="fa fa-commenting mgr-5">
                                            </i>
                                            Customer Care
                                        </span>
                                    </a>
                                </li>
                                <li class="mega-li visible-xs">
                                    <a href="#" class="mega-link"  >
                                        <span class="mega-text">
                                            <i class="fa fa-shopping-basket mgr-5">
                                            </i>
                                            Order Status
                                        </span>
                                    </a>
                                </li>
                                <li class="mega-li visible-xs">
                                    <a href="#"  class="mega-link">
                                        <span class="mega-text">
                                            <i class="fa fa-lock mgr-5">
                                            </i>
                                            Login
                                        </span>
                                    </a>
                                </li>
                                <li class="mega-li visible-xs">
                                    <a href="#" class="mega-link"  >
                                        <span class="mega-text">
                                            <i class="fa fa-user mgr-5">
                                            </i>
                                            Register
                                        </span>
                                    </a>
                                </li>
                                <li class="mega-li">
                                    <a href="#"  class="mega-link" data-toggle="modal" data-target="#page-search">
                                        <span class="mega-text">
                                            <i class="fa fa-search font-xs-4">
                                            </i>
                                        </span>
                                    </a>
                                </li>
                                <li class="mega-li">
                                    <a href="#" class="mega-link"  data-toggle="modal" data-target="#cart-modal">
                                        <span class="mega-text">
                                            <i class="fa fa-shopping-cart font-xs-4">
                                            </i>
                                            <span class="badge badge-danger badge-menu">
                                                5
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



</header>


<!-- Header Ends -->