<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title            = 'Home Blog  - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords         = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description      = 'Blog style home page for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu      = 'menu-home';   // To set active on the same id of .primary - menu > ul > li ?>
<?php
// Specific Configuration for Page
$header           = 'header-2';
$header_padding   = 1;
$footer           = 'footer-3';
$logo_path        = 'img/logo-reverse.png';
$logo_sticky_path = 'img/logo-reverse.png';

?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>

<section class="section section-header " data-add-header-margin="true">
    <div class="height-xs-6 height-md-7" >
        <div class="parallax-bg bg-phone" data-parallax="-.6">
            <div class="container-middle">
                <div class="content center-block text-center">
                    <h1 class="font-primary font-lg-10 font-md-10 font-sm-8 font-xs-6 font-bold mgt-0">
                        <span class="text-primary">
                            VENTECH
                        </span>BLOG
                    </h1>
                    <h5 class="font-primary text-light-white font-xs-3 font-md-4">
                        Blog about web design and development
                    </h5>
                    <div>
                        <a href="#" class="btn btn-light btn-line bs-xs mgt-40 pd-20 pdl-50 pdr-50 ">
                            SIGNUP FOR FREE RESOURCES
                        </a>
                    </div>

                </div>
            </div>
            <div class="bl width-100 pdt-30 pdb-30">
                <div class="container">
                    <form method="POST" action="functions/newsletter-subscribe.php" data-form="validate">
                        <div class="alert alert-danger hide-form" data-alert="error">
                            <div class="content-list list-xs list-vm">
                                <div class="list-wrapper">
                                    <div class="list-item pd-0">
                                        <div class="menu-item menu-icon">
                                            <i class="lnr lnr-warning  text-danger-0 font-xs-5">
                                            </i>
                                        </div>
                                        <div class="menu-item menu-text">
                                            Please check on the error !
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-success hide-form" data-alert="success">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">
                                <i class="lnr lnr-cross">
                                </i>
                            </button>
                            <div class="content-list list-xs list-vm">
                                <div class="list-wrapper">
                                    <div class="list-item pd-0">
                                        <div class="menu-item menu-icon">
                                            <i class="lnr lnr-checkmark-circle  text-success-0 font-xs-5">
                                            </i>
                                        </div>
                                        <div class="menu-item menu-text">
                                            <strong>
                                                Success!
                                            </strong>You've been added to our email list.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-list list-md list-vm center-table list-break-xs">
                            <div class="list-item">
                                <div class="menu-item text-white">
                                    <label class="font-light" for="newsletter-email">
                                        Subscribe to our latest news
                                    </label>
                                </div>
                                <div class="menu-item menu-text">

                                    <div class="input-group input-group-minimal">
                                        <input type="email" name="newsletter-email" id="newsletter-email" required="" placeholder="Email Address" class="form-control width-xs-auto width-md-6 text-white">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary mgl-15 pdl-20 pdr-20"  data-button="submit">
                                                <span class="hidden-xs">
                                                    Subscribe
                                                </span>
                                                <span class="visible-xs">
                                                    Go
                                                </span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- list-item -->
                        </div>
                        <!-- content-list -->
                    </form>
                </div>
            </div>
            <!-- bl -->

        </div>
    </div>
</section>

