<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Ventech Showcase - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Ventech Showcase for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu = 'menu-home';   // To set active on the same id of .primary - menu > ul > li ?>
<?php
// Specific Configuration for Page

?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>

<section class="section section-header">
    <div class="full-screen" >
        <div class="parallax-bg"  data-parallax="-.6">
            <div class="container-middle">
                <div class="content center-block text-center">
                    <div class="text-center mgb-50 hidden-xs" data-show-animate="rotateIn" data-delay-animate="500">
                        <i class="lnr lnr-cog font-xs-11 font-lg-12 fa-spin">
                        </i>
                    </div>
                    <h1 class="font-extrabold hero-text font-lg-11 font-md-10 font-sm-8 font-xs-6" data-show-animate="flipInX" data-delay-animate="1200">
                        WELCOME TO <span class="text-primary">VENTECH</span>
                    </h1>
                    <p class="font-primary font-light font-xs-3 font-md-4" data-show-animate="fadeInUp" data-delay-animate="1900">
                        The Best Responsive Modern Minimalist Web Templates
                    </p>
                    <a href="<?php
 if(isset($buy_link)) echo $buy_link; ?>" class="btn btn-light btn-line bs-xs mgt-40 pd-20 pdl-50 pdr-50 " data-show-animate="zoomIn" data-delay-animate="2200">
                        PURCHASE VENTECH
                    </a>
                </div>
            </div>
            <div class="full-size bg-pat-dark-6" data-parallax="-.6">
            </div>
        </div>
        <div class="mouse hidden-xs" data-scroll-to="#section-all-features" data-offset=-50>
            <div class="wheel">
            </div>
        </div>
    </div>
</section>
<!-- .section -->

<section class="section full-layout" id="section-all-features">
    <div class="container ov-hidden" id="section-short-features">
        <div class="height-xs-1 height-sm-2"></div>
        <div class="row" >
            <div class="col-md-5 col-md-push-1">
                <div class="mockup-devices-home">
                    <div class="pos-r hidden-sm hidden-xs">
                        <img class="img-responsive tl" alt="mac-img" src="img/banner/devices-02-mockup-imac.png">
                        <img class="img-responsive tl" style="left: -60px; top: 13px;"  alt="ipad-img" src="img/banner/devices-02-ipad.png">
                        <img class="img-responsive tl" style="left: -46px; top: 0px;" alt="iphone-img" src="img/banner/devices-02-iphone.png" >
                    </div>
                    <img class="img-responsive visible-sm visible-xs" alt="all devices" src="img/banner/all-devices-02.png">
                </div>
            </div>

            <div class="col-md-5 col-md-push-1">
                <div class="height-xs-auto height-lg-1">
                </div>
                <h4 class="mgt-50 mgb-30 font-primary space-xl">
                    GORGEOUS IN EVERY DEVICE
                </h4>
                <p>
                    We beautifully coded ventech to be able to be seen gorgeous in every devices, you just have to follow our premade template, or create your own layout. With our easy to use &amp; <a href="http://localhost/Vengrail/features-utilities-content-list.php" data-rel="translink">comprehensive utilities</a>, you can create beautiful website layout in minutes ! Check out our featured utilities:
                </p><br/>
                <div class="row mgb-30">
                    <div class="col-sm-6">
                        <ul class="content-list list-xs">
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-arrow-right  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    <a href="features-widgets.php" class="link-body" data-rel="translink">Widgets</a>
                                    
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-arrow-right  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    <a href="features-utilities-typography.php" class="link-body" data-rel="translink">Typography</a>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-arrow-right  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    <a href="features-utilities-sizing.php" class="link-body" data-rel="translink">Sizing</a>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-arrow-right  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    <a href="features-utilities-content-list.php" class="link-body" data-rel="translink">List</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="content-list list-xs">
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-arrow-right  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    <a href="features-utilities-content-grid.php" class="link-body" data-rel="translink">Grid</a>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-arrow-right  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    <a href="features-utilities-stacks.php" class="link-body" data-rel="translink">Stacks</a>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-arrow-right  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    <a href="features-form-validation.php" class="link-body" data-rel="translink">Form Validation</a>
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-arrow-right  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    <a href="features-mega-menu.php" class="link-body" data-rel="translink">Mega Menu</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="height-xs-1 height-sm-4"></div>
    </div>
    <hr class="mg-0"/>
    <div class="container ov-hidden" id="section-overview">
        <div class="height-xs-1 height-sm-2"></div>
        <div class="row">
            <div class="col-md-5 col-md-push-1">

                <h4 class="mgt-50 pdt-40 mgb-30 font-primary space-xl">
                    SUPERB FLEXIBILITY
                </h4>
                <p>
                    Our team has develop ventech to be as flexible as it can, starts with
                    <strong>
                        14+ different header
                    </strong> with horizontal and vertical layout, start hiding or show on start,
                    <strong>
                        6+ different footer
                    </strong>, light or dark theme, and
                    <strong>
                        140+ HTML 5 files
                    </strong>, you can create any web you want with your own customization.

                <br/><br/>
                    Ventech can be used on any different occasion:
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="content-list list-xs">
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-checkmark-circle  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    Corporate
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-checkmark-circle  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    Blog
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-checkmark-circle  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    Portfolio
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-checkmark-circle  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    News
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="content-list list-xs">
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-checkmark-circle  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    Shop
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-checkmark-circle  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    Hosting
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-checkmark-circle  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    Products
                                </div>
                            </li>
                            <li class="list-item">
                                <div class="menu-item menu-icon">
                                    <i class="lnr lnr-checkmark-circle  text-primary-2 font-xs-5">
                                    </i>
                                </div>
                                <div class="menu-item menu-text">
                                    App Showcase
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="col-md-5 col-md-push-2 col-lg-push-1">
                <div class="iphone-devices-mockup hidden-sm hidden-xs">
                    <div class="pos-r">
                        <img class="img-responsive iphone-03" alt="responsive app" src="img/banner/iPhone-6-Isometric-03.png">
                        <img class="img-responsive iphone-01" alt="responsive app" src="img/banner/iPhone-6-Isometric.png">
                        <img class="img-responsive iphone-02" alt="responsive app" src="img/banner/iPhone-6-Isometric-02.png">

                    </div>
                </div>
            </div>


        </div>
        

        <div class="height-xs-1 height-sm-4"></div>
    </div>
    <hr class="mg-0"/>
    <div class="container ov-hidden" id="section-theme">
        <div class="height-xs-1 height-sm-4"></div>
        <div class="row">
            <div class="col-md-5 col-md-push-1">
                <div class="ipad-devices-mockup hidden-sm hidden-xs">
                    <div class="pos-r">
                        <img src="img/banner/ipad-Isometric.png" class="img-responsive" alt="ipad preview">
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-push-1">
                <h4 class="mgt-50 mgb-30 font-primary space-xl">
                    PIXEL PERFECT MODERN MINIMALIST THEME
                </h4>
                <p>
                    Ventech is designed with customer needs for long terms in mind, therefore we use modern minimalist theme, that last long forever, not sink by trend. Every aspect we look carefully so we can produce retina ready responsive theme.
                    <br/><br/> With variant of colors &amp; unlimited color combination you can change the color theme easily.
                </p>
                <a class="btn btn-dark btn-line btn-lg pdl-50 pdr-50 mgt-30 mgb-40" href="features-utilities-data-attributes.php" data-rel="translink">
                    View Options
                    <i class="lnr lnr-arrow-right mgl-10">
                    </i>
                </a>

            </div><!-- .col-md-5.col-md-push-7 -->

        </div>
        <div class="height-xs-1 height-sm-4"></div>
    </div>


