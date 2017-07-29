<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title          = 'Blog Large Both Sidebar - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords       = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description    = 'Large Blog with both sidebar for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu    = 'menu-pages';   // To set active on the same id of primary menu ?>
<?php

// Specific Configuration for Page
$active_submenu = 'large-blog-sub-both-sidebar';

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
                            <a href="pages-blogs-small.php">
                                Blogs
                            </a>
                        </li>
                        <li class="active">
                            Large Thumbs
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Both Sidebar Large Blog
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-black-10"> <!-- change cover with any bg class -->
        </div>
    </div>
</section>
<!-- .section -->

<?php include('templates/submenus/submenu-pages-blogs-large.tpl.php'); ?>

<div class="main-content pd-submenu">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3  mgb-xs-40 mgb-md-0">
                <?php include('templates/sidebars/sidebar-blog-small-1.tpl.php'); ?>


            </div>        
            <div class="col-lg-7 col-md-6  mgb-xs-40 mgb-md-0">
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
                            <iframe  class="iframe-block" height="200" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221229495&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true">
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
                            <iframe  class="iframe-block" height="420" src="https://www.youtube.com/embed/dKrVegVI0Us" allowfullscreen>
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
            <div class="col-lg-2 col-md-3  mgb-xs-40 mgb-md-0">
                <?php include('templates/sidebars/sidebar-blog-small-2.tpl.php'); ?>


            </div>            
        </div>


    </div>
    <!-- container -->
</div>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->



<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>