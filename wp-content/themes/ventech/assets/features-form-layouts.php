<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Form Layouts - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Form Layouts for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
                            Layouts
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Form Layouts
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
                            Label on Top
                        </h2>
                    </div>
                    <div class="panel-body">
                        <form  class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-6 controls mgb-10">
                                    <label class="control-label font-normal font-xs-2">
                                        Name:
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
                                        Phone:
                                        <span class="text-danger font-extralight font-xs-4">
                                        </span>
                                    </label>
                                    <input type="text" class="form-control input-minimal" placeholder="" id="contact-form-phone" name="contact-form-phone"  required>
                                </div>
                                <div class="col-sm-6 controls mgb-10">
                                    <label class="control-label font-normal font-xs-2">
                                        Services:
                                        <span class="text-danger font-extralight font-xs-4">
                                            *
                                        </span>
                                    </label>
                                    <div class="services-select">
                                        <select data-rel="select" data-style="btn-default btn-line input-minimal form-control" data-width="100%" id="contact-form-service" name="contact-form-service"  title="Choose...">
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
                            Form Horizontal
                        </h2>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" >
                            <div class="form-group mgb-10">
                                <label class="col-sm-4 control-label">
                                    First Name
                                </label>
                                <div class="col-sm-7 controls">
                                    <input type="text" placeholder="" class="form-control input-minimal">
                                    <span class="help-inline text-light-grey">
                                        Some hint here
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mgb-10">
                                <label class="col-sm-4 control-label">
                                    Last Name
                                </label>
                                <div class="col-sm-7 controls">
                                    <input type="text" placeholder="" class="form-control input-minimal">
                                    <span class="help-inline text-light-grey">
                                        Some hint here
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mgb-10">
                                <label class="col-sm-4 control-label">
                                    Email
                                </label>
                                <div class="col-sm-7 controls">
                                    <input type="email" placeholder="" class="form-control input-minimal">
                                    <span class="help-inline text-light-grey">
                                        Some hint here
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mgb-10">
                                <label class="col-sm-4 control-label">
                                    Service
                                </label>
                                <div class="col-sm-7 controls">
                                    <div class="services-select">
                                        <select data-rel="select" data-style="btn-default btn-line input-minimal form-control" data-width="100%" id="contact-form-service-02" name="contact-form-service-02"  title="Choose...">                                       
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
                            <div class="form-group mgb-10">
                                <label class="col-sm-4 control-label">
                                    Subject
                                </label>
                                <div class="col-sm-7 controls">
                                    <input type="email" placeholder="small" class="form-control input-minimal">
                                    <span class="help-inline text-light-grey">
                                        Some hint here
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mgb-10">
                                <label class="col-sm-4 control-label">
                                    Notes
                                </label>
                                <div class="col-sm-7 controls">
                                    <textarea placeholder="" class="form-control input-minimal height-xs-3" id="contact-form-message-02" name="contact-form-message-02" required>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 control-label">
                                    
                                </div>
                                <div class="col-sm-7 controls mgb-10">
                                    <button type="submit" class="btn  btn-primary pdl-40 pdr-40" id="contact-form-submit-02" name="contact-form-submit-02" data-button="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

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