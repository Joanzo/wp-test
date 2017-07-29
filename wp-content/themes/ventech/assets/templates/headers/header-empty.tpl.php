<?php require_once('templates/headers/head.tpl.php'); ?>

<!-- Header Start -->
<header id="header" class="header-wrapper header-empty full-layout no-bg">
    <div class="container">
        <div class="stack stack-xs stack-primary">
            <div class="stack-group stack-right stack-top stack-main">
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
                    </div>
                </div>


            </div>
        </div>
    </div>



</header>
<!-- Header Ends -->