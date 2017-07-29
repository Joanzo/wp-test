<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Shop Widgets - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Shop Widgets Features for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu        = 'menu-features';   // To set active on the same id of primary menu ?>
<?php
// Specific Configuration for Page

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
                            <a href="features-typography.php">
                                Features
                            </a>
                        </li>
                        <li>
                            <a href="features-widgets.php">
                                Widgets
                            </a>
                        </li>
                        <li class="active">
                            Shop Widgets
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Shop Widgets
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-pat-dark-6 op-50"> <!-- change cover with any bg class -->
        </div>        
    </div>
</section>
<!-- .section -->

<div class="main-content">
    <div class="container">
        <div class="content-grid column-xs-1 column-sm-2 column-lg-3 pd-lr-30 wrap-side-30" data-gallery='{ "itemSelector": ".grid-item", "layoutMode": "masonry" }'>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-shop-related-vertical.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-shop-brand-carousel.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-shop-brand-filter.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-shop-category.tpl.php'); ?>
            </div>

            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-shop-last-viewed.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-shop-map.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-shop-popular.tpl.php'); ?>
            </div>

        </div>

        <div class="height-xs-1">
        </div>

        <h2 class="text-center font-bold">
            <span class="underline">
                Row Widgets
            </span>
        </h2>
        <br/><br/>

        <h3 class="section-title mgb-40">
            Brand Carousel
        </h3>
        <?php include('templates/widgets/widget-shop-brand-carousel-row.tpl.php'); ?>
        <br/><br/>

        <h3 class="section-title mgb-40">
            Related Product Carousel
        </h3>
        <?php include('templates/widgets/widget-shop-related-carousel-row.tpl.php'); ?>
        <br/><br/>
        <h3 class="section-title mgb-40">
            Best Seller Tab
        </h3>
        <?php include('templates/widgets/widget-shop-best-seller-tab.tpl.php'); ?>
        <br/><br/>
        <h3 class="section-title mgb-40">
            Featured Products
        </h3>

        <?php include('templates/widgets/widget-shop-featured-products.tpl.php'); ?>

    </div>
    <!-- container -->
</div>
<!-- .main-content -->


<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>