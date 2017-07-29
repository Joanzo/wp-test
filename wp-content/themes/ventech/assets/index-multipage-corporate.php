<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Corporate Home - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Corporate Home Screen for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu = 'menu-home';   // To set active on the same id of .primary - menu > ul > li ?>
<?php
// Specific Configuration for Page
?>
<!-- Specific Page Data End -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>

<section class="section section-header">
    <div class="full-screen" >
        <div class="parallax-bg" data-img-bg="img/banner/bg-tech-key.jpg"  data-parallax="-.6">
            <div class="container-middle">
                <div class="content center-block text-center">
                    <h1 class="text-primary hero-text font-lg-12 font-md-10 font-sm-8 font-xs-6" data-show-animate="flipInX" data-delay-animate="500">
                        THE NEXT BIG THING
                    </h1>
                    <p class="font-primary font-light font-xs-3 font-md-4"  data-show-animate="fadeInUp" data-delay-animate="1200" >
                        Awesome multipurpose templates accentuate quality over quantity
                    </p>
                </div>
            </div>
            <div class="full-size bg-pat-dark-4 op-80">
            </div>
        </div>

        <div class="mouse" data-scroll-to=".section-latest-news" data-offset=-50>
            <div class="wheel">
            </div>
        </div>
    </div>
</section>
<!-- .section -->


<section class="section section-latest-news bg-light-white pdt-40 pdb-40">
    <br/><br/>
    <div class="container">
        <h2 class="text-center underline font-bold"  data-show-animate="fadeInDown">
            Latest News
        </h2>
        <br/>
        <br/>
        <div class="row">
            <article class="col-sm-4 mgb-xs-0 mgb-xs-20">
                <div class="blog-teaser"  data-show-animate="zoomIn" data-delay-animate="300">
                    <div class="anim">
                        <a class="anim-link" href="img/blog/01.jpg" data-rel="prettyPhoto[1]">
                            <img class="anim-img" alt="example image" src="img/blog/01.jpg">
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
                    <!-- .anim -->
                    <h3 class="mgb-0">
                        <a href="#">
                            Ventech responsive to all device
                        </a>
                    </h3>
                    <ul class="content-list list-md list-news">
                        <li class="list-item">
                            <time datetime="2016-05-04" class="menu-item menu-icon">
                                <span class="date">
                                    10
                                </span>
                                <span class="month">
                                    dec
                                </span>
                            </time>
                            <div class="menu-item menu-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim...
                            </div>
                        </li>
                    </ul>
                    <!-- content-list -->
                </div>
                <!-- blog-teaser -->

            </article>
            <article class="col-sm-4 mgb-sm-0 mgb-xs-20">
                <div class="blog-teaser" data-show-animate="zoomIn"  data-delay-animate="500">
                    <div class="anim">
                        <a class="anim-link" href="img/blog/02.jpg" data-rel="prettyPhoto[1]">
                            <img class="anim-img" alt="example image" src="img/blog/02.jpg">
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
                    <!-- .anim -->
                    <h3 class="mgb-0">
                        <a href="#">
                            Outstanding features
                        </a>
                    </h3>
                    <ul class="content-list list-md list-news">
                        <li class="list-item">
                            <time datetime="2016-05-04" class="menu-item menu-icon">
                                <span class="date">
                                    21
                                </span>
                                <span class="month">
                                    jan
                                </span>
                            </time>
                            <div class="menu-item menu-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim...
                            </div>
                        </li>
                    </ul>
                    <!-- content-list -->
                </div>
                <!-- blog-teaser -->
            </article>
            <article class="col-sm-4 mgb-sm-0 mgb-xs-20">
                <div class="blog-teaser" data-show-animate="zoomIn"  data-delay-animate="700">
                    <div class="anim">
                        <a class="anim-link" href="img/blog/03.jpg" data-rel="prettyPhoto[1]">
                            <img class="anim-img" alt="example image" src="img/blog/03.jpg">
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
                    <!-- .anim -->
                    <h3 class="mgb-0">
                        <a href="#">
                            Developed with latest technology
                        </a>
                    </h3>
                    <ul class="content-list list-md list-news">
                        <li class="list-item">
                            <time datetime="2016-05-04" class="menu-item menu-icon">
                                <span class="date">
                                    15
                                </span>
                                <span class="month">
                                    feb
                                </span>
                            </time>
                            <div class="menu-item menu-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim...
                            </div>
                        </li>
                    </ul>
                    <!-- content-list -->
                </div>
                <!-- blog-teaser -->
            </article>
        </div>
    </div>
    <br/><br/>
