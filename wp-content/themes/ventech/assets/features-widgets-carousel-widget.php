<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Carousel Widgets - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Carousel Widgets for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
                            Blog &amp; Gallery
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Blog &amp; Gallery Widgets
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
            Gallery Slider using Master Slider
        </h2>
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <div class="widget-body">
                        <div class="master-slider ms-skin-light-thin" data-list-slider="parallaxMask" data-arrow="false" data-autoplay="true">
                            <div class="ms-slide">
                                <img  src="img/portfolios/03.jpg" data-src="img/portfolios/03.jpg" alt="lorem ipsum dolor sit"/>
                                <a data-rel="prettyPhoto[gallery-carousel-widget]" href="img/portfolios/03.jpg">
                                </a>

                            </div>
                            <div class="ms-slide">
                                <img  src="img/portfolios/04.jpg" data-src="img/portfolios/04.jpg" alt="lorem ipsum dolor sit"/>
                                <a data-rel="prettyPhoto[gallery-carousel-widget]" href="img/portfolios/04.jpg">
                                </a>
                            </div>
                            <div class="ms-slide">
                                <img  src="img/portfolios/07.jpg" data-src="img/portfolios/07.jpg" alt="lorem ipsum dolor sit"/>
                                <a data-rel="prettyPhoto[gallery-carousel-widget]" href="img/portfolios/07.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .widget -->
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Data Attribute
                                </th>
                                <th class="text-center">
                                    Value
                                </th>
                                <th class="text-center">
                                    Description
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <code>
                                        data-list-slider
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            basic
                                        </li>
                                        <li>
                                            fade
                                        </li>
                                        <li>
                                            mask
                                        </li>
                                        <li>
                                            wave
                                        </li>
                                        <li>
                                            flow
                                        </li>
                                        <li>
                                            stack
                                        </li>
                                        <li>
                                            scale
                                        </li>
                                        <li>
                                            focus
                                        </li>
                                        <li>
                                            parallaxMask
                                        </li>
                                        <li>
                                            partialWave
                                        </li>
                                        <li>
                                            fadeBasic
                                        </li>
                                        <li>
                                            fadeFlow
                                        </li>

                                    </ul>
                                    <a href="gallery-list-slider.php">
                                        View demo here
                                    </a>
                                </td>
                                <td>
                                    Trigger the slider, and choose the transition effects.
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-arrow
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            true
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            false
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Show / hide arrow
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-dots
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            true
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            false
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Show / hide arrow
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-autoplay
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            true
                                        </li>
                                        <li>
                                            false
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Enable / disable autoplay
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br/><br/>
        <hr/>
        <br/><br/>
        <h2 class="section-title">
            Carousel Widget
        </h2>
        <div class="row">
            <div class="col-md-8 col-md-push-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Data Attribute
                                </th>
                                <th class="text-center">
                                    Value
                                </th>
                                <th class="text-center">
                                    Description
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <code>
                                        data-carousel-widget
                                    </code>
                                </th>
                                <td>
                                    Number to show how many items per view
                                </td>
                                <td>
                                    Trigger the slider, and show how many items per view carousel.<br/><br/>
                                    <strong>
                                        Responsive window width breakpoint
                                    </strong>:<br/>
                                    <ul>
                                        <li>
                                            <strong>
                                                &gt; 1183px
                                            </strong>: current number input
                                        </li>
                                        <li>
                                            <strong>
                                                &lt;= 1183px
                                            </strong>: 3 if more than current number input
                                        </li>
                                        <li>
                                            <strong>
                                                &lt;= 751px
                                            </strong>: 2 if more than current number input
                                        </li>
                                        <li>
                                            <strong>
                                                &lt;= 527px
                                            </strong>: 1 if more than current number input
                                        </li>
                                    </ul>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-arrow
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            true
                                        </li>
                                        <li>
                                            false
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Show / hide arrow
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-autoplay
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            true
                                        </li>
                                        <li>
                                            false
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Enable / disable autoplay
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-dots
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            true
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            false

                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Show / hide dots control
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-responsive
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            true
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            false

                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Enable / Disable Responsive (will stay with the current number input)
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-nav
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            <em>
                                                null
                                            </em>
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            <em>
                                                target ID or Class
                                            </em>

                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Set the slider to be the navigation of other slider (Class or ID Name)
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-focus
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            false
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            true
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Enable focus on selected element (click)
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-adaptive-height
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            true
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            false
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Change height depend on content
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <div class="widget">
                    <h3 class="widget-title">
                        Autoplay Without Dots &amp; Arrow
                    </h3>
                    <div class="widget-body">
                        <ul class="content-list" data-carousel-widget=1 data-autoplay="true" data-dots="false">
                            <li class="list-item  ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/01.png" alt="client img">
                                </a>
                            </li>
                            <li class="list-item   ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/02.png" alt="client img">
                                </a>
                            </li>
                            <li class="list-item   ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/03.png" alt="client img">
                                </a>
                            </li>
                            <li class="list-item   ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/04.png" alt="client img">
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- .widget -->
                <div class="widget">
                    <h3 class="widget-title">
                        Manual Play With Dots
                    </h3>
                    <div class="widget-body">
                        <ul class="content-list" data-carousel-widget=1 >
                            <li class="list-item  ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/01.png" alt="client img">
                                </a>
                            </li>
                            <li class="list-item   ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/02.png" alt="client img">
                                </a>
                            </li>
                            <li class="list-item   ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/03.png" alt="client img">
                                </a>
                            </li>
                            <li class="list-item   ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/04.png" alt="client img">
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
                <!-- .widget -->
                <div class="widget">
                    <h3 class="widget-title">
                        Manual Play With Dots & Arrow
                    </h3>
                    <div class="widget-body">
                        <ul class="content-list" data-carousel-widget=1 data-arrow="true">
                            <li class="list-item  ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/01.png" alt="client img">
                                </a>
                            </li>
                            <li class="list-item   ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/02.png" alt="client img">
                                </a>
                            </li>
                            <li class="list-item   ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/03.png" alt="client img">
                                </a>
                            </li>
                            <li class="list-item   ">
                                <a href="#">
                                    <img class="img-responsive op-inverse" src="img/clients/04.png" alt="client img">
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
                <!-- .widget -->
            </div>
        </div>
        <div class="widget">
            <h3 class="widget-title">
                Responsive item number carousel
            </h3>
            <div class="widget-body">
                <hr/>
                <ul class="content-list wrap-side-30" data-carousel-widget=6 data-autoplay="true" data-dots="false">
                    <li class="list-item  pdl-30 pdr-30 ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/01.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/02.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/03.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/04.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/05.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/06.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/07.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/08.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/09.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/10.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/01.png" alt="client img">
                        </a>
                    </li>
                    <li class="list-item  pdl-30 pdr-30   ">
                        <a href="#">
                            <img class="img-responsive op-inverse" src="img/clients/03.png" alt="client img">
                        </a>
                    </li>
                </ul>
                <hr/>

            </div>
        </div>
        <!-- .widget -->
        <br/><br/>
        <div class="widget width-xs-auto width-sm-6">
            <h3 class="widget-title">
                Using data-nav &amp; data-focus
            </h3>
            <div class="widget-body">

                <ul class="content-list product-image-main" data-carousel-widget="1" data-dots="false" data-nav=".product-image-nav">
                    <li class="list-item">
                        <a data-rel="prettyPhoto[item-2]" href="img/shop/asus-desktop-01.jpg">
                            <img class="img-responsive"  alt="ASUS CP6130" src="img/shop/asus-desktop-01.jpg">
                        </a>
                    </li>
                    <li class="list-item">
                        <a data-rel="prettyPhoto[item-2]" href="img/shop/asus-desktop-02.jpg">
                            <img class="img-responsive"  alt="ASUS CP6130" src="img/shop/asus-desktop-02.jpg">
                        </a>
                    </li>
                    <li class="list-item">
                        <a data-rel="prettyPhoto[item-2]" href="img/shop/asus-desktop-03.jpg">
                            <img class="img-responsive"  alt="ASUS CP6130" src="img/shop/asus-desktop-03.jpg">
                        </a>
                    </li>
                    <li class="list-item">
                        <a data-rel="prettyPhoto[item-2]" href="img/shop/asus-desktop-04.jpg">
                            <img class="img-responsive"  alt="ASUS CP6130" src="img/shop/asus-desktop-04.jpg">
                        </a>
                    </li>
                </ul>
                <ul class="content-list product-image-nav" data-carousel-widget="6" data-arrow="true" data-responsive=false data-nav=".product-image-main" data-focus="true">
                    <li class="list-item pointer pdr-5 pdl-5">
                        <img class="img-responsive"  alt="ASUS CP6130" src="img/shop/asus-desktop-01.jpg">
                    </li>
                    <li class="list-item pointer pdr-5 pdl-5">
                        <img class="img-responsive"  alt="ASUS CP6130" src="img/shop/asus-desktop-02.jpg">
                    </li>
                    <li class="list-item pointer pdr-5 pdl-5">
                        <img class="img-responsive"  alt="ASUS CP6130" src="img/shop/asus-desktop-03.jpg">
                    </li>
                    <li class="list-item pointer pdr-5 pdl-5">
                        <img class="img-responsive"  alt="ASUS CP6130" src="img/shop/asus-desktop-04.jpg">
                    </li>
                </ul>
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