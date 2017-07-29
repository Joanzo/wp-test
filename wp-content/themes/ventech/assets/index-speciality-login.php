<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title            = 'Login Page HTML Template - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords         = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description      = 'Login page for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu   = 'menu-home';   // To set active on the same id of .primary - menu > ul > li ?>
<?php
// Specific Configuration for Page
$header        = 'header-empty';
$footer        = 'footer-empty';
$menu_vertical = 1;
?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>

<div class="page-cover">
    <!-- Cover Background -->
    <div  class="cover-bg full-size" data-img-bg="img/banner/bg-blur.jpg">
    </div>
    <div class="cover-bg-mask full-size bg-black-20">
    </div>
</div>
<div class="section section-header">
    <div class="full-screen full-screen-responsive" >
        <div class="parallax-bg">
            <div class="container-middle">
                <div class="content container ">

                    <div class="width-xs-auto width-sm-6 pd-50 pdt-30 bg-black-50   center-block">
                        <img src="img/logo.png" class="img-responsive center-block pdb-20" alt="logo">
                        <form action="functions/login-form.php" data-form="validate">
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
                                                Login Success!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="input-group  input-group-minimal mgb-10">
                                <span class="input-group-addon pdl-0">
                                    <label for="input-email" class="fa fa-envelope fa-fw text-primary mgb-0">
                                    </label>
                                </span>
                                <input id="input-email" name="input-email" type="email"  required placeholder="email" class="form-control text-white">
                            </div>
                            <div class="input-group  input-group-minimal  mgb-10">
                                <span class="input-group-addon pdl-0">
                                    <label for="input-password" class="fa fa-lock fa-fw text-primary mgb-0">
                                    </label>
                                </span>
                                <input id="input-password" name="input-password"  type="password" required="" placeholder="password" class="form-control text-white">
                            </div>
                            <div class="pdt-50 text-center">
                                <button class="btn btn-primary pdl-20 pdr-20" type="submit" data-button="submit"  id="submit-login" name="submit-login">
                                    LOGIN
                                </button>
                                <a class="btn btn-light btn-line no-bd" href="index-speciality-forget-password.php">
                                    Lost Password?
                                </a>
                                <a class="btn btn-light btn-line no-bd" href="index-speciality-register.php">
                                    Register
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="mgt-10 text-center">
                        Copyright &copy;2016 Ventech All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>