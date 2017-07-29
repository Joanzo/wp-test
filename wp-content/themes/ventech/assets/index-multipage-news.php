<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'News Home - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'News Home Screen for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu = 'menu-home';   // To set active on the same id of .primary-menu > ul > li ?>
<?php
// Specific Configuration for Page
$header         = 'header-4';
$header_padding = 1;


?>
<!-- Specific Page Data End -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>

<section class="section  full-layout" data-add-header-margin="true">

    <div class="ventro-slider" data-ventro-slider = '{
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
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="2"  data-show-animate="zoomIn" data-delay-animate="100">
                        <div class="ventro-a ">
                            <div class="ventro-content anim-slide anim-slide-light">
                                <div class="anim">
                                    <img class="anim-img" src="img/blog/01.jpg" alt="portfolios image">
                                    <div class="anim-slide-info">
                                        <div class="pd-20">
                                            <h5 class="font-primary font-xs-3 font-md-4 mgt-0 mgb-20">
                                                <a class="link-body" href="#">
                                                    Popular design of the week
                                                </a><br/>
                                                <em class="font-xs-2 text-grey">
                                                    <i class="fa fa-clock-o fa-fw mgr-5"></i>12 Minutes Ago
                                                </em>
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
                    <li class="ventro-box" data-box-y="3" data-box-x="1" data-box-w="1" data-box-h="1"  data-show-animate="zoomIn" data-delay-animate="100">
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
                                                    <em class="font-xs-2 text-grey">
                                                        <i class="fa fa-clock-o fa-fw mgr-5"></i>2 Hours Ago
                                                    </em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="ventro-box" data-box-y="3" data-box-x="2" data-box-w="1" data-box-h="1"  data-show-animate="zoomIn" data-delay-animate="200">
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
                                                    <em class="font-xs-2 text-grey">
                                                        <i class="fa fa-clock-o fa-fw mgr-5"></i>3 Hours Ago
                                                    </em>
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
                    <li class="ventro-box" data-box-y="1" data-box-x="1" data-box-w="2" data-box-h="2"  data-show-animate="zoomIn" data-delay-animate="200">
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
                                                <br/>
                                                <em class="font-xs-2 text-grey">
                                                    <i class="fa fa-clock-o fa-fw mgr-5"></i>24 Minutes Ago
                                                </em>
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
                    <li class="ventro-box" data-box-y="3" data-box-x="1" data-box-w="1" data-box-h="1"  data-show-animate="zoomIn" data-delay-animate="300">
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
                                                    <em class="font-xs-2 text-grey">
                                                        <i class="fa fa-clock-o fa-fw mgr-5"></i>4 Hours Ago
                                                    </em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="ventro-box" data-box-y="3" data-box-x="2" data-box-w="1" data-box-h="1" data-anim="hover" data-anim-effect="flipX"  data-show-animate="zoomIn" data-delay-animate="400">
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

</section>

