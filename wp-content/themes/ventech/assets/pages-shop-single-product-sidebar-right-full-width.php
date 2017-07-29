<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Shop Single Product Sidebar Right Full Width -  Multipurpose Responsinve HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Elegant HTML Template, Ventech, Masonry, Font Aweseome'; ?>
<?php $description = 'Single Product Sidebar Right Modern Shopping Templates for Modern minimalist HTML 5 responsive templates for multipurpose use'; ?>
<?php $active_menu = 'menu-shop';   // To set active on the same id of primary menu ?>
<?php

// Specific Configuration for Page
$header      = 'header-shop';

?>

<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>


<section class="section section-header full-layout">
    <div class="height-xs-5 height-md-6" >
        <div class="parallax-bg bg-tech-key" data-parallax="-.6">
            <div class="content-title">
                <div class="container">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="pages-blogs-small.php">
                                Pages
                            </a>
                        </li>
                        <li>
                            <a href="pages-shop-4-columns-full.php">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="pages-shop-single-product-full.php">
                                Single Product
                            </a>
                        </li>
                        <li class="active">
                            Sidebar Right Full Width
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Right Sidebar Single Product Full Width
                    </h1>
                    <div class="subtitle-text">
                        Single product with sidebar right
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .section -->

<?php include('templates/submenus/submenu-pages-shop.tpl.php'); ?>

<section class="main-content pd-submenu full-layout">
    <div class="container">

        <?php include('templates/contents/content-shop-single-product-detail.tpl.php') ?>

        <div class="row">
            <div class="col-lg-9 col-md-8  mgb-xs-40 mgb-md-0">

                <?php include('templates/contents/content-shop-single-product-tab.tpl.php') ?>

                <br/><br/>
                <hr/>
                <h3 class="widget-title">
                    Popular Products
                </h3>
                <?php include('templates/widgets/widget-shop-related-carousel-row.tpl.php') ?>


            </div>
            <div class="col-lg-3 col-md-4">
                <h3 class="widget-title">
                    Best-Selling Similar Products
                </h3>
                <?php include('templates/widgets/widget-shop-related-vertical.tpl.php') ?>

            </div>
        </div>





    </div>
    <!-- container -->
</section>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->



<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>