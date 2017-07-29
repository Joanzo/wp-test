<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title         = 'Portfolio HTML5 Template - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords      = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern Minimal HTML Template, Ventech, Masonry'; ?>
<?php $description   = 'Portfolio Home Multipage for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu   = 'menu-home';   // To set active on the same id of .primary - menu > ul > li ?>
<?php
// Specific Configuration for Page
$header        = 'header-3';
$menu_vertical = 1;
?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>

<section class="section section-header">
    <div class="full-screen" >
        <div class="parallax-bg" style="background: url('img/banner/bg-field.jpg')"   data-parallax="-.6">
            <div class="container-middle">
                <div class="content center-block text-center">
                    <h1 class="font-ultralight font-primary font-lg-12 font-md-10 font-sm-8 font-xs-7 text-body"  data-show-animate="flipInX" data-delay-animate="500">
                        CREATIVE PORTO
                    </h1>
                    <div class="width-xs-4 width-sm-6 textline textline-center textline-body mgt-20 mgb-30 center-block"  data-show-animate="flipInY" data-delay-animate="700" >
                        <div class="line">
                            <i class="lnr lnr-layers text-body font-xs-6">
                            </i>
                        </div>
                    </div>
                    <h5 class="font-primary font-light font-xs-3 font-md-4 text-body"  data-show-animate="fadeInUp" data-delay-animate="1200" >
                        The art of art, the glory of expression and the sunshine of the light of letters, is simplicity.
                    </h5>
                </div>
            </div>
        </div>
        <div class="mouse" data-scroll-to=".main-content" data-offset=-50>
            <div class="wheel">
            </div>
        </div>
    </div>
</section>
<!-- .section -->

<section data-spy="submenu" class="section section-share full-layout affix">
	<h2 class="sr-only">Subscribe to our mailing list</h2>
    <div class="container">
        <div class="stack stack-sm">
            <div class="stack-group stack-left stack-top  stack-break-sm">
                <div class="stack-item ">
                    <a class="link-body" href="#">
                        <i class="fa fa-envelope-o fa-fw mgr-5">
                        </i>SUBSCRIBE
                    </a>
                </div>
            </div>
            <div class="stack-group stack-right stack-top  stack-break-sm">
                <div class="stack-item ">
                    <a class="link-body" href="#">
                        <i class="lnr lnr-coffee-cup font-xs-4 mgr-5">
                        </i>BUY ME A CUP OF COFFEE
                    </a>
                </div>
            </div>
            <div class="stack-group stack-center  stack-break-sm  stack-content-break-sm">
                <div class="stack-item ">
                    <ul id="portfolio-filter" class="nav nav-tabs nav-tabs-lg" data-filter-bind='[data-gallery]'>
                        <li class="active">
                            <a href="#" data-filter="*">
                                All
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".f-animal">
                                Animal
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".f-people">
                                People
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".f-nature">
                                Nature
                            </a>
                        </li>
                        <li>
                            <a href="#" data-filter=".f-objects">
                                Objects
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- .section-share -->

<section class="main-content bg-light-white pd-submenu full-layout">
	<h2 class="sr-only">Our Portfolio</h2>
    <div class="container">
        <ul class="content-grid column-md-3 column-sm-2 column-xs-1 list-pd-10 wrap-side-10" data-gallery='{ "itemSelector": ".list-item", "layoutMode": "fitRows" }'>
            <li class="list-item f-nature">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Nature-01.jpg" class="anim-link">
                        <img src="img/gallery/Nature-01.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-people">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/People-01.jpg" class="anim-link">
                        <img src="img/gallery/People-01.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-nature">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Nature-02.jpg" class="anim-link">
                        <img src="img/gallery/Nature-02.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-objects">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Objects-01.jpg" class="anim-link">
                        <img src="img/gallery/Objects-01.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-objects">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Objects-02.jpg" class="anim-link">
                        <img src="img/gallery/Objects-02.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-people">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/People-02.jpg" class="anim-link">
                        <img src="img/gallery/People-02.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-animal">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Animal-01.jpg" class="anim-link">
                        <img src="img/gallery/Animal-01.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-people">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/People-03.jpg" class="anim-link">
                        <img src="img/gallery/People-03.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-nature">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Nature-03.jpg" class="anim-link">
                        <img src="img/gallery/Nature-03.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-nature">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Nature-04.jpg" class="anim-link">
                        <img src="img/gallery/Nature-04.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-nature">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Nature-05.jpg" class="anim-link">
                        <img src="img/gallery/Nature-05.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-animal">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Animal-02.jpg" class="anim-link">
                        <img src="img/gallery/Animal-02.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-objects">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Objects-03.jpg" class="anim-link">
                        <img src="img/gallery/Objects-03.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-nature">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Nature-06.jpg" class="anim-link">
                        <img src="img/gallery/Nature-06.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-animal">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Animal-03.jpg" class="anim-link">
                        <img src="img/gallery/Animal-03.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-objects">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Objects-04.jpg" class="anim-link">
                        <img src="img/gallery/Objects-04.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-objects">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/Objects-05.jpg" class="anim-link">
                        <img src="img/gallery/Objects-05.jpg" alt="Example Image" class="anim-img">
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
            <li class="list-item f-people">
                <div class="anim">
                    <a data-rel="prettyPhoto" href="img/gallery/People-04.jpg" class="anim-link">
                        <img src="img/gallery/People-04.jpg" alt="Example Image" class="anim-img">
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

        </ul>
    </div>
</section>
<!-- .section -->




<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>