</section>
<!-- .section -->


<section class="section section-marketing">
	<h2 class="sr-only">Join the revolution of multipurpose template</h2>
    <div data-img-bg="img/banner/bg-phone.jpg" data-parallax="-.4" >
        <!-- <div class="container">-->
        <div class="container">
            <div class="boxline">
                <div class="bl-border">
                    <div class="bl-body text-center ">
                        <div class="mgb-10">
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
                        <div class="font-light  text-white font-xs-3 font-sm-4">
                            Join the Revolution with
                            <strong>
                                <span data-animate-number="1000000" data-separator=",">
                                    1,000,000
                                </span> Satisfied Customers
                            </strong>to Produce Excelent Quality Company Profile
                        </div>
                    </div>
                    <div class="bl-footer textline textline-center">
                        <div class="line">
                            <a class="btn btn-primary font-light btn-lg pdl-50 pdr-50" href="#">
                                JOIN NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--</div>-->
        </div>
        <!-- .container -->
    </div>
    <!-- .bg -->
</section>
<!-- .section -->



<section class="section section-gallery bg-light-white">
    <br/><br/><br/><br/><br/><br/>
    <h2 class="text-center underline font-bold">
                A Tiny Bit About Us
    </h2>
    <br/><br/>
    <div class="ventro-slider" id="slider-features" data-ventro-slider='{
        "boxDimensions": [165,220],
        "boxMargins": [4,4],
        "mode": "PROPORTION",
        "breakGrid": "5",
        "namespace": "gallery",
        "responsive": [
            {
                "windowWidth": "992",
                "breakGrid": "3,7",
                "unBreakGrid": "5",
                "mode": "PROPORTION"
            },
            {
                "windowWidth": "768",
                "breakGrid": "1,2,4,5,7,9",
                "unBreakGrid": "3"
            },
            {
                "windowWidth": "527",
                "percentage": {
                    "boxMargins": "10"
                }
            }
        ]
    }'>
        <ul class="ventro-container">
            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="1">
                        <a class="ventro-a " href="img/portfolios/01.jpg" data-rel="prettyPhoto[2]">
                            <div class="ventro-content">
                                <div class="anim">
                                    <img class="anim-img" src="img/portfolios/01.jpg" alt="portfolios image">
                                    <div class="anim-cover">
                                        <div class="anim-box">
                                            <div class="anim-border">
                                                <div class="anim-info">
                                                    <h4 class="font-light font-sm-7 font-xs-4">
                                                        Fresh design
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="1">
                        <a class="ventro-a " href="img/portfolios/07.jpg"  data-rel="prettyPhoto[2]">
                            <div class="ventro-content ">
                                <div class="anim">
                                    <img class="anim-img" src="img/portfolios/07.jpg" alt="portfolios image">
                                    <div class="anim-cover">
                                        <div class="anim-box">
                                            <div class="anim-border">
                                                <div class="anim-info">
                                                    <h4 class="font-light font-sm-7 font-xs-4">
                                                        Super responsive
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="1">
                        <a class="ventro-a " href="img/blog/03.jpg"  data-rel="prettyPhoto[2]">
                            <div class="ventro-content ">
                                <div class="anim">
                                    <img class="anim-img" src="img/blog/03.jpg" alt="portfolios image">
                                    <div class="anim-cover">
                                        <div class="anim-box">
                                            <div class="anim-border">
                                                <div class="anim-info">
                                                    <h4 class="font-light font-sm-7 font-xs-4">
                                                        Beautifully handcrafted
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="1" data-box-h="1"  data-anim="hover" data-anim-effect="flipY">
                        <a class="ventro-a " href="#">
                            <div class="ventro-content bg-facebook">

                                <div class="d-table text-center">
                                    <div class="vm">
                                        <i class="fa fa-facebook font-sm-8 font-xs-7 text-white">
                                        </i>
                                    </div>

                                </div>
                            </div>
                            <div class="ventro-content-hover bg-danger">
                                <div class="d-table text-center">

                                    <div class="vm pdl-10 pdr-10 text-white">
                                        LIKE OUR FACEBOOK
                                        Envato
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="1">
                        <a class="ventro-a " href="img/portfolios/03.jpg"  data-rel="prettyPhoto[2]">
                            <div class="ventro-content ">
                                <div class="anim">
                                    <img class="anim-img" src="img/portfolios/03.jpg" alt="portfolios image">
                                    <div class="anim-cover">
                                        <div class="anim-box">
                                            <div class="anim-border">
                                                <div class="anim-info">
                                                    <h4 class="font-light font-sm-7 font-xs-4">
                                                        Multiple Layouts
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="1" data-box-h="1"  data-anim="hover" data-anim-effect="flipX" >
                        <a class="ventro-a " href="#">
                            <div class="ventro-content bg-twitter">

                                <div class="d-table text-center">
                                    <div class="vm">
                                        <i class="fa fa-twitter font-sm-8 font-xs-7 text-white">
                                        </i>
                                    </div>

                                </div>
                            </div>
                            <div class="ventro-content-hover bg-danger">
                                <div class="d-table text-center">

                                    <div class="vm pdl-10 pdr-10 text-white">
                                        FOLLOW OUR TWITTER<br/>
                                        @envato
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="1">
                        <a class="ventro-a " href="img/portfolios/05.jpg"  data-rel="prettyPhoto[2]">
                            <div class="ventro-content ">
                                <div class="anim">
                                    <img class="anim-img" src="img/portfolios/05.jpg" alt="portfolios image">
                                    <div class="anim-cover">
                                        <div class="anim-box">
                                            <div class="anim-border">
                                                <div class="anim-info">
                                                    <h4 class="font-light font-sm-7 font-xs-4">
                                                        Smooth Animations
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="1">
                        <a class="ventro-a " href="img/portfolios/06.jpg"  data-rel="prettyPhoto[2]">
                            <div class="ventro-content ">
                                <div class="anim">
                                    <img class="anim-img" src="img/portfolios/06.jpg" alt="portfolios image">
                                    <div class="anim-cover">
                                        <div class="anim-box">
                                            <div class="anim-border">
                                                <div class="anim-info">
                                                    <h4 class="font-light font-sm-7 font-xs-4">
                                                        1000+ Icons
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="1" data-box-h="1"  data-anim="hover" data-anim-effect="bounceUp">
                        <a class="ventro-a " href="#">
                            <div class="ventro-content bg-warning-2">

                                <div class="d-table text-center">
                                    <div class="vm">
                                        <i class="fa fa-instagram font-sm-8 font-xs-7 text-white">
                                        </i>
                                    </div>

                                </div>
                            </div>
                            <div class="ventro-content-hover bg-danger">
                                <div class="d-table text-center">

                                    <div class="vm pdl-10 pdr-10 text-white">
                                        FOLLOW OUR INSTAGRAM
                                        @Envato
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="1">
                        <a class="ventro-a " href="img/blog/01.jpg"  data-rel="prettyPhoto[2]">
                            <div class="ventro-content ">
                                <div class="anim">
                                    <img class="anim-img" src="img/blog/01.jpg" alt="portfolios image">
                                    <div class="anim-cover">
                                        <div class="anim-box">
                                            <div class="anim-border">
                                                <div class="anim-info">
                                                    <h4 class="font-light font-sm-7 font-xs-4">
                                                        Unlimited Colors
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="ventro-li">
                <ul class="ventro-ul">
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="1" data-box-h="1"  data-anim="hover" data-anim-effect="shrink" data-over="true">
                        <a class="ventro-a " href="#">
                            <div class="ventro-content bg-extra-1">

                                <div class="d-table text-center">
                                    <div class="vm">
                                        <h3 class="mg-0 text-white">
                                            MORE
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="ventro-content-hover bg-white">
                                <div class="d-table text-center">

                                    <div class="vm">
                                        <h3 class="mg-0 text-primary">
                                            MORE
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- .ventro-slider -->
</section>
<!-- .section -->