<section class="section section-news pdt-50 pdb-50 bg-light-white full-layout">
    <div class="container">
        <h3 class="text-center font-primary font-bold">
            LATEST NEWS
        </h3>
        <ul id="portfolio-filter" class="nav nav-pills mgb-50 center-table" data-filter-bind='[data-gallery]'>
            <li class="active">
                <a href="#" data-filter="*">
                    All
                </a>
            </li>
            <li>
                <a href="#" data-filter=".f-political">
                    Political
                </a>
            </li>
            <li>
                <a href="#" data-filter=".f-economy">
                    Economy
                </a>
            </li>
            <li>
                <a href="#" data-filter=".f-market">
                    Market
                </a>
            </li>
            <li>
                <a href="#" data-filter=".f-life">
                    Life
                </a>
            </li>
            <li>
                <a href="#" data-filter=".f-industry">
                    Industry
                </a>
            </li>           
            <li>
                <a href="#" data-filter=".f-criminal">
                    Criminal
                </a>
            </li>           
             
        </ul>    
    <ul class="content-grid column-xl-4 column-lg-3  column-sm-2 column-xs-1 list-pd-15 wrap-side-15" data-gallery='{ "itemSelector": ".list-item", "layoutMode": "masonry" }'>
        <li class="list-item f-political">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/01.jpg" class="anim-link" >
                    <img src="img/portfolios/01.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                POLITICAL
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                            Holder: "We are looking for violations of federal criminal civil rights statutes"
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        U.S. Attorney General Eric Holder visits Ferguson hours after nearly 50 protesters were arrested in the 11th straight night of demonstrations, underlines difference between the state and federal investigations underway. Rough Cut (no reporter narration).
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>
            </div>
        </li>
        <li class="list-item f-economy">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/gallery/Objects-01.jpg" class="anim-link">
                    <img src="img/gallery/Objects-01.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                ECONOMY
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           Obama calls for calm in Missouri as National Guard deploys
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Missouri National Guard deployed to the streets of Ferguson to restore peace as U.S. President Barack Obama says that violent protest ''undermines'' justice. Vanessa Johnston reports. 
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                
            </div>
        </li>
        <li class="list-item f-market">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/13.jpg" class="anim-link">
                    <img src="img/portfolios/13.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                MARKET
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           Republicans see Senate chances bolstered by primary results
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Republicans counting on an unpopular president and a favorable electoral landscape to help them win control of the U.S. Senate could have another asset this year - stronger candidates who are less likely to say embarrassing things. 
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                
            </div>
        </li>
        <li class="list-item f-industry">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/06.jpg" class="anim-link">
                    <img src="img/portfolios/06.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                INDUSTRY
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           U.S. Ex-Im Bank backers pin hopes on temporary reauthorization
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.  
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                  
            </div>
        </li>
        <li class="list-item f-religious">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/gallery/Objects-05.jpg" class="anim-link">
                    <img src="img/gallery/Objects-05.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                RELIGIOUS
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           Japanese PM Shinzo Abe takes world leaders to the Shinto religion's holiest site, as the Group of Seven summit begins in Tokyo.
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Japanese PM Shinzo Abe takes world leaders to the Shinto religion's holiest site, as the Group of Seven summit begins in Tokyo. 
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                 
            </div>
        </li>
        <li class="list-item f-insdustry">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/09.jpg" class="anim-link">
                    <img src="img/portfolios/09.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                INDUSTRY
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           France strikes hit energy supplies
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        French nuclear power workers join escalating strike action over new labour reforms the prime minister now says could be "modified".
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                 
            </div>
        </li>
        <li class="list-item f-life">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/02.jpg" class="anim-link">
                    <img src="img/portfolios/02.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                LIFE
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           Suicide: Russian girl's death prompts national debate
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        It's a day like any other day in a provincial city in central Russia. A 12-year-old girl is getting ready to go to school. Suddenly her phone rings. 
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                  
            </div>
        </li>
        <li class="list-item f-criminal">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/04.jpg" class="anim-link">
                    <img src="img/portfolios/04.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                CRIMINAL
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           The search for Ethiopia's abducted children held in South Sudan
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Four of Nyardhan Girmal's children were kidnapped from their home in Lare village last month in an attack on Ethiopia's Gambella region that left more than 200 people dead.
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                  
            </div>
        </li>
        <li class="list-item f-political">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/05.jpg" class="anim-link" >
                    <img src="img/portfolios/05.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                POLITICAL
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                            Holder: "We are looking for violations of federal criminal civil rights statutes"
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        U.S. Attorney General Eric Holder visits Ferguson hours after nearly 50 protesters were arrested in the 11th straight night of demonstrations, underlines difference between the state and federal investigations underway. Rough Cut (no reporter narration).
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>
            </div>
        </li>
        <li class="list-item f-economy">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/gallery/People-01.jpg" class="anim-link">
                    <img src="img/gallery/People-01.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                ECONOMY
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           Obama calls for calm in Missouri as National Guard deploys
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Missouri National Guard deployed to the streets of Ferguson to restore peace as U.S. President Barack Obama says that violent protest ''undermines'' justice. Vanessa Johnston reports. 
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                
            </div>
        </li>
        <li class="list-item f-market">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/14.jpg" class="anim-link">
                    <img src="img/portfolios/14.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                MARKET
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           Republicans see Senate chances bolstered by primary results
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Republicans counting on an unpopular president and a favorable electoral landscape to help them win control of the U.S. Senate could have another asset this year - stronger candidates who are less likely to say embarrassing things. 
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                
            </div>
        </li>
        <li class="list-item f-industry">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/gallery/People-04.jpg" class="anim-link">
                    <img src="img/gallery/People-04.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                INDUSTRY
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           U.S. Ex-Im Bank backers pin hopes on temporary reauthorization
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.  
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                  
            </div>
        </li>
        <li class="list-item f-religious">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/12.jpg" class="anim-link">
                    <img src="img/portfolios/12.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                RELIGIOUS
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           Japanese PM Shinzo Abe takes world leaders to the Shinto religion's holiest site, as the Group of Seven summit begins in Tokyo.
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Japanese PM Shinzo Abe takes world leaders to the Shinto religion's holiest site, as the Group of Seven summit begins in Tokyo. 
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                 
            </div>
        </li>
        <li class="list-item f-insdustry">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/portfolios/04.jpg" class="anim-link">
                    <img src="img/portfolios/04.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                INDUSTRY
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           France strikes hit energy supplies
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        French nuclear power workers join escalating strike action over new labour reforms the prime minister now says could be "modified".
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                 
            </div>
        </li>
        <li class="list-item f-life">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/gallery/Animal-02.jpg" class="anim-link">
                    <img src="img/gallery/Animal-02.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                LIFE
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           Suicide: Russian girl's death prompts national debate
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        It's a day like any other day in a provincial city in central Russia. A 12-year-old girl is getting ready to go to school. Suddenly her phone rings. 
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                  
            </div>
        </li>
        <li class="list-item f-criminal">
            <div class="anim">
                <a data-rel="prettyPhoto" href="img/gallery/Nature-02.jpg" class="anim-link">
                    <img src="img/gallery/Nature-02.jpg" alt="example image" class="anim-img">
                </a>
                <div class="news-teaser">
                    <div class="news-teaser-category textline textline-center textline-body">
                        <div class="line">
                            <a href="#">
                                CRIMINAL
                            </a>
                        </div>
                    </div>
                    <h3 class="news-teaser-title">
                        <a class="link-body" href="#">
                           The search for Ethiopia's abducted children held in South Sudan
                        </a>
                    </h3>

                    <p class="news-teaser-body">
                        Four of Nyardhan Girmal's children were kidnapped from their home in Lare village last month in an attack on Ethiopia's Gambella region that left more than 200 people dead.
                    </p>
                    <div class="news-teaser-date">
                        <i class="fa fa-clock-o fa-fw mgr-5"></i> 14 Dec 2014
                    </div>
                </div>                  
            </div>
        </li>

    </ul>
    <div class="text-center mg-50 pd-50">
        <a class="btn btn-lg btn-primary pdl-40 pdr-40" href="#">More News</a>
    </div>

    </div>
</section>


<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>