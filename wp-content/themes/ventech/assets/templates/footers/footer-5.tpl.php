<!-- Footer Start -->
<footer class="footer-5"  id="footer">
    <div class="clearfix">
    </div>
    <div class="bottom  <?php
 if(isset($bottom_extra_class)) echo($bottom_extra_class); ?>">
        <div class="container pdt-20 pdb-20">
            <div class="row">
                <div class="footer-widget col-md-8 mgb-xs-30 mgb-md-0">

                    <div class="widget">
                        <h3 class="widget-title">
                            TWITTER
                        </h3>
                        <div class="widget-body">
                            <div class="clearfix"  data-twitter="envato" data-twitter-display="8" data-twitter-carousel="4">
                            </div>
                        </div>
                        <!-- .widget-body -->
                    </div>
                    <!-- .widget -->

                </div>
                <div class="footer-widget col-md-4 mgb-xs-30 mgb-md-0">
                    <div class="widget">
                        <h3 class="widget-title">
                            Newsletter
                        </h3>
                        <div class="widget-body">


                            <p class="font-light">
                                Keep up-to-date with our awesome products and news. Enter your e-mail and subscribe to our newsletter.
                            </p>
                            <form action="functions/newsletter-subscribe.php" method="POST" id="newsletter-widget" data-form="validate">
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
                                    <input class="form-control" placeholder="Email Address" type="email" required="" name="newsletter-email" id="newsletter-email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit" data-button="submit">
                                            Go!
                                        </button>
                                    </span>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- widget -->
                </div>
            </div>
            <!--row -->

        </div>
        <!-- container -->
        <div class="bg-black-30  pdt-40 pdb-40">
            <div class="container">
                <div class="stack stack-sm">
                    <div class="stack-group stack-main stack-left stack-break-sm stack-content-break-sm">
                        <div class="stack-item center-table-xs">
                            <div class="stack-content text-light-grey">
                                <div class="font-xs-2 space-xl">
                                    CALL US
                                </div>
                                <div class="font-xs-3 font-sm-5 font-light text-light-white">
                                    1-800-2530
                                </div>
                            </div>
                        </div>
                        <div class="stack-item center-table-xs pdl-40 pdr-40">
                            <div class="stack-content text-light-grey">
                                <div class="font-xs-2 space-xl">
                                    SEND EMAIL
                                </div>
                                <div class="font-xs-3 font-sm-5 font-light text-light-white">
                                    info@ventech.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stack-group stack-right stack-top  stack-break-sm  stack-content-break-sm">
                        <div class="stack-item center-table-xs">
                            <div class="stack-content">
                                <a class="btn btn-light btn-circle btn-sm btn-line" href="#">
                                    <i class="fa fa-facebook fa-fw">
                                    </i>
                                </a>
                                <a class="btn btn-light btn-circle btn-sm btn-line" href="#">
                                    <i class="fa fa-twitter fa-fw">
                                    </i>
                                </a>
                                <a class="btn btn-light btn-circle btn-sm btn-line" href="#">
                                    <i class="fa fa-google fa-fw">
                                    </i>
                                </a>
                                <a class="btn btn-light btn-circle btn-sm btn-line" href="#">
                                    <i class="fa fa-envelope-o fa-fw">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pdt-30">
            <div class="container">
                <?php
                if(isset($footer_message)) echo($footer_message); ?>
            </div>

        </div>

    </div>
    <!-- bottom -->

</footer>
<!-- footer END -->

<!-- back to top button -->
<?php include('templates/footers/scroll-btn.tpl.php'); ?>


</div>
<!-- .inner-body END  -->



<!-- MODALS placed here -->
<?php include('templates/footers/modals.tpl.php') ?>

<!-- Javascript =============================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include_once('templates/footers/scripts.tpl.php'); ?>