</section>


<section class="main-content bg-light-white full-layout pdt-40 pdb-40">
    <div class="container">
        <h2 class="text-center font-bold underline mgt-40 mgb-30">
            Featured Demo
        </h2>
        <ul class="content-grid column-md-3 column-sm-2 column-xs-1 list-pd-10 wrap-side-10" data-gallery='{ "itemSelector": ".list-item", "layoutMode": "fitRows" }'>
            <li class="list-item f-nature">
                <div class="anim">
                    <a href="index-multipage-corporate.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-01.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Multipage Corporate <i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-people">
                <div class="anim">
                    <a  href="index-multipage-blog.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-02.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Multipage Blog<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-nature">
                <div class="anim">
                    <a  href="index-multipage-portfolio.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-03.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Multipage Portfolio<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="index-multipage-news.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-04.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Multipage News<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="index-multipage-shop.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-05.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Multipage Shop<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-people">
                <div class="anim">
                    <a  href="index-multipage-hosting.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-06.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Multipage Hosting<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-animal">
                <div class="anim">
                    <a  href="index-onepage-corporate.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-07.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Onepage Corporate<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-people">
                <div class="anim">
                    <a  href="index-onepage-personal-cv.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-08.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Onepage Personal CV<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-nature">
                <div class="anim">
                    <a  href="index-onepage-product-landing.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-09.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Onepage Product Landing<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-nature">
                <div class="anim">
                    <a  href="index-onepage-app-showcase.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-10.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Onepage App Showcase<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-nature">
                <div class="anim">
                    <a  href="index-speciality-under-construction.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-11.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Under Construction<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-animal">
                <div class="anim">
                    <a  href="index-speciality-coming-soon.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-12.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Coming Soon<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="index-speciality-login.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-13.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Login<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-nature">
                <div class="anim">
                    <a  href="pages-blogs-small.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-01.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Blog Small Thumb<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-animal">
                <div class="anim">
                    <a  href="pages-blogs-large.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-02.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Blog Large Thumb<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="pages-blogs-masonry-full.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-03.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Blog Masonry<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="pages-career.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-04.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Career Page<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-people">
                <div class="anim">
                    <a  href="pages-faq.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-05.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">FAQ Page<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-animal">
                <div class="anim">
                    <a  href="pages-timeline.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-06.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Timeline Page<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="gallery-masonry.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-07.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Masonry Gallery<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="pages-about-me.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-08.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">About Me Page<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-people">
                <div class="anim">
                    <a  href="pages-about.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-09.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">About Us Page<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="pages-about-2.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-10.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">About Us 2 Page<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="pages-shop-4-columns-full.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-11.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Shop Grid View<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-people">
                <div class="anim">
                    <a  href="pages-shop-list-view-sidebar-left.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-12.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Shop List View<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="features-widgets.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-13.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Overall Widgets<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-objects">
                <div class="anim">
                    <a  href="pages-shop-single-product-full.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-14.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Shop Single Page<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-item f-people">
                <div class="anim">
                    <a  href="pages-contact.php" class="anim-link" data-rel="translink">
                        <img src="img/screenshot/ventech-pg-15.jpg" alt="Example Image" class="anim-img">
                        <div class="anim-cover">
                            <div class="anim-box no-bg">
                                <div class="anim-border no-bd">
                                    <div class="anim-info">
                                        <div class="pd-20 pdl-30 pdr-30 bg-white-90 text-body br font-xs-3 font-sm-4">Contact Us Page<i class="lnr lnr-arrow-right mgl-10"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- .section -->


