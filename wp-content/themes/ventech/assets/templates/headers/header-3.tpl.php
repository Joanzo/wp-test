<?php require_once('templates/headers/head.tpl.php'); ?>


<!-- Header Start -->

<header id="header" class="header-wrapper header-3 menu-vertical-light" <?php if($header_sticky) echo 'data-spy="sticky"';  ?> data-offset-top=50 >
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
            <div class="stack-group stack-right stack-top menu-toggle-stack">
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

            <div class="stack-group stack-right stack-top stack-break-md stack-content-break-xl menu-stack" id="menu-stack">
                <div class="stack-item stack-auto-xl">
                    <div class="stack-content">
                        <?php include('templates/headers/'.$menu_primary.'.tpl.php'); ?>
                    </div>
                </div>
                <div class="stack-item stack-auto-xl stack-additional">
                    <div class="stack-content">
                        <a href="<?php
 if(isset($buy_link)) echo $buy_link; ?>" class="btn btn-success btn-line">
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