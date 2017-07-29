
<nav class="mega-menu mega-responsive primary-menu">
    <ul class="mega-ul">
        <li id="menu-home" class="mega-li">
            <a href="#" class="mega-link" data-toggle="open-menu">
                <span class="mega-text">
                    Home
                    <i class="fa fa-angle-down fa-fw <?php
 if(!$menu_vertical) echo'visible-xs-inline-block' ?>">
                    </i>
                </span>
            </a>
            <div class="mega-child width-xl-9 width-lg-8 width-sm-7  width-xs-auto center-lg-7 right-xs" >
                <ul class="content-grid column-xs-1 <?php
 if(!$menu_vertical) echo'column-md-4' ?> pd-lr-15 wrap-side-15">
                    <li class="list-item">
                        <h3 class="child-title">
                            Multipage
                        </h3>

                        <ul class="content-list list-hover">
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-multipage-corporate.php" >
                                    Corporate
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink"  href="index-multipage-blog.php" >
                                    Blog
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink"  href="index-multipage-portfolio.php" >
                                    Portfolio
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink"  href="index-multipage-news.php" >
                                    News
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink"  href="index-multipage-shop.php" >
                                    Shop
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink"  href="index-multipage-hosting.php" >
                                    Hosting
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <h3 class="child-title">
                            One Page
                        </h3>
                        <ul class="content-list list-hover">
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-onepage-corporate.php" >
                                    Corporate
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-onepage-personal-cv.php" >
                                    Personal CV
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-onepage-product-landing.php" >
                                    Product Landing
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-onepage-app-showcase.php" >
                                    App Showcase
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <h3 class="child-title">
                            Speciality
                        </h3>
                        <ul class="content-list list-hover">
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-speciality-under-construction.php" >
                                    Under Construction
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-speciality-coming-soon.php" >
                                    Coming Soon
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-speciality-login.php" >
                                    Login
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-speciality-register.php" >
                                    Register
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="list-a" data-rel="translink" href="index-speciality-forget-password.php" >
                                    Forget Password
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="list-item">
                        <h3 class="child-title">
                            View All Demo
                        </h3>
                        <a class="list-a size-hover" data-rel="translink" href="index.php">
                            <img alt="ventech demo" src="img/screenshot/ventech-all.png" class="width-100">
                        </a>
                    </li>
                </ul>
            </div>

        </li>
        <?php
        if(!$menu_vertical){
            ?>
            <li class="mega-li visible-lg">
                <span class="mega-link">
                    &middot;
                </span>
            </li>
            <?php
        }?>
        <li id="menu-features" class="mega-li">
            <a href="#" class="mega-link" data-toggle="open-menu">
                <span class="mega-text">
                    Features
                    <i class="fa fa-angle-down fa-fw <?php
 if(!$menu_vertical) echo'visible-xs-inline-block' ?>">
                    </i>
                </span>
            </a>
            <div class="mega-child width-sm-3 width-xs-auto right-xs" >
                <ul class="content-list list-hover">
                    <li class="list-item">
                        <a class="list-a" href="features-widgets.php"  data-toggle="open-menu">
                            Widgets
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>

                        <div class="mega-child width-sm-5 open-right" >
                            <ul class="content-grid column-xs-1 <?php
 if(!$menu_vertical) echo'column-md-2' ?> list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets.php">
                                        Overall
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-tags-widget.php">
                                        Tags Widgets
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-info-widget.php">
                                        Info Widgets
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-shop-widget.php">
                                        Shop Widgets
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-carousel-widget.php">
                                        Carousel Widgets
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-tabs-widget.php">
                                        Tabs Widgets
                                    </a>
                                </li>

                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-map-widget.php">
                                        Map Widgets
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-form-widget.php">
                                        Form Widgets
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-flickr-widget.php">
                                        Flickr Widgets
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-twitter-widget.php">
                                        Twitter Widgets
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-testimonial-widget.php">
                                        Testimonial Widgets
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-widgets-social-share-widget.php">
                                        Social Share Widgets
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a"  href="features-layouts-boxed.php" data-toggle="open-menu">
                            Layouts
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-right" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-layouts-boxed.php">
                                        Layout Boxed
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-layouts-full.php">
                                        Layout Full
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" href="features-header-1.php" data-toggle="open-menu">
                            Header
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-5 open-right" >
                            <ul class="content-grid column-xs-1 <?php
 if(!$menu_vertical) echo'column-md-2' ?> list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-1.php">
                                        Header 1
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-2.php">
                                        Header 2
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-3.php">
                                        Header 3
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-4.php">
                                        Header 4
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-5.php">
                                        Header 5
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-6.php">
                                        Header 6
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-7.php">
                                        Header 7
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-8.php">
                                        Header 8
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-9.php">
                                        Header 9
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-10.php">
                                        Header 10
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-11.php">
                                        Header 11
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-12.php">
                                        Header 12
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-header-13.php">
                                        No Sticky
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li class="list-item">
                        <a class="list-a" href="features-footer-1.php" data-toggle="open-menu">
                            Footers
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-5 open-right" >
                            <ul class="content-grid column-xs-1 <?php
 if(!$menu_vertical) echo'column-md-2' ?> list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-footer-1.php">
                                        Footer 1
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-footer-2.php">
                                        Footer 2
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-footer-3.php">
                                        Footer 3
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-footer-4.php">
                                        Footer 4
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-footer-5.php">
                                        Footer 5
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-footer-6.php">
                                        Footer 6
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-footer-light.php">
                                        Footer Light
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-footer-full.php">
                                        Footer Full
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" href="features-typography.php" data-toggle="open-menu">
                            Utilities
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-right" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-utilities-typography.php">
                                        Typography
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-utilities-sizing.php">
                                        Sizing
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-utilities-content-list.php">
                                        Content List
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-utilities-content-grid.php">
                                        Content Grid
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-utilities-stacks.php">
                                        Stacks
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-utilities-data-attributes.php">
                                        Data Attributes
                                    </a>
                                </li>                                
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" href="features-form-elements.php"   data-toggle="open-menu">
                            Forms
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-right" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-form-elements.php">
                                        Elements
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-form-validation.php">
                                        Validation
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-form-layouts.php">
                                        Layouts
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" href="features-icons.php"  data-toggle="open-menu">
                            Components
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-right" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" href="features-icons.php"  data-toggle="open-menu">
                                        Icons
                                        <?php
                                        if($menu_vertical){
                                            ?>
                                            <i class="fa fa-angle-down fa-fw">
                                            </i>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <i class="fa fa-angle-right fa-fw hidden-xs">
                                            </i>
                                            <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                            </i>
                                            <?php
                                        } ?>
                                    </a>
                                    <div class="mega-child width-sm-3 open-right" >
                                        <ul class="content-list list-hover">
                                            <li class="list-item">
                                                <a class="list-a" data-rel="translink" href="features-icons.php">
                                                    Font Awesome
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a class="list-a" data-rel="translink" href="features-icons-2.php">
                                                    Hawcons
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a class="list-a" data-rel="translink" href="features-icons-3.php">
                                                    Linearicon
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-elements.php">
                                        Elements
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-typography.php">
                                        Typography
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="features-pricing-tables.php">
                                        Pricing Tables
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="features-mega-menu.php">                            
                            Mega Menu
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <?php
        if(!$menu_vertical){
            ?>
            <li class="mega-li visible-lg">
                <span class="mega-link">
                    &middot;
                </span>
            </li>
            <?php
        }?>
        <li id="menu-gallery" class="mega-li">
            <a href="#" class="mega-link" data-toggle="open-menu">
                <span class="mega-text">
                    Gallery
                    <i class="fa fa-angle-down fa-fw  <?php
 if(!$menu_vertical)echo'visible-xs-inline-block' ?>">
                    </i>

                </span>
            </a>
            <div class="mega-child width-sm-6 width-xs-auto center-lg-6 right-xs" >
                <ul class="content-grid list-hover column-xs-1 <?php
 if(!$menu_vertical) echo'column-md-3' ?>">
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="gallery-4-columns.php">
                            <img src="img/icons/4-col.png" alt="example image" /><br/>
                            4 Columns
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="gallery-3-columns.php">
                            <img src="img/icons/3-col.png" alt="example image" /><br/>
                            3 Columns
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="gallery-2-columns.php">
                            <img src="img/icons/2-col.png" alt="example image" /><br/>
                            2 Columns
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="gallery-masonry.php">
                            <img src="img/icons/masonry.png" alt="example image" /><br/>
                            Masonry
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="gallery-compact.php">
                            <img src="img/icons/compact.png" alt="example image" /><br/>
                            Compact
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="gallery-full-width.php">
                            <img src="img/icons/full-width.png" alt="example image" /><br/>
                            Full Width
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="gallery-ajax.php">
                            <img src="img/icons/unlimited.png" alt="example image" /><br/>
                            Ajax Gallery
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="gallery-single-page.php">
                            <img src="img/icons/single-page.png" alt="example image" /><br/>
                            Single Page
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="gallery-list-slider.php">
                            <img src="img/icons/slider.png" alt="example image" /><br/>
                            List Slider
                        </a>
                    </li>

                </ul>

            </div>
        </li>
        <?php
        if(!$menu_vertical){
            ?>
            <li class="mega-li visible-lg">
                <span class="mega-link">
                    &middot;
                </span>
            </li>
            <?php
        }?>
        <li id="menu-pages" class="mega-li">
            <a href="#" class="mega-link" data-toggle="open-menu">
                <span class="mega-text">
                    Pages
                    <?php
                    if($menu_vertical){
                        ?>
                        <i class="fa fa-angle-down fa-fw">
                        </i>
                        <?php
                    }
                    else{
                        ?>
                        <i class="fa fa-angle-down fa-fw  visible-xs-inline-block">
                        </i>
                        <?php
                    } ?>
                </span>
            </a>
            <div class="mega-child width-sm-3 width-xs-auto right-xs" >
                <ul class="content-list list-hover">
                    <li class="list-item">
                        <a class="list-a" href="pages-blogs-small.php" data-toggle="open-menu">
                            Blogs
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-left" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-blogs-small.php">
                                        Small Thumbs (6)
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-blogs-large.php">
                                        Large Thumbs (6)
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-blogs-masonry.php">
                                        Masonry (6)
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-blogs-archive.php">
                                        Archive
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-blogs-middle.php">
                                        Middle List
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-blogs-single-page.php">
                                        Single Page
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" href="pages-about.php"  data-toggle="open-menu">
                            About
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-left" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-about.php">
                                        About Us
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-about-2.php">
                                        About Us 2
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-about-me.php">
                                        About me
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a"  href="pages-timeline.php" data-toggle="open-menu">
                            Timeline
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-left" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-timeline.php">
                                        Default
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-timeline-clear.php">
                                        Clear
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-timeline-color-variation.php">
                                        Color Variation
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="pages-login-register.php">
                            Login &amp; Register
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="pages-faq.php">
                            FAQ
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="pages-career.php">
                            Career
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="pages-404-error.php">
                            404 Error
                        </a>
                    </li>

                    <li class="list-item">
                        <a class="list-a" href="pages-starter-middle-content.php"  data-toggle="open-menu">
                            Starter Page
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-left" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-starter-middle-content.php">
                                        Middle Content
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-starter-middle-title.php">
                                        Middle Title
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-starter-full-layout.php">
                                        Full Layout
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-starter-boxed-layout.php">
                                        Boxed Layout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <?php
        if(!$menu_vertical){
            ?>
            <li class="mega-li visible-lg">
                <span class="mega-link">
                    &middot;
                </span>
            </li>
            <?php
        }?>
        <li id="menu-shop" class="mega-li">
            <a href="#" class="mega-link" data-toggle="open-menu">
                <span class="mega-text">
                    Shop
                    <?php
                    if($menu_vertical){
                        ?>
                        <i class="fa fa-angle-down fa-fw">
                        </i>
                        <?php
                    }
                    else{
                        ?>
                        <i class="fa fa-angle-down fa-fw  visible-xs-inline-block">
                        </i>
                        <?php
                    } ?>
                </span>
            </a>
            <div class="mega-child width-sm-3 width-xs-auto right-xs" >
                <ul class="content-list list-hover">
                    <li class="list-item">
                        <a class="list-a" href="pages-shop-4-columns-full.php" data-toggle="open-menu">
                            4 Columns
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-left" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-4-columns-full.php">
                                        Full
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-4-columns-full-width.php">
                                        Full width
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-4-columns-sidebar-left-full-width.php">
                                        Sidebar left full width
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-4-columns-sidebar-right-full-width.php">
                                        Sidebar right full width
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" href="pages-shop-3-columns-full.php" data-toggle="open-menu">
                            3 Columns
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-left" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-3-columns-full.php">
                                        Full
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-3-columns-sidebar-left.php">
                                        Sidebar left
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-3-columns-sidebar-left-full-width.php">
                                        Sidebar left full width
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-3-columns-sidebar-right.php">
                                        Sidebar right
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-3-columns-sidebar-right-full-width.php">
                                        Sidebar right full width
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-3-columns-both-full-width.php">
                                        Both full width
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" href="pages-shop-2-columns-full.php" data-toggle="open-menu">
                            2 Columns
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-left" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-2-columns-full.php">
                                        Full
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-2-columns-sidebar-left.php">
                                        Sidebar left
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-2-columns-sidebar-left-full-width.php">
                                        Sidebar left full width
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-2-columns-sidebar-right.php">
                                        Sidebar right
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-2-columns-sidebar-right-full-width.php">
                                        Sidebar right full width
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-2-columns-both-full-width.php">
                                        Both full width
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" href="pages-shop-list-view-full.php" data-toggle="open-menu">
                            List View
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-left" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-list-view-full.php">
                                        Full
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-list-view-sidebar-left.php">
                                        Sidebar left
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-list-view-sidebar-left-full-width.php">
                                        Sidebar left full width
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-list-view-sidebar-right.php">
                                        Sidebar right
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-list-view-sidebar-right-full-width.php">
                                        Sidebar right full width
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-list-view-both-full-width.php">
                                        Both full width
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" href="pages-shop-single-product-full.php" data-toggle="open-menu">
                            Single Product
                            <?php
                            if($menu_vertical){
                                ?>
                                <i class="fa fa-angle-down fa-fw">
                                </i>
                                <?php
                            }
                            else{
                                ?>
                                <i class="fa fa-angle-right fa-fw hidden-xs">
                                </i>
                                <i class="fa fa-angle-down fa-fw visible-xs-inline-block">
                                </i>
                                <?php
                            } ?>
                        </a>
                        <div class="mega-child width-sm-3 open-left" >
                            <ul class="content-list list-hover">
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-single-product-full.php">
                                        Full
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-single-product-sidebar-left.php">
                                        Sidebar left
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-single-product-sidebar-left-full-width.php">
                                        Sidebar left full width
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-single-product-sidebar-right.php">
                                        Sidebar right
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="list-a" data-rel="translink" href="pages-shop-single-product-sidebar-right-full-width.php">
                                        Sidebar right full width
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="pages-shop-cart.php">
                            Cart
                        </a>
                    </li>
                    <li class="list-item">
                        <a class="list-a" data-rel="translink" href="pages-shop-checkout.php">
                            Checkout
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <?php
        if(!$menu_vertical){
            ?>
            <li class="mega-li visible-lg">
                <span class="mega-link">
                    &middot;
                </span>
            </li>
            <?php
        }?>
        <li id="menu-contact" class="mega-li">
            <a href="pages-contact.php" data-rel="translink" class="mega-link">
                <span class="mega-text">
                    Contact
                </span>
            </a>
        </li>

    </ul>
</nav>

<!-- mega-menu -->