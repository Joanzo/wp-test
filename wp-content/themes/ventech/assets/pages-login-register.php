<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Page Login Register - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Login &amp; Register Page for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu = 'menu-pages';   // To set active on the same id of primary menu ?>


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
                        <li class="active">
                            Login Register
                        </li>
                    </ul>                   
                    <h1 class="title-text">
                        My Account
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-black-10"> <!-- change cover with any bg class -->
        </div>
    </div>
</section>
<!-- .section -->



<section class="main-content pd-submenu">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mgb-xs-30">
                <div class="widget bg-light-white pd-30 pdt-5">
                    <h3 class="widget-title">
                        Login
                    </h3>
                    <div class="widget-body">
                        <form>
                            <div class="input-group  input-group-minimal mgb-10">
                                <span class="input-group-addon pdl-0">
                                    <i class="fa fa-envelope fa-fw">
                                    </i>
                                </span>
                                <input type="text" placeholder="email" class="form-control">
                            </div>
                            <div class="input-group  input-group-minimal  mgb-10">
                                <span class="input-group-addon pdl-0">
                                    <i class="fa fa-lock fa-fw">
                                    </i>
                                </span>
                                <input type="text" placeholder="password" class="form-control">
                            </div>
                            <div class="pdt-20">
                                <button class="btn btn-primary" type="submit">
                                    LOGIN
                                </button>
                                <a class="btn btn-link link-body" href="#">
                                    Lost Password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- .widget -->
            </div>
            <div class="col-md-8">
                <h3 class="section-title">
                    Don't have an account? Register now
                </h3>
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                First Name:
                            </label>
                            <input type="text" placeholder="" class="form-control input-minimal ">
                        </div>
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Last Name:
                            </label>
                            <input type="text" placeholder="" class="form-control input-minimal ">
                        </div>
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Phone:
                            </label>
                            <input type="text" placeholder="" class="form-control input-minimal ">
                        </div>
                        <div class="col-sm-6 controls  mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Email:
                            </label>
                            <input type="email" placeholder="" class="form-control input-minimal ">
                        </div>
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Password:
                            </label>
                            <input type="password" placeholder="" class="form-control input-minimal ">
                        </div>
                        <div class="col-sm-6 controls  mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Confirm Password:
                            </label>
                            <input type="password" placeholder="" class="form-control input-minimal ">
                        </div>
                    </div>

                    <div class="pdt-50">
                        <button type="submit" class="btn btn-primary pdl-30 pdr-30">
                            REGISTER
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- container -->

</section>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->



<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>