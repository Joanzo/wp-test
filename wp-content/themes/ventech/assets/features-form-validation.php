<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Form Validation - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Form Validation for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
                            <a href="features-form-elements.php">
                                Forms
                            </a>
                        </li>
                        <li class="active">
                            Validation
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Form Validation
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-pat-dark-6 op-50"> <!-- change cover with any bg class -->
        </div>        
    </div>
</section>
<!-- .section -->

<section class="main-content bg-light-white full-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Form Validation
                        </h2>
                    </div>
                    <div class="panel-body">
                        <form action="functions/validation-demo.php" class="form-horizontal" data-form="validate">
                            <input type="hidden" id="to-email" name="to-email" value="info@venmond.com">
                            <input type="hidden" id="to-name" name="to-name" value="Venmond, Inc.">
                            <div class="alert alert-danger hide-form" data-alert="error">
                                <div class="content-list list-xs list-vm">
                                    <div class="list-wrapper">
                                        <div class="list-item pd-0">
                                            <div class="menu-item menu-icon">
                                                <i class="lnr lnr-warning  text-danger-0 font-xs-5">
                                                </i>
                                            </div>
                                            <div class="menu-item menu-text">
                                                Hello Sir/Madam, Please check on the error !
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-success hide-form" data-alert="success">
                                <button data-dismiss="alert" class="close" type="button">
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
                                                Congratulations !!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 controls mgb-10">
                                    <label class="control-label font-normal font-xs-2">
                                        Required &amp; Min Length: 4:
                                        <span class="text-danger font-extralight font-xs-4">
                                            *
                                        </span>
                                    </label>
                                    <input type="text" class="form-control input-minimal" id="contact-form-name" name="contact-form-name" placeholder="" data-rule-minlength="4" required>
                                </div>
                                <div class="col-sm-6 controls mgb-10">
                                    <label class="control-label font-normal font-xs-2">
                                        Email:
                                        <span class="text-danger font-extralight font-xs-4">
                                            *
                                        </span>
                                    </label>
                                    <input type="email" class="form-control input-minimal" id="contact-form-email" name="contact-form-email" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 controls mgb-10">
                                    <label class="control-label font-normal font-xs-2">
                                        Must Number:
                                    </label>
                                    <input type="text" class="form-control input-minimal" placeholder="" id="contact-form-phone" name="contact-form-phone" data-rule-number="true" required>
                                </div>
                                <div class="col-sm-6 controls mgb-10">
                                    <label class="control-label font-normal font-xs-2">
                                        Services:
                                    </label>
                                    <div class="services-select">
                                        <select data-rel="select" data-style="btn-default btn-line input-minimal form-control" data-width="100%" id="contact-form-service" name="contact-form-service"   title="Choose one of the following...">
                                            <option>
                                                Web Design
                                            </option>
                                            <option>
                                                Logo Design
                                            </option>
                                            <option>
                                                Meeting
                                            </option>
                                            <option>
                                                Other
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 controls mgb-10">
                                    <label class="control-label font-normal font-xs-2">
                                        Subject:
                                        <span class="text-danger font-extralight font-xs-4">
                                            *
                                        </span>
                                    </label>
                                    <input type="text" class="form-control input-minimal" placeholder="" id="contact-form-subject" name="contact-form-subject" required>
                                </div>



                                <div class="col-sm-12 controls mgb-30">
                                    <label class="control-label font-normal font-xs-2">
                                        Notes :
                                        <span class="text-danger font-extralight font-xs-4">
                                            *
                                        </span>
                                    </label>
                                    <textarea placeholder="" class="form-control input-minimal height-xs-3" id="contact-form-message" name="contact-form-message" required>
                                    </textarea>
                                </div>
                                <div class="col-sm-12 controls mgb-10">
                                    <button type="submit" class="btn  btn-primary pdl-40 pdr-40" id="contact-form-submit" name="contact-form-submit" data-button="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- col -->
            <div class="col-sm-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                            Rules
                        </h2>
                    </div>
                    <div class="panel-body">
                        <p>
                            To validate you can just include
                            <code>
                                data-form="validate"
                            </code>in the code. And you can add additional rules in each elements.
                        </p><br/>
                        <p>
                            Some of tested(core) rule:
                        </p>
                        <ul>
                            <li>
                                data-rule-required="true" or add attribute
                                <code>
                                    required
                                </code>
                            </li>
                            <li>
                                data-rule-email="true" or add attribute
                                <code>
                                    type="email"
                                </code>
                            </li>
                            <li>
                                data-rule-url="true"
                            </li>
                            <li>
                                data-rule-date="true"
                            </li>
                            <li>
                                data-rule-dateISO="true"
                            </li>
                            <li>
                                data-rule-number="true"
                            </li>
                            <li>
                                data-rule-digits="true"
                            </li>
                            <li>
                                data-rule-creditcard="true"
                            </li>
                            <li>
                                data-rule-minlength="6"
                            </li>
                            <li>
                                data-rule-maxlength="24"
                            </li>
                            <li>
                                data-rule-rangelength="5,10"
                            </li>
                            <li>
                                data-rule-min="5"
                            </li>
                            <li>
                                data-rule-max="10"
                            </li>
                            <li>
                                data-rule-range="5,10"
                            </li>
                            <li>
                                data-rule-equalto="#password"
                            </li>
                            <li>
                                data-rule-remote="custom-validatation-endpoint.aspx"
                            </li>
                        </ul>

                    </div>
                </div>




            </div>

        </div>
        <!-- row -->

    </div>
    <!-- container -->
</section>
<!-- .main-content -->


<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>