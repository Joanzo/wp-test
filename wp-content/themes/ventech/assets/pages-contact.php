<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title            = 'Contact Us - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords         = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description      = 'Contact Us Page for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu      = 'menu-contact';   // To set active on the same id of primary menu ?>

<?php $header           = 'header-11';
$logo_path        = 'img/logo-reverse.png';
$logo_sticky_path = 'img/logo-reverse.png';
?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>


<section class="section full-layout">
    <div class="height-xs-6 height-sm-7" data-gmap="47.770553,9.40845458984375"  data-markers='[{ "coordinate": "47.670553,9.47845458984375", "icon": "success", "infoTarget": "#map-large-info-1" }, { "coordinate": "47.770553,9.57845458984375", "icon": "warning", "infoTarget": "#map-large-info-2" },{ "coordinate": "47.800553,9.37845458984375", "icon": "danger", "infoTarget": "#map-large-info-3" }]'  data-map-zoom='10' data-map-type='TERRAIN' data-controls='advance' data-scroll-wheel='false'>
        <div id="map-large-info-1" class="hidden">
            <div class="width-xs-3">
                <h3 class="widget-title">
                    Headquarters 1
                </h3>
                <p>
                    Grüner Weg 6<br/>
                    61169 Friedberg<br/>
                    GERMANY
                </p>
            </div>
        </div>
        <div id="map-large-info-2" class="hidden">
            <div class="width-xs-3">
                <h3 class="widget-title">
                    Headquarters 2
                </h3>
                <p>
                    Schorbachstrasse 9 <br/>
                    35510 Butzbach<br/>
                    GERMANY
                </p>
            </div>
        </div>
        <div id="map-large-info-3" class="hidden">
            <div class="width-xs-3">
                <h3 class="widget-title">
                    Headquarters 3
                </h3>
                <p>
                    Schulstrasse 4 <br/>
                    32547 Bad Oyenhausen<br/>
                    GERMANY
                </p>
            </div>
        </div>

    </div>
</section>
<!-- .section -->

<section class="main-content pd-submenu">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mgb-xs-40 mgb-md-0">

                <div class="section-title mgt-0">
                    <div class="mgb-10">
                        Contact Us
                    </div>
                    <div class="section-subtitle text-light-grey">
                        Let us just say hi to you
                    </div>
                </div>
                <form action="functions/contact.php" class="form-horizontal" data-form="validate">
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
                                        Please check on the error !
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success hide-form" data-alert="success">
                        <button  data-dismiss="alert" class="close" type="button">
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
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2"  for="contact-form-name">
                                Name:
                                <span class="text-danger font-extralight font-xs-4">
                                    *
                                </span>
                            </label>
                            <input type="text" class="form-control input-minimal" id="contact-form-name" name="contact-form-name" placeholder="" required>
                        </div>
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2"  for="contact-form-email">
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
                            <label class="control-label font-normal font-xs-2" for="contact-form-phone">
                                Phone:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="" id="contact-form-phone" name="contact-form-phone">
                        </div>
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Services:
                            </label>
                            <div class="services-select">
                                <select data-rel="select" data-style="btn-default btn-line input-minimal form-control" data-width="100%" id="contact-form-service" name="contact-form-service"  title="Choose one of the following...">
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
                            <label class="control-label font-normal font-xs-2" for="contact-form-subject">
                                Subject:
                                <span class="text-danger font-extralight font-xs-4">
                                    *
                                </span>
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="" id="contact-form-subject" name="contact-form-subject" required>
                        </div>



                        <div class="col-sm-12 controls mgb-30">
                            <label class="control-label font-normal font-xs-2" for="contact-form-message">
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
            <div class="col-md-4">
                <div class="widget bg-pat-light-9 pdt-10 pdl-30 pdr-30 pdb-20">
                    <h3 class="widget-title">
                        Address
                    </h3>
                    <address>
                        <strong>
                            Twitter, Inc.
                        </strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">
                            P:
                        </abbr> (123) 456-7890
                    </address>
                    <p>
                        Come and talk with us
                    </p>
                </div>
                <div class="widget bg-pat-light-9 pdt-10 pdl-30 pdr-30 pdb-30">
                    <h3 class="widget-title ">
                        Office Schedule
                    </h3>
                    <div class="widget-body">
                        <p class="font-light">
                            Donec sed odio dui nulla vitae elit libero, a pharetra augue.
                        </p>
                        <div class="content-list">
                            <div class="list-item">
                                <div class="menu-item width-xs-2">
                                    Monday - Friday
                                </div>
                                <div class="menu-item menu-text font-light">
                                    8.00 AM - 18.00 PM
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="menu-item width-xs-2">
                                    Saturday
                                </div>
                                <div class="menu-item menu-text font-light">
                                    8.00 AM - 13.00 PM
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="menu-item width-xs-2">
                                    Sunday
                                </div>
                                <div class="menu-item menu-text font-light">
                                    Close
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>