<?php require_once('templates/headers/head.tpl.php'); ?>

<!-- Header Start -->
<header id="header" class="header-wrapper header-7 header-light-sticky  <?php
 if(! $layout == 'boxed-layout') echo 'full-layout';  ?>" <?php if($header_sticky) echo 'data-spy="sticky"';  ?> data-offset-top=50 >
    <div class="top-heading hidden-sticky hidden-xs">
        <div class="container">

            <div class="stack stack-xs stack-secondary">
                <div class="stack-group stack-main stack-right stack-top">
                    <div class="stack-item stack-auto-sm">
                        <div class="stack-content">
                            <div class="mega-menu secondary-menu">
                                <ul class="mega-ul">
                                    <li class="mega-li">
                                        <a class="btn btn-facebook btn-xs btn-square btn-fa btn-anim show pull-left mgr-5" href="#">
                                            <i class="fa fa-facebook fa-fw">
                                            </i>
                                        </a>
                                        <a class="btn btn-twitter btn-xs btn-square btn-fa btn-anim show pull-left mgr-5" href="#">
                                            <i class="fa fa-twitter fa-fw">
                                            </i>
                                        </a>
                                        <a class="btn btn-googleplus btn-xs btn-square btn-fa btn-anim show pull-left mgr-5" href="#">
                                            <i class="fa fa-google-plus fa-fw">
                                            </i>
                                        </a>
                                        <a class="btn btn-linkedin btn-xs btn-square btn-fa btn-anim show pull-left mgr-5" href="#">
                                            <i class="fa fa-linkedin fa-fw">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="mega-li">
                                        <a href="index.php" class="mega-link"  >
                                            <span class="mega-text">
                                                <i class="fa fa-level-up mgr-5">
                                                </i>
                                                Ventech Demo
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
        <div class="stack stack-xl stack-primary">
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
            </div>
        </div>
    </div>



</header>


<!-- Header Ends -->