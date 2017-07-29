<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title         = 'Under Construction HTML Template - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords      = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description   = 'Under Construction Page for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu   = 'menu-home';   // To set active on the same id of .primary - menu > ul > li ?>
<?php
// Specific Configuration for Page
$header        = 'header-empty';
$footer        = 'footer-empty';
$background    = 'bg-pat-speciality-1';
$menu_vertical = 1;
?>
<!-- Specific Page Data End -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>

<div class="page-cover">
    <!-- Cover Background -->
    <div  class="repeat-bg full-size" data-img-bg="img/patterns/speciality/01.png">
    </div>
</div>

<section class="section section-content">
    <div class="container text-center text-white">
        <div class="height-xs-2"></div>
        <img src="img/logo.png" class="img-responsive center-block" alt="logo">
        <br/>
        
        <div class="text-center mgb-50">
            <i class="lnr lnr-cog xxl-icon-size">
            </i>           
        </div>
        
        <h1 class="font-lg-11 font-md-10 font-sm-8 font-xs-6 font-bold mgt-0 font-ultrabold">
            UNDER CONSTRUCTION
        </h1>
        
        <h5 class="font-primary text-light-white font-xs-3 font-md-4 mgb-50">
            Sorry right now we are tightly renovating our site.
        </h5>

        <div class="content-list list-md list-vm center-table list-break-xs">
            <div class="list-item">
                <div class="menu-item text-white">
                    Stay Close to Us !
                </div>
                <div class="menu-item menu-text">
                    <form novalidate="novalidate"  method="POST" action="functions/newsletter-subscribe.php" class="form-inline">
                        <div class="input-group input-group-minimal">
                            <input type="text" id="email" name="email" required="" placeholder="Email Address" class="form-control width-xs-auto width-md-6 text-white">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-light mgl-15 pdl-20 pdr-20">
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
            </div>
            <!-- list-item -->
        </div>
        <!-- content-list -->
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
        
        <div class="height-xs-2"></div>


    </div>

</section>



<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>