<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title          = 'Shop Product List 4 Columns Left Sidebar -  Multipurpose Responsinve HTML 5 Templates'; ?>
<?php $keywords       = 'HTML5 Template, CSS3, Elegant HTML Template, Ventech, Masonry, Font Aweseome'; ?>
<?php $description    = '4 Columns Left Sidebar Modern Shopping Templates for Modern minimalist HTML 5 responsive templates for multipurpose use'; ?>
<?php $active_menu    = 'menu-shop';   // To set active on the same id of primary menu ?>
<?php

// Specific Configuration for Page
$header         = 'header-shop';

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
                            <a href="pages-shop-4-columns-full.php">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="pages-shop-3-columns-full.php">
                                4 Columns
                            </a>
                        </li>                        
                        <li class="active">
                            Sidebar left
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Sidebar Left 4 Columns Full Width
                    </h1>
                    <div class="subtitle-text">
                        Columns grid view interchangable with list view.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .section -->

<?php include('templates/submenus/submenu-pages-shop.tpl.php'); ?>

<div class="main-content pd-submenu full-layout">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4  mgb-xs-40 mgb-md-0">
                <?php include('templates/sidebars/sidebar-shop.tpl.php'); ?>
            </div>
            <div class="col-lg-9 col-md-8">
                <h3 class="widget-title mgt-0">
                    Computers
                </h3>
                <ul role="tablist" class="nav nav-tabs">
                    <li class="active" role="presentation">
                        <a data-toggle="tab" role="tab"  href="#">
                            All
                        </a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" role="tab"  href="#">
                            Desktop
                        </a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" role="tab"  href="#">
                            Laptop
                        </a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" role="tab"  href="#">
                            Tablets
                        </a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" role="tab"  href="#">
                            Monitors
                        </a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" role="tab"  href="#">
                            Laptop
                        </a>
                    </li>
                    <li role="presentation">
                        <a data-toggle="tab" role="tab"  href="#">
                            Networking
                        </a>
                    </li>
                </ul>
                <div class="shop-filter bg-light-white stack stack-xs">
                    <div class="stack-group stack-right stack-top  stack-break-xs">
                        <div class="stack-item center-table">
                            <div class="stack-content">
                                <div class="mgl-5 mgr-5">

                                    <button class="btn btn-default btn-line no-bd active" data-shop-list-toggle="grid" data-grid="4" data-target="#product-list-container">
                                        <i class="fa fa-th">
                                        </i>
                                    </button>
                                    <button class="btn btn-default btn-line no-bd "  data-shop-list-toggle="list" data-target="#product-list-container">
                                        <i class="fa fa-th-list">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stack-group stack-main stack-left stack-break-xs">
                        <div class="stack-item">
                            <div class="stack-content">
                                <select data-rel="select" data-style="btn-default btn-line no-bd pd-10 pdl-15 pdr-15">
                                    <option>
                                        Most Popular
                                    </option>
                                    <option>
                                        Price: high to low
                                    </option>
                                    <option>
                                        Price: low to high
                                    </option>
                                    <option>
                                        Rating: high to low
                                    </option>
                                    <option>
                                        Discount
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <br/><br/>
                <div id="product-list-container" class="content-grid column-xl-4 column-lg-3 column-sm-2 column-xs-1 list-pd-10 wrap-side-10 list-hover product-list shop-grid"  data-gallery='{ "itemSelector": ".shop-item", "layoutMode": "fitRows" }'>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-1]" href="img/shop/laptop-pink-01.jpg">
                                            <img class="img-responsive"  alt='Series 3 15.6" Laptop' src="img/shop/laptop-pink-01.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-1]" href="img/shop/laptop-pink-02.jpg">
                                            <img class="img-responsive"  alt='Series 3 15.6" Laptop' src="img/shop/laptop-pink-02.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-1]" href="img/shop/laptop-pink-03.jpg">
                                            <img class="img-responsive"  alt='Series 3 15.6" Laptop' src="img/shop/laptop-pink-03.jpg">
                                        </a>
                                    </li>
                                </ul>
                                <div class="product-tag">
                                    -20%
                                </div>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    Series 3 15.6" Laptop
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                With Samsung's exclusive Fast Start technology, simply close the lid to enter a hybrid sleep mode...
                            </div>
                            <div class="product-teaser-price">
                                <span class="price-stroke">
                                    $ 599.99
                                </span>
                                <span class="product-price">
                                    $ 529.99
                                </span>
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-1" name="spin-1" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
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
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    ASUS CP6130
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                A glossy surface givess the CP6130 an air of elegance, while and an eye-catching power button inspired from the halo of a lunar eclipse seamlessly blends in to the front of the case...
                            </div>
                            <div class="product-teaser-price">
                                $ 960.00
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-2" name="spin-2" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-3]" href="img/shop/laptop-01.jpg">
                                            <img class="img-responsive"  alt="Series 4 Laptop" src="img/shop/laptop-01.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-3]" href="img/shop/laptop-02.jpg">
                                            <img class="img-responsive"  alt="Series 4 Laptop" src="img/shop/laptop-02.jpg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    Series 4 15.6" Laptop
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                Don't be weighed down by wasted time, let your PC come alive when you need it...
                            </div>
                            <div class="product-teaser-price">
                                <span class="price-stroke">
                                    $ 24.99
                                </span>
                                <span class="product-price">
                                    $ 20.99
                                </span>
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-3" name="spin-3" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-4]" href="img/shop/dlink-01.jpg">
                                            <img class="img-responsive"  alt="DIR-657 HD Media Router 1000" src="img/shop/dlink-01.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-4]" href="img/shop/dlink-02.jpg">
                                            <img class="img-responsive"  alt="DIR-657 HD Media Router 1000" src="img/shop/dlink-02.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-4]" href="img/shop/dlink-03.jpg">
                                            <img class="img-responsive"  alt="DIR-657 HD Media Router 1000" src="img/shop/dlink-03.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-4]" href="img/shop/dlink-04.jpg">
                                            <img class="img-responsive"  alt="DIR-657 HD Media Router 1000" src="img/shop/dlink-04.jpg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    DIR-657 HD Media Router 1000
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                Up to 300 Mbps speed, 4 Gigabit Ethernet ports and HD Fuel bandwidth prioritization combine to optimize your online entertainment for seamless HD video streams...
                            </div>
                            <div class="product-teaser-price">
                                $ 149.99
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star-half-o">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-11" name="spin-11" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-5]" href="img/shop/intel-i7-01.jpg">
                                            <img class="img-responsive"  alt="i7-950" src="img/shop/intel-i7-01.jpg">
                                        </a>
                                    </li>
                                </ul>
                                <div class="product-tag">
                                    Sale !
                                </div>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    Intel® Core™ i7 Processor i7-950
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                Intel® Core™ i7 Processor i7-950 Desktop Processor Specification Processor Model # i7-950 Platform...
                            </div>
                            <div class="product-teaser-price">
                                <span class="price-stroke">
                                    $ 300.99
                                </span>
                                <span class="product-price">
                                    $ 269.99
                                </span>
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star-half-o">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-4" name="spin-4" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-6]" href="img/shop/intel-xeon-01.jpg">
                                            <img class="img-responsive"  alt="i7-980X" src="img/shop/intel-xeon-01.jpg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    Intel® Core™ i7 processor Extreme Edition 980X – i7-980X
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                Intel® Core™ i7 processor Extreme Edition 980X – i7-980X Desktop Processor Specification...
                            </div>
                            <div class="product-teaser-price">
                                $ 1,080.00

                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-10" name="spin-10" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-7]" href="img/shop/tab-01.jpg">
                                            <img class="img-responsive"  alt="Samsung Galaxy Tab 7" src="img/shop/tab-01.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-7]" href="img/shop/tab-02.jpg">
                                            <img class="img-responsive"  alt="Samsung Galaxy Tab 7" src="img/shop/tab-02.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-7]" href="img/shop/tab-03.jpg">
                                            <img class="img-responsive"  alt="Samsung Galaxy Tab 7" src="img/shop/tab-03.jpg">
                                        </a>
                                    </li>
                                </ul>
                                <div class="product-tag bg-warning">
                                    Free Delivery!
                                </div>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    Samsung Galaxy Tab™ 7.0"
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                Compact and light, you can keep in touch with people and content through 3G connectivity, Wi-Fi® 802.11 b/g/n, Bluetooth® Wireless Technology 3.0...
                            </div>
                            <div class="product-teaser-price">
                                $ 199.99
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-5" name="spin-5" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-8]" href="img/shop/tl-01.jpg">
                                            <img class="img-responsive"  alt="Surveillance Camera TL-SC3430" src="img/shop/tl-01.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-8]" href="img/shop/tl-02.jpg">
                                            <img class="img-responsive"  alt="Surveillance Camera TL-SC3430" src="img/shop/tl-02.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-8]" href="img/shop/tl-03.jpg">
                                            <img class="img-responsive"  alt="Surveillance Camera TL-SC3430" src="img/shop/tl-03.jpg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    H.264 Megapixel Surveillance Camera TL-SC3430
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                With its built-in high performance 1.3Mega-Pixel sensor, the TL-SC3430 is excellent for homes, shops, banks, offices and other building surveillance...
                            </div>
                            <div class="product-teaser-price">
                                $ 82.94
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star-half-o">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-9" name="spin-9" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-9]" href="img/shop/keyboard-01.jpg">
                                            <img class="img-responsive"  alt="Logitech Keyboard and Mouse" src="img/shop/keyboard-01.jpg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    Logitech MK 220 Wireless Combo
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                Logitech Wireless Combo MK220 Keyboard & Mouse - Black comfort you to type anywhere with a wireless range of 10 meters...
                            </div>
                            <div class="product-teaser-price">
                                $ 20.99
                            </div>
                            <div class="product-teaser-rating  text-warning">
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-6" name="spin-6" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-10]" href="img/shop/mac-01.jpg">
                                            <img class="img-responsive"  alt="Apple MacBook Air" src="img/shop/mac-01.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-10]" href="img/shop/mac-02.jpg">
                                            <img class="img-responsive"  alt="Apple MacBook Air" src="img/shop/mac-02.jpg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    Apple MacBook Air - 11" - RAM 4 GB - i5 1.6GHz
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                APPLE Macbook Air the latest released in 2015 uses the fifth generation of Intel processors...
                            </div>
                            <div class="product-teaser-price">
                                $ 1,200
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-7" name="spin-7" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-11]" href="img/shop/headphone-01.jpg">
                                            <img class="img-responsive"  alt="Bluedio H+ Turbine Headphone" src="img/shop/headphone-01.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-11]" href="img/shop/headphone-02.jpg">
                                            <img class="img-responsive"  alt="Bluedio H+ Turbine Headphone" src="img/shop/headphone-02.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-11]" href="img/shop/headphone-03.jpg">
                                            <img class="img-responsive"  alt="Bluedio H+ Turbine Headphone" src="img/shop/headphone-03.jpg">
                                        </a>
                                    </li>
                                </ul>
                                <div class="product-tag">
                                    -20%
                                </div>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    Bluedio H+ Turbine Headphone with Bluetooth 4.1
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                Turbine Headphones Bluedio H + Digital Wireless bluetooth headphones that have a Bluetooth Version 4.1, with the use of distance up to 10m...
                            </div>
                            <div class="product-teaser-price">
                                <span class="price-stroke">
                                    $ 36.99
                                </span>
                                <span class="product-price">
                                    $ 30.99
                                </span>
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-8" name="spin-8" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>
                    <article class="list-item shop-item">
                        <div class="menu-item menu-icon">
                            <div class="product-teaser-img menu-i">
                                <ul class="content-list list-break-xs" data-carousel-widget="1" data-arrow="true" data-dots="false">
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-12]" href="img/shop/tp-wireless-01.jpg">
                                            <img class="img-responsive"  alt="TL-WA854RE 300Mbps" src="img/shop/tp-wireless-01.jpg">
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a data-rel="prettyPhoto[item-12]" href="img/shop/tp-wireless-02.jpg">
                                            <img class="img-responsive"  alt="TL-WA854RE 300Mbps" src="img/shop/tp-wireless-02.jpg">
                                        </a>
                                    </li>
                                </ul>
                                <div class="product-tag">
                                    -20%
                                </div>
                            </div>
                        </div>
                        <div class="menu-item menu-text">
                            <h4 class="product-teaser-title">
                                <a class="link-body" href="pages-shop-single-product-full.php">
                                    TL-WA854RE 300Mbps WiFi Range Extender
                                </a>
                            </h4>
                            <div class="product-teaser-body sg-hidden">
                                TP-LINK TL-WA854RE designed to easily expand the coverage and improve the signal strength of an existing wireless network to eliminate "dead zones"...
                            </div>
                            <div class="product-teaser-price">
                                <span class="price-stroke">
                                    $ 24.99
                                </span>
                                <span class="product-price">
                                    $ 20.99
                                </span>
                            </div>
                            <div class="product-teaser-rating  text-warning">
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star">
                                </i>
                                <i class="fa fa-star-o">
                                </i>
                            </div>
                            <div class="product-teaser-quantity  sg-hidden">
                                <input value="1" id="spin-12" name="spin-12" data-rel="spinner" data-max="10">
                            </div>
                            <div class="product-teaser-button">
                                <button class="btn btn-primary btn-block">
                                    ADD TO CART
                                </button>
                                <button class="btn btn-link sg-hidden">
                                    Add to Wishlist
                                </button>
                            </div>
                        </div>
                    </article>

                </div>
                <!-- #product-list-container -->
                <ul class="pagination">
                    <li class="disabled">
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                «
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            1
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            2
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            3
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            4
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            5
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">
                                »
                            </span>
                        </a>
                    </li>
                </ul>

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