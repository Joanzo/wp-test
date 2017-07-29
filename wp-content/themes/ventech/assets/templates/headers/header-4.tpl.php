<?php require_once('templates/headers/head.tpl.php'); ?>

<!-- Header Start -->

<header id="header" class="header-wrapper header-4 header-xs bg-extra-1 sticky">
    <div class="hidden-xs bg-black-50">
        <div class="container">

            <div class="stack stack-xs stack-secondary">
                <div class="stack-group stack-main stack-left">
                    <div class="stack-item stack-auto-sm">
                        <a class="btn btn-circle btn-facebook btn-xs btn-fa" href="#">
                            <i class="fa fa-facebook fa-fw">
                            </i>
                        </a>
                        <a class="btn btn-circle btn-twitter btn-xs btn-fa" href="#">
                            <i class="fa fa-twitter fa-fw">
                            </i>
                        </a>
                        <a class="btn btn-circle btn-googleplus btn-xs btn-fa" href="#">
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
                                                Regions
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link"  >
                                            <span class="mega-text">
                                                Politics
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mega-li">
                                        <a href="#"  class="mega-link">
                                            <span class="mega-text">
                                                Money
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link"  >
                                            <span class="mega-text">
                                                Entertainment
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link"  >
                                            <span class="mega-text">
                                                Sport
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mega-li">
                                        <a href="#" class="mega-link"  >
                                            <span class="mega-text">
                                                Travel
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
        <div class="stack stack-md stack-primary">
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
            <div class="stack-group stack-right stack-top menu-toggle-stack visible-xs">
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

            <div class="stack-group stack-right stack-top stack-break-md  stack-content-break-sm menu-stack" id="menu-stack">
                <div class="stack-item stack-auto-sm">
                    <div class="stack-content">
                        <?php include('templates/headers/'.$menu_primary.'.tpl.php'); ?>
                    </div>
                </div>
                <div class="stack-item stack-additional stack-auto-sm">
                    <div class="stack-content">
                        <a href="<?php
 if(isset($buy_link)) echo $buy_link; ?>" class="btn btn-primary">
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


<!-- Header Ends -->