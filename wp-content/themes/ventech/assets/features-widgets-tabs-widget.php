<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Tabs Widgets - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Tabs Widgets Features for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
                            Tabs Widgets
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Tabs Widgets
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-pat-dark-6 op-50"> <!-- change cover with any bg class -->
        </div>        
    </div>
</section>
<!-- .section -->

<section class="main-content">
    <div class="container">
        <h2 class="section-title">
            Sidebar Tabs Widget
        </h2>
        <div class="content-grid column-xs-1 column-sm-2 column-lg-3 pd-lr-30 wrap-side-30" data-gallery='{ "itemSelector": ".grid-item", "layoutMode": "masonry" }'>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-tabs.tpl.php'); ?>
            </div>
        </div>
        <br/><br/>
        <h2 class="section-title">
            Carousel inside Tabs
        </h2>
        <?php include('templates/widgets/widget-shop-best-seller-tab.tpl.php'); ?>

        <div class="height-xs-1">
        </div>

    </div>
    <!-- container -->
</section>
<!-- .main-content -->


<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->



<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>