<section class="section section-journey" id="section-accomplishment">
    <div class="parallax-bg bg-light-9" data-parallax="-.6">
		<h2 class="sr-only">Our Journey</h2>
        <div class="milestone">
            <div class="row">
                <div class="col-sm-6 col-md-3 bg-primary-1">

                    <div class="ms-circle center-table no-bd pdt-50 pdb-50 text-white" data-show-animate="flipInY" data-delay-animate="300">
                        <div class="mgb-10 mgt-20">
                            <i class="lnr lnr-code font-xs-9">
                            </i>
                        </div>
                        <div class="ms-title">
                            <span  data-animate-number="200" data-separator=",">
                                200
                            </span>K +
                        </div>
                        <div class="ms-subtitle mgb-20">
                            Lines of code
                        </div>
                    </div>


                </div>
                <div class="col-sm-6 col-md-3 bg-primary-2" >

                    <div class="ms-circle center-table no-bd pdt-50 pdb-50 text-white" data-show-animate="flipInY" data-delay-animate="400">
                        <div class="mgb-10 mgt-20">
                            <i class="lnr lnr-hourglass font-xs-9">
                            </i>
                        </div>
                        <div class="ms-title" >
                            <span data-animate-number="2600" data-separator=",">
                                2,600
                            </span>+
                        </div>
                        <div class="ms-subtitle mgb-20">
                            Hours of Coding
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-3 bg-primary-0">

                    <div class="ms-circle center-table no-bd pdt-50 pdb-50 text-white"  data-show-animate="flipInY" data-delay-animate="500">
                        <div class="mgb-10 mgt-20">
                            <i class="lnr lnr-file-empty  font-xs-9">
                            </i>
                        </div>
                        <div class="ms-title">
                            <span data-animate-number="150" data-separator=",">
                                150+
                            </span>+
                        </div>
                        <div class="ms-subtitle mgb-20">
                            Template Files
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-3 bg-primary-3"  >

                    <div class="ms-circle center-table no-bd pdt-50 pdb-50 text-white" data-show-animate="flipInY" data-delay-animate="600">
                        <div class="mgb-10 mgt-20">
                            <i class="lnr lnr-magic-wand  font-xs-9">
                            </i>
                        </div>
                        <div class="ms-title" >
                            <span data-animate-number="50">
                                
                            </span>+
                        </div>
                        <div class="ms-subtitle mgb-20">
                            Widgets
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
</section>

<section class="section section-marketing bg-pat-dark-6 " data-parallax="-.6">
	<h2 class="sr-only">Buy our Responsive Theme</h2>
    <!-- <div class="container">-->
    <div class="container">
        <div class="height-xs-6 center-table">
            <div class="vm text-center">
                <hr class="bd-white">
                <div class="mgb-10 pdt-20">
                    <i class="hc hc-star2 text-danger font-xs-5">
                    </i>
                    <i class="hc hc-star2 text-danger font-xs-5">
                    </i>
                    <i class="hc hc-star2 text-danger font-xs-5">
                    </i>
                    <i class="hc hc-star2 text-danger font-xs-5">
                    </i>
                    <i class="hc hc-star2 text-danger font-xs-5">
                    </i>
                </div>
                <div class="font-light   text-white font-xs-3 font-sm-4 pdl-30 pdr-30">
                    Join the Revolution with
                    <strong>
                        <span data-animate-number="1000000" data-separator=",">
                            1,000,000
                        </span> Satisfied Customers
                    </strong>to Produce Excelent Quality Company Profile
                </div>

                <div class="textline textline-center mgt-30">
                    <div class="line">
                        <a class="btn btn-primary font-light btn-lg pdl-50 pdr-50" href="<?php
 if(isset($buy_link)) echo $buy_link; ?>">
                            JOIN NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--</div>-->
    </div>
    <!-- .container -->


</section>
<!-- .section -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>