<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title         = 'Coming Soon HTML Template - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords      = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description   = 'Coming Soon Page for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu   = 'menu-home';   // To set active on the same id of .primary - menu > ul > li ?>
<?php
// Specific Configuration for Page
$header        = 'header-empty';
$footer        = 'footer-empty';
$menu_vertical = 1;
?>
<!-- Specific Page Data End -->


<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>

<div class="page-cover">
    <!-- Cover Background -->
    <div  class="cover-bg full-size" data-img-bg="img/banner/nature.jpg">
    </div>
    <div class="full-size bg-black-50">
    </div>
</div>

<section class="section section-content">
    <div class="container text-center text-white">

        <div class="height-xs-2"></div>
        <img src="img/logo.png" class="img-responsive center-block" alt="logo">
        <br/>
        <h1 class="font-lg-11 font-md-10 font-sm-8 font-xs-6 font-bold mgt-0 font-ultrabold">
            COMING SOON
        </h1>
        <br/>
        <p class="text-light-white font-xs-3 font-md-4 mgb-50">
            Coming real soon your beautiful web template
        </p>
        <div class="milestone milestone-4-columns mgb-50">
            <div class="row">
            
                <div class="col-md-3 col-sm-6 mgb-20 first">
                    <div class="textline textline-center textline-primary">
                        <div class="line">
                            <div class="ms-circle bd-white  ms-circle-sm">
                                <div class="ms-title" data-countdown="2018/01/01" data-format="%D">
                                    00
                                </div>
                                <div class="ms-subtitle text-primary">
                                    Days
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mgb-20 second">
                    <div class="textline textline-center textline-primary">
                        <div class="line">
                            <div class="ms-circle bd-white ms-circle-sm">
                                <div class="ms-title" data-countdown="2018/01/01" data-format="%H">
                                    00
                                </div>
                                <div class="ms-subtitle text-primary">
                                    Hours
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mgb-20 third">
                    <div class="textline textline-center textline-primary">
                        <div class="line">
                            <div class="ms-circle bd-white ms-circle-sm">
                                <div class="ms-title" data-countdown="2018/01/01" data-format="%M">
                                    00
                                </div>
                                <div class="ms-subtitle text-primary">
                                    Minutes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 mgb-20 fourth">
                    <div class="textline textline-center textline-primary">
                        <div class="line">
                            <div class="ms-circle bd-white ms-circle-sm">
                                <div class="ms-title" data-countdown="2018/01/01" data-format="%S">
                                    00
                                </div>
                                <div class="ms-subtitle text-primary">
                                    Seconds
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="bg-black-50 pd-30 pdt-20 width-xs-auto width-sm-5 center-table">
            <div class="mgb-10 font-xs-4">
                <label class="font-regular mgb-0" for="newsletter-email">Stay close with us!</label>
            </div>
            <form method="POST" action="functions/newsletter-subscribe.php" class="form-inline" data-form="validate">
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
                <div class="input-group">
                    <input type="email" id="newsletter-email" name="newsletter-email" required="" placeholder="Email Address" class="form-control width-xs-auto width-md-6">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary pdl-20 pdr-20" data-button="submit" id="submit-newsletter" name="submit-newsletter">
                            <span class="hidden-xs">
                                Subscribe
                            </span>
                            <span class="visible-xs">
                                Go
                            </span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="mgt-20 center-table">
            <a href="#" class="btn btn-light btn-circle btn-line btn-sm btn-fa btn-anim show pull-left mgr-5">
                <i class="fa fa-facebook fa-fw">
                </i>
            </a>
            <a href="#" class="btn btn-light btn-circle btn-line btn-sm btn-fa btn-anim show pull-left mgr-5">
                <i class="fa fa-twitter fa-fw">
                </i>
            </a>
            <a href="#" class="btn btn-light btn-circle btn-line btn-sm btn-fa btn-anim show pull-left mgr-5">
                <i class="fa fa-google-plus fa-fw">
                </i>
            </a>
        </div>
        <br/><br/><br/><br/><br/>


    </div>
</section>



<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>