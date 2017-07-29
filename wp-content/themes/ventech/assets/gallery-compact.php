<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Gallery Compact - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Compact Gallery for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
                            Masonry
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Compact Gallery
                    </h1>
                    <div class="subtitle-text">
                        Cascading grid layout library.
                    </div>
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

        <ul id="portfolio-filter" class="nav nav-pills" data-filter-bind='[data-gallery]'>
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

        <br/>

        <ul class="content-grid column-xl-5 column-lg-4 column-md-3 column-sm-2 column-xs-1" data-gallery='{ "itemSelector": ".list-item", "layoutMode": "masonry" }'>
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
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/10.jpg" class="anim-link" >
                        <img src="img/portfolios/10.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-icons">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/13.jpg" class="anim-link" >
                        <img src="img/portfolios/13.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-icons">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/06.jpg" class="anim-link" >
                        <img src="img/portfolios/06.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-web">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/12.jpg" class="anim-link" >
                        <img src="img/portfolios/12.jpg" alt="example image" class="anim-img">
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
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/09.jpg" class="anim-link" >
                        <img src="img/portfolios/09.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-illustration">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/02.jpg" class="anim-link" >
                        <img src="img/portfolios/02.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-illustration">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/04.jpg" class="anim-link" >
                        <img src="img/portfolios/04.jpg" alt="example image" class="anim-img">
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
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/11.jpg" class="anim-link" >
                        <img src="img/portfolios/11.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-illustration">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/05.jpg" class="anim-link" >
                        <img src="img/portfolios/05.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-icons">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/03.jpg" class="anim-link" >
                        <img src="img/portfolios/03.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-web">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/14.jpg" class="anim-link" >
                        <img src="img/portfolios/14.jpg" alt="example image" class="anim-img">
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
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/07.jpg" class="anim-link" >
                        <img src="img/portfolios/07.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-web">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/08.jpg" class="anim-link" >
                        <img src="img/portfolios/08.jpg" alt="example image" class="anim-img">
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
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/10.jpg" class="anim-link" >
                        <img src="img/portfolios/10.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-icons">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/13.jpg" class="anim-link" >
                        <img src="img/portfolios/13.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-icons">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/06.jpg" class="anim-link" >
                        <img src="img/portfolios/06.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-web">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/12.jpg" class="anim-link" >
                        <img src="img/portfolios/12.jpg" alt="example image" class="anim-img">
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
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/09.jpg" class="anim-link" >
                        <img src="img/portfolios/09.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-illustration">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/02.jpg" class="anim-link" >
                        <img src="img/portfolios/02.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-illustration">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/04.jpg" class="anim-link" >
                        <img src="img/portfolios/04.jpg" alt="example image" class="anim-img">
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
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/11.jpg" class="anim-link" >
                        <img src="img/portfolios/11.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-illustration">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/05.jpg" class="anim-link" >
                        <img src="img/portfolios/05.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-icons">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/03.jpg" class="anim-link" >
                        <img src="img/portfolios/03.jpg" alt="example image" class="anim-img">
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
            <li class="list-item f-web">
                <div class="anim">
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/14.jpg" class="anim-link" >
                        <img src="img/portfolios/14.jpg" alt="example image" class="anim-img">
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
                    <a data-rel="prettyPhoto[1]" href="img/portfolios/07.jpg" class="anim-link" >
                        <img src="img/portfolios/07.jpg" alt="example image" class="anim-img">
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
    <!-- container -->
</div>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>