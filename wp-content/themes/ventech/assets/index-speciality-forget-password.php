<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title         = 'Forget Pasword HTML Template - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords      = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description   = 'Forget Password page for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
    <div class="full-size bg-black-20">
    </div>
</div>
<div class="section">
    <div class="full-screen full-screen-responsive" >
        <div class="parallax-bg">
            <div class="container-middle">
                <div class="content container">

                    <div class="width-xs-auto width-sm-6 width-md-8 pd-50 pdt-30 bg-black-50   center-block">
                        <img src="img/logo.png" class="img-responsive center-block pdb-20" alt="logo">
                        <p>
                            Please enter your email to reset password
                        </p><br/>
                        <form class="form-horizontal" action="#" data-form="validate">
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
                                                Message successfully sent !
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="form-group">
                                <div class="col-sm-12 controls mgb-10">
                                    <label for="input-email" class="control-label font-normal font-xs-2">
                                        Email:
                                    </label>
                                    <input id="input-email" name="input-email" type="email" required class="form-control input-minimal text-white" placeholder="">
                                </div>
                            </div>

                            <div class="pdt-50">
                                <button class="btn btn-primary pdl-20 pdr-20" type="submit" id="submit-forget-password" name="submit-forget-password">
                                    Reset Password
                                </button>
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