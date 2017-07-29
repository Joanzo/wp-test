<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Info Widgets - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Info Widgets Features for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
                            Info Widgets
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Info Widgets
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
        <div class="content-grid column-xs-1 column-sm-2 column-lg-3 pd-lr-30 wrap-side-30" data-gallery='{ "itemSelector": ".grid-item", "layoutMode": "masonry" }'>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-about.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-schedule.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-about-me.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-skill.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-streamline.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <?php include('templates/widgets/widget-text.tpl.php'); ?>
            </div>
            <div class="list-item grid-item">
                <div class="widget">
                    <h3 class="widget-title">
                        Skill Widget
                    </h3>
                    <div class="widget-body">
                        <ul class="content-list list-md">
                            <li class="list-item">
                                <div class="menu-item menu-icon pd-0">
                                    <div class="progress  progress-lg mg-0">
                                        <div class="progress-bar progress-bar-extra width-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <div class="width-xs-2">
                                                HTML
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item menu-text pd-0">
                                    <div class="progress  progress-lg mg-0">
                                        <div class="progress-bar progress-bar-success width-80" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pdl-10 pdr-10">
                                                80%
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon pd-0">
                                    <div class="progress  progress-lg mg-0">
                                        <div class="progress-bar progress-bar-extra width-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <div class="width-xs-2">
                                                CSS
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item menu-text pd-0">
                                    <div class="progress  progress-lg mg-0">
                                        <div class="progress-bar progress-bar-success width-90" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pdl-10 pdr-10">
                                                90%
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon pd-0">
                                    <div class="progress  progress-lg mg-0">
                                        <div class="progress-bar progress-bar-extra width-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <div class="width-xs-2">
                                                Javascript
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item menu-text pd-0">
                                    <div class="progress  progress-lg mg-0">
                                        <div class="progress-bar progress-bar-success width-70" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pdl-10 pdr-10">
                                                70%
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon pd-0">
                                    <div class="progress  progress-lg mg-0">
                                        <div class="progress-bar progress-bar-extra width-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <div class="width-xs-2">
                                                PHP
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item menu-text pd-0">
                                    <div class="progress  progress-lg mg-0">
                                        <div class="progress-bar progress-bar-success width-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <div class="pdl-10 pdr-10">
                                                100%
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="list-item grid-item">
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
            </div>
            <div class="list-item grid-item">
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