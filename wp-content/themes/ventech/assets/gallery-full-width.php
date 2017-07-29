<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Gallery Full Width - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Full Width Gallery for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
                            Full Width
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Full Width Gallery
                    </h1>
                    <div class="subtitle-text">
                        Gallery utilize maximum width of browser
                    </div>
                </div>
            </div>
        </div>
        <div class="full-size bg-pat-dark-6 op-50"> <!-- change cover with any bg class -->
        </div>
    </div>
</section>
<!-- .section -->

<div class="main-content">
    <div class="center-table mgb-30">
        <ul id="portfolio-filter" class="nav nav-pills " data-filter-bind='[data-gallery]'>
            <li class="active">
                <a href="#" data-filter="*">
                    All
                </a>
            </li>
            <li>
                <a href="#" data-filter=".f-icons">
                    Icons
                </a>
            </li>
            <li>
                <a href="#" data-filter=".f-illustration">
                    Illustration
                </a>
            </li>
            <li>
                <a href="#" data-filter=".f-web">
                    Web Design
                </a>
            </li>
            <li>
                <a href="#" data-filter=".f-logo">
                    Logo
                </a>
            </li>
        </ul>
    </div>

    <br/>
    <div class="pdl-5 pdr-5">
        <ul class="content-grid column-xl-4 column-lg-3 column-sm-2 column-xs-1 list-pd-5 " data-gallery='{ "itemSelector": ".list-item", "layoutMode": "fitRows" }'>
            <li class="list-item f-icons">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/01.jpg" class="anim-link" >
                        <img src="img/portfolios/01.jpg" alt="example image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box">
                                <div class="anim-border">
                                    <div class="anim-info">
                                        <i class="plus-icon">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-logo">
                <div class="anim">
                    <div class="anim-link">
                        <img src="img/portfolios/02.jpg" alt="example image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box">
                                <div class="anim-border">
                                    <div class="anim-info">
                                        <h4 class="font-light font-sm-6 font-xs-4 mgb-30">
                                            <a data-rel="prettyPhoto[1]" href="img/portfolios/02.jpg" class="text-white"  >
                                                Super logo
                                            </a>
                                        </h4>
                                        <button class="btn btn-facebook btn-circle btn-sm">
                                            <i class="fa fa-facebook fa-fw">
                                            </i>
                                        </button>
                                        <button class="btn btn-twitter btn-circle btn-sm">
                                            <i class="fa fa-twitter fa-fw">
                                            </i>
                                        </button>
                                        <button class="btn btn-googleplus btn-circle btn-sm">
                                            <i class="fa fa-google fa-fw">
                                            </i>
                                        </button>
                                        <button class="btn btn-warning btn-circle btn-sm">
                                            <i class="fa fa-envelope-o fa-fw">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-item f-icons">
                <div class="anim">
                    <a href="gallery-single-page.php" class="anim-link">
                        <img src="img/portfolios/03.jpg" alt="example image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box">
                                <div class="anim-border">
                                    <div class="anim-info">
                                        <h4 class="font-light font-sm-6 font-xs-4 mg-0">
                                            Go to single page
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-icons">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/04.jpg" class="anim-link">
                        <img src="img/portfolios/04.jpg" alt="example image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box">
                                <div class="anim-border">
                                    <div class="anim-info">
                                        <i class="hc hc-search-plus font-sm-9 font-xs-7">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-web">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/05.jpg" class="anim-link" >
                        <img src="img/portfolios/05.jpg" alt="example image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box">
                                <div class="anim-border">
                                    <div class="anim-info">
                                        <h4 class="font-light font-sm-6 font-xs-4 mgb-20">
                                            Awesome Title
                                        </h4>
                                        <div class="text-white pdl-10 pdr-10">
                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui et quas.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-logo">


                <!-- masterslider -->
                <div class="master-slider ms-skin-light-thin" data-list-slider="parallaxMask">
                    <div class="ms-slide">

                        <img src="img/portfolios/06.jpg" data-src="img/portfolios/06.jpg" alt="lorem ipsum dolor sit"/>
                        <!-- linked slide -->
                        <a href="#">
                            Venmond
                        </a>

                    </div>
                    <div class="ms-slide">
                        <img src="img/portfolios/02.jpg" data-src="img/portfolios/02.jpg" alt="lorem ipsum dolor sit"/>
                    </div>
                    <div class="ms-slide">
                        <img src="img/portfolios/03.jpg" data-src="img/portfolios/03.jpg" alt="lorem ipsum dolor sit"/>
                    </div>
                </div>
                <!-- end of masterslider -->


            </li>
            <li class="list-item f-illustration">
                <div class="anim">
                    <div class="anim-link">
                        <img src="img/portfolios/07.jpg" alt="example image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box">
                                <div class="anim-border">
                                    <div class="anim-info">
                                        <a href="gallery-single-page.php" class="btn btn-light btn-line mgr-10">
                                            <i class="lnr lnr-link mgr-5">
                                            </i>VIEW
                                        </a>
                                        <a data-rel="prettyPhoto[1]" href="img/portfolios/07.jpg" class="btn btn-success">
                                            <i class="lnr lnr-magnifier mgr-5">
                                            </i>ZOOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-item f-illustration">
                <div class="anim">
                    <div class="anim-link">
                        <img src="img/portfolios/01.jpg" alt="example image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box">
                                <div class="anim-border">
                                    <div class="anim-info">
                                        <a href="gallery-single-page.php" class="btn btn-default btn-lg mgr-10" data-toggle="tooltip" data-original-title="VIEW DETAIL">
                                            <i class="lnr lnr-link">
                                            </i>
                                        </a>
                                        <a data-rel="prettyPhoto[1]" href="img/portfolios/07.jpg" class="btn btn-warning btn-lg" data-toggle="tooltip" data-original-title="ZOOM IMAGE">
                                            <i class="lnr lnr-magnifier">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>

</div>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->
<script>
    /*
    var slider = new MasterSlider();

    slider.control('arrows');
    slider.control('bullets' , {autohide:false, align:'bottom', margin:10});
    //slider.control('scrollbar' , {dir:'h',color:'#333'});

    slider.setup('masterslider' , {
    layout: 'fillwidth',
    autoHeight:true,
    view:'basic'
    });*/
</script>

<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>