<section class="section section-head-blog pdt-50 pdb-50 bg-light-white">
    <div class="container">
    
        <div class="ventro-slider" id="blog-slider" data-ventro-slider='{
                "boxDimensions": [135,84],
                "boxMargins": [0,0],
                "namespace": "blog-layout",
                "mode": "PROPORTION",
                "outerMargin": [false, true],
                "responsive": [
                    {
                        "windowWidth": "975",
                        "breakGrid": "1"
                    }
                ]
            }'>
            <ul class="ventro-container">
                <li class="ventro-li">
                    <ul class="ventro-ul">
                        <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="2">
                            <div class="ventro-a ">
                                <div class="ventro-content anim-slide anim-slide-light">
                                    <div class="anim">
                                        <img class="anim-img" src="img/blog/01.jpg" alt="portfolios image">
                                        <div class="anim-slide-info">
                                            <div class="pd-20">
                                                <h5 class="font-primary font-xs-3 font-md-4 mgt-0 mgb-20">
                                                    <a class="link-body" href="#">
                                                        Popular design of the week
                                                    </a>
                                                </h5>
                                                <p class="height-xs-1 hidden-xs">
                                                    As a creative studio we believe no client is too big nor too small to work with us to obtain good advantage. Duis nec aliquet massa, sed dapibus mauris. Nulla vehicula.
                                                </p>
                                                <a data-original-title="Read More" data-toggle="tooltip" href="#" class="btn btn-xs btn-primary btn-circle btn-line hidden-xs">
                                                    <i class="lnr lnr-arrow-right">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                        <a class="block-link" href="#">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ventro-box" data-box-y="3" data-box-x="1" data-box-w="1" data-box-h="1">
                            <a class="ventro-a " href="#">
                                <div class="ventro-content ">
                                    <div class="anim anim-light">
                                        <img class="anim-img" src="img/portfolios/07.jpg" alt="portfolios image">
                                        <div class="anim-cover">
                                            <div class="anim-box">
                                                <div class="anim-border">
                                                    <div class="anim-info">
                                                        <h5 class="font-primary text-body">
                                                            Is flat still a trend?
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="ventro-box" data-box-y="3" data-box-x="2" data-box-w="1" data-box-h="1">
                            <a class="ventro-a " href="img/blog/03.jpg"  data-rel="prettyPhoto[2]">
                                <div class="ventro-content ">
                                    <div class="anim anim-light">
                                        <img class="anim-img" src="img/blog/03.jpg" alt="portfolios image">
                                        <div class="anim-cover">
                                            <div class="anim-box">
                                                <div class="anim-border">
                                                    <div class="anim-info">
                                                        <h5 class="font-primary">
                                                            New web topic
                                                        </h5>
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
                        <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="2">
                            <div class="ventro-a ">
                                <div class="ventro-content anim-slide">
                                    <div class="anim">
                                        <img class="anim-img" src="img/blog/02.jpg" alt="portfolios image">
                                        <div class="anim-slide-info">
                                            <div class="pd-20">
                                                <h5 class="font-primary font-xs-3 font-md-4 mgt-0 mgb-20">
                                                    <a href="#">
                                                        Should designers code?
                                                    </a>
                                                </h5>
                                                <p class="height-xs-1 hidden-xs text-light-white">
                                                    As a creative studio we believe no client is too big nor too small to work with us to obtain good advantage. Duis nec aliquet massa, sed dapibus mauris. Nulla vehicula.
                                                </p>
                                                <a data-original-title="Read More" data-toggle="tooltip" href="#" class="btn btn-xs btn-primary btn-circle btn-line hidden-xs">
                                                    <i class="lnr lnr-arrow-right">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                        <a class="block-link" href="#">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ventro-box" data-box-y="3" data-box-x="1" data-box-w="1" data-box-h="1">
                            <a class="ventro-a " href="img/portfolios/03.jpg"  data-rel="prettyPhoto[2]">
                                <div class="ventro-content ">
                                    <div class="anim anim-light">
                                        <img class="anim-img" src="img/portfolios/03.jpg" alt="portfolios image">
                                        <div class="anim-cover">
                                            <div class="anim-box">
                                                <div class="anim-border">
                                                    <div class="anim-info">
                                                        <h5 class="font-primary">
                                                            Totally cool plugins
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="ventro-box" data-box-y="3" data-box-x="2" data-box-w="1" data-box-h="1" data-anim="hover" data-anim-effect="flipX">
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
            </ul>

        </div>
    </div>
</section>

