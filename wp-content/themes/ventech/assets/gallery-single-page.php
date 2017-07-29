<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Gallery Single Page - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Single Page Gallery for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu = 'menu-gallery';   // To set active on the same id of primary menu ?>
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
                            <a href="gallery-4-columns.php">
                                Gallery
                            </a>
                        </li>
                        <li class="active">
                            Single Page
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Single Page Gallery
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-pat-dark-6 op-50"> <!-- change cover with any bg class -->
        </div>        
    </div>
</section>
<!-- .section -->

<div class="main-content full-layout">
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-7">
                <div class="mgb-40">
                    <div class="master-slider ms-skin-light-thin" data-list-slider="parallaxMask">
                        <div class="ms-slide">

                            <img src="img/portfolios/07.jpg" data-src="img/portfolios/07.jpg" alt="lorem ipsum dolor sit"/>
                            <!-- linked slide -->
                            <a data-rel="prettyPhoto[1]" href="img/portfolios/07.jpg">
                                Super Responsive
                            </a>

                        </div>
                        <div class="ms-slide">
                            <img src="img/portfolios/05.jpg" data-src="img/portfolios/05.jpg" alt="lorem ipsum dolor sit"/>
                            <a data-rel="prettyPhoto[1]" href="img/portfolios/05.jpg">
                                Web Templates
                            </a>
                        </div>
                        <div class="ms-slide">
                            <img src="img/portfolios/03.jpg" data-src="img/portfolios/03.jpg" alt="lorem ipsum dolor sit"/>
                            <a data-rel="prettyPhoto[1]" href="img/portfolios/03.jpg">
                                Elegant Responsive Templates
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">

                <h2 class="section-title">
                    Responsive Web Design<br/>
                    <span class="font-xs-3 font-regular text-light-grey mgr-50">
                        Posted by:
                        <a href="#">
                            Venmond
                        </a>
                    </span>
                    <span class="font-xs-3 font-regular">
                        <i class="lnr lnr-clock mgr-10">
                        </i>
                        <span class="text-light-grey">
                            dec 3rd, 2016
                        </span>
                    </span>
                </h2>


                <p class="mgb-30">
                    Maecenas in sem tincidunt, imperdiet felis et, blandit tortor. Cras pellentesque metus ut augue finibus pharetra. Donec mollis, nunc quis dignissim lacinia, quam leo aliquet augue, sit amet pellentesque nunc felis eget justo. Pellentesque eget malesuada risus. Vestibulum et eros justo. Phasellus justo risus, porta vel metus eu, porta interdum mi. Quisque porttitor dictum aliquam. Duis hendrerit quam quam, gravida tincidunt purus pharetra quis.<br/><br/>
                    Vivamus tincidunt lorem sed pharetra sodales. Proin sed lacus et massa facilisis maximus. Sed in nibh erat. Donec ligula orci, varius ac laoreet semper, aliquet in neque. Nullam tempus ligula ligula, congue auctor lorem aliquet id. Quisque tristique at magna vitae porttitor. Duis vel lacus metus. Nullam ut cursus urna, condimentum maximus odio. Cras faucibus porttitor placerat.
                </p>
                <div class="tags-btn mgb-50">
                    <a class="btn btn-primary btn-xs btn-line mgb-5" href="#">
                        #greatArt
                    </a>
                    <a class="btn btn-primary btn-xs btn-line mgb-5" href="#">
                        #superMockups
                    </a>
                    <a class="btn btn-primary btn-xs btn-line mgb-5" href="#">
                        #responsiveDevices
                    </a>
                    <a class="btn btn-primary btn-xs btn-line mgb-5" href="#">
                        #Dominating
                    </a>
                </div>
                <div class="share-btn">
                    <div class="addthis_sharing_toolbox">
                    </div>

                </div>

            </div>

        </div>

        <h3 class="section-title mgb-20">
            Related Projects
        </h3>
        <?php include('templates/widgets/widget-gallery-carousel-row.tpl.php'); ?>






    </div>
    <!-- container -->
</div>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=joanzo">
</script>



<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>