<section class="section section-staff pdt-40 pdb-50 bg-light-white">
    <div class="container">
        <br/><br/><br/><br/>
        <h2 class="text-center underline font-bold" data-show-animate="fadeInDown">
            Meet Our Team
        </h2>
        <br/>
        <!-- template -->
        <div class="ms-staff-carousel"  data-show-animate="zoomInUp" data-delay-animate="200">
            <!-- masterslider -->
            <div class="master-slider" id="slider-staff" data-staff-slider="flow">
                <div class="ms-slide">
                    <img class="img-responsive" src="plugins/masterslider/blank.gif" data-src="img/avatar/01.jpg" alt="lorem ipsum dolor sit"/>
                    <div class="ms-info">
                        <div class="textline textline-center">
                            <div class="line">
                                <h4 class="profile-name">
                                    ROY FARLANE
                                </h4>
                                <div class="profile-info">
                                    Chief Executive Officer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-slide">
                    <img class="img-responsive" src="plugins/masterslider/blank.gif" data-src="img/avatar/02.jpg" alt="lorem ipsum dolor sit"/>
                    <div class="ms-info">
                        <div class="textline textline-center">
                            <div class="line">
                                <h4 class="profile-name">
                                    ADAM SULIVAN
                                </h4>
                                <div class="profile-info">
                                    Head of Programmer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-slide">
                    <img class="img-responsive" src="plugins/masterslider/blank.gif" data-src="img/avatar/03.jpg" alt="lorem ipsum dolor sit"/>
                    <div class="ms-info">
                        <div class="textline textline-center">
                            <div class="line">
                                <h4 class="profile-name">
                                    FRED PENNER
                                </h4>
                                <div class="profile-info">
                                    Lead Designer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-slide">
                    <img class="img-responsive" src="plugins/masterslider/blank.gif" data-src="img/avatar/04.jpg" alt="lorem ipsum dolor sit"/>
                    <div class="ms-info">
                        <div class="textline textline-center">
                            <div class="line">
                                <h4 class="profile-name">
                                    Noel Oeslan
                                </h4>
                                <div class="profile-info">
                                    Marketing Manager
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-slide">
                    <img class="img-responsive" src="plugins/masterslider/blank.gif" data-src="img/avatar/05.jpg" alt="lorem ipsum dolor sit"/>
                    <div class="ms-info">
                        <div class="textline textline-center">
                            <div class="line">
                                <h4 class="profile-name">
                                    JOSEPH B. SEWARD
                                </h4>
                                <div class="profile-info">
                                    System Administrator
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-slide">
                    <img class="img-responsive" src="plugins/masterslider/blank.gif" data-src="img/avatar/06.jpg" alt="lorem ipsum dolor sit"/>
                    <div class="ms-info">
                        <div class="textline textline-center">
                            <div class="line">
                                <h4 class="profile-name">
                                    GREG BANNER
                                </h4>
                                <div class="profile-info">
                                    Accounting
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-slide">
                    <img class="img-responsive" src="plugins/masterslider/blank.gif" data-src="img/avatar/07.jpg" alt="lorem ipsum dolor sit"/>
                    <div class="ms-info">
                        <div class="textline textline-center">
                            <div class="line">
                                <h4 class="profile-name">
                                    JOSEPH B. SEWAR
                                </h4>
                                <div class="profile-info">
                                    Web Designer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of masterslider -->
            <div class="ms-staff-info" id="staff-info">
            </div>
        </div>
        <!-- end of template -->

    </div>
    <!-- .container -->
    <br/><br/><br/><br/>

</section>
<!-- .section -->


<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>