<div class="section section-blog">
    <div class="height-xs-1">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 mgb-xs-40 mgb-md-0">
                <div class="content-list list-xl list-break-xl list-bordered wrap-top">
                    <article class="list-item">
                        <div class="menu-item menu-icon pdb-20">
                            <div class="anim menu-i">
                                <a data-rel="prettyPhoto" href="img/blog/01-wide.jpg" class="anim-link">
                                    <img src="img/blog/01-wide.jpg" alt="example image" class="anim-img">
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
                        </div>
                        <div class="menu-item menu-text">
                            <ul class="content-list list-md list-news">
                                <li class="list-item pd-0">
                                    <time class="menu-item menu-icon" datetime="2016-05-04">
                                        <span class="date pdt-0">
                                            10
                                        </span>
                                        <span class="month">
                                            jan
                                        </span>
                                    </time>
                                    <div class="menu-item menu-text">
                                        <h4 class="blog-teaser-title">
                                            <a href="pages-blogs-single-page.php" class="link-body">
                                                Standard post with preview image
                                            </a>
                                        </h4>
                                        <div class="blog-teaser-tags">
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-user mgr-5">
                                                </i>
                                                <a href="#">
                                                    Admin
                                                </a>
                                            </span>
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-tag mgr-5">
                                                </i>
                                                <a href="#">
                                                    General
                                                </a>,
                                                <a href="#">
                                                    Technology
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="blog-teaser-description">
                                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim. Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore...
                            </div>
                            <div class="blog-teaser-more">
                                <a class="btn btn-xs btn-primary btn-circle btn-line" href="#" data-toggle="tooltip" data-original-title="Read More">
                                    <i class="lnr lnr-arrow-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="list-item">
                        <div class="menu-item menu-icon  pdb-20">
                            <div class="anim menu-i">
                                <a data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=dKrVegVI0Us" class="anim-link">
                                    <img src="img/blog/02-wide.jpg" alt="example image" class="anim-img">
                                    <div class="anim-cover">
                                        <div class="anim-box">
                                            <div class="anim-border">
                                                <div class="anim-info">
                                                    <i class="lnr lnr-camera-video  font-xs-7">
                                                    </i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <ul class="content-list list-md list-news">
                                <li class="list-item pd-0">
                                    <time class="menu-item menu-icon pdr-10" datetime="2016-05-04">
                                        <span class="date pdt-0">
                                            18
                                        </span>
                                        <span class="month">
                                            feb
                                        </span>
                                    </time>
                                    <div class="menu-item menu-text">
                                        <h4 class="blog-teaser-title">
                                            <a href="pages-blogs-single-page.php" class="link-body">
                                                Video preview standard post
                                            </a>
                                        </h4>
                                        <div class="blog-teaser-tags">
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-user mgr-5">
                                                </i>
                                                <a href="#">
                                                    Venmond
                                                </a>
                                            </span>
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-tag mgr-5">
                                                </i>
                                                <a href="#">
                                                    Entertainment
                                                </a>,
                                                <a href="#">
                                                    Education
                                                </a>
                                            </span>
                                        </div>


                                    </div>
                                </li>
                            </ul>
                            <div class="blog-teaser-description">
                                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim. Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore...
                            </div>
                            <div class="blog-teaser-more">
                                <a class="btn btn-xs btn-primary btn-circle btn-line" href="#" data-toggle="tooltip" data-original-title="Read More">
                                    <i class="lnr lnr-arrow-right">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="list-item">

                        <div class="menu-item menu-icon pdb-20">
                            <div class="menu-i">
                                <!-- masterslider -->
                                <div class="master-slider ms-skin-light-thin" data-list-slider="parallaxMask" data-arrow="false" data-autoplay="true">
                                    <div class="ms-slide">
                                        <img  src="img/blog/03-wide.jpg" data-src="img/blog/03-wide.jpg" alt="lorem ipsum dolor sit"/>
                                        <a data-rel="prettyPhoto[carousel-post]" href="img/blog/03-wide.jpg">
                                        </a>

                                    </div>
                                    <div class="ms-slide">
                                        <img  src="img/blog/02-wide.jpg" data-src="img/blog/02-wide.jpg" alt="lorem ipsum dolor sit"/>
                                        <a data-rel="prettyPhoto[carousel-post]" href="img/blog/02-wide.jpg">
                                        </a>
                                    </div>
                                    <div class="ms-slide">
                                        <img  src="img/blog/01-wide.jpg" data-src="img/blog/01-wide.jpg" alt="lorem ipsum dolor sit"/>
                                        <a data-rel="prettyPhoto[carousel-post]" href="img/blog/01-wide.jpg">
                                        </a>
                                    </div>
                                </div>
                                <!-- end of masterslider -->
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <ul class="content-list list-md list-news">
                                <li class="list-item pd-0">
                                    <time class="menu-item menu-icon pdr-10" datetime="2016-05-04">
                                        <span class="date pdt-0">
                                            15
                                        </span>
                                        <span class="month">
                                            mar
                                        </span>
                                    </time>
                                    <div class="menu-item menu-text">
                                        <h4 class="blog-teaser-title">
                                            <a href="pages-blogs-single-page.php" class="link-body">
                                                Carousel Post
                                            </a>
                                        </h4>
                                        <div class="blog-teaser-tags">
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-user mgr-5">
                                                </i>
                                                <a href="#">
                                                    Admiral
                                                </a>
                                            </span>
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-tag mgr-5">
                                                </i>
                                                <a href="#">
                                                    Portfolio
                                                </a>,
                                                <a href="#">
                                                    Blogging
                                                </a>
                                            </span>
                                        </div>


                                    </div>
                                </li>
                            </ul>
                            <div class="blog-teaser-description">
                                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim. Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore...
                            </div>
                            <div class="blog-teaser-more">
                                <a class="btn btn-xs btn-primary btn-circle btn-line" href="#" data-toggle="tooltip" data-original-title="Read More">
                                    <i class="lnr lnr-arrow-right">
                                    </i>
                                </a>
                            </div>
                        </div>

                    </article>
                    <article class="list-item">

                        <div class="menu-item menu-icon pdb-20">
                            <iframe class="iframe-block"  height="200" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221229495&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true">
                            </iframe>
                        </div>
                        <div class="menu-item menu-text">
                            <ul class="content-list list-md list-news">
                                <li class="list-item pd-0">
                                    <time class="menu-item menu-icon pdr-10" datetime="2016-05-04">
                                        <span class="date pdt-0">
                                            8
                                        </span>
                                        <span class="month">
                                            apr
                                        </span>
                                    </time>
                                    <div class="menu-item menu-text">
                                        <h4 class="blog-teaser-title">
                                            <a href="pages-blogs-single-page.php" class="link-body">
                                                Audio Embed Post
                                            </a>
                                        </h4>
                                        <div class="blog-teaser-tags">
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-user mgr-5">
                                                </i>
                                                <a href="#">
                                                    Admiral
                                                </a>
                                            </span>
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-tag mgr-5">
                                                </i>
                                                <a href="#">
                                                    Portfolio
                                                </a>,
                                                <a href="#">
                                                    Blogging
                                                </a>
                                            </span>
                                        </div>


                                    </div>
                                </li>
                            </ul>
                            <div class="blog-teaser-description">
                                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim. Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore...
                            </div>
                            <div class="blog-teaser-more">
                                <a class="btn btn-xs btn-primary btn-circle btn-line" href="#" data-toggle="tooltip" data-original-title="Read More">
                                    <i class="lnr lnr-arrow-right">
                                    </i>
                                </a>
                            </div>
                        </div>

                    </article>
                    <article class="list-item">

                        <div class="menu-item menu-icon pdb-20">
                            <iframe class="iframe-block" height="420" src="https://www.youtube.com/embed/dKrVegVI0Us" allowfullscreen>
                            </iframe>
                        </div>
                        <div class="menu-item menu-text">
                            <ul class="content-list list-md list-news">
                                <li class="list-item pd-0">
                                    <time class="menu-item menu-icon pdr-10" datetime="2016-05-04">
                                        <span class="date pdt-0">
                                            21
                                        </span>
                                        <span class="month">
                                            apr
                                        </span>
                                    </time>
                                    <div class="menu-item menu-text">
                                        <h4 class="blog-teaser-title">
                                            <a href="pages-blogs-single-page.php" class="link-body">
                                                Video Embed Post
                                            </a>
                                        </h4>
                                        <div class="blog-teaser-tags">
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-user mgr-5">
                                                </i>
                                                <a href="#">
                                                    Admiral
                                                </a>
                                            </span>
                                            <span class="blog-teaser-tag">
                                                <i class="lnr lnr-tag mgr-5">
                                                </i>
                                                <a href="#">
                                                    Portfolio
                                                </a>,
                                                <a href="#">
                                                    Blogging
                                                </a>
                                            </span>
                                        </div>


                                    </div>
                                </li>
                            </ul>
                            <div class="blog-teaser-description">
                                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim. Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore...
                            </div>
                            <div class="blog-teaser-more">
                                <a class="btn btn-xs btn-primary btn-circle btn-line" href="#" data-toggle="tooltip" data-original-title="Read More">
                                    <i class="lnr lnr-arrow-right">
                                    </i>
                                </a>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <?php include('templates/sidebars/sidebar-blog.tpl.php'); ?>


            </div>
        </div>


    </div>
    <!-- container -->
</div>
<div class="height-xs-2">
</div>


<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>