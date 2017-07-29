<!-- Footer Start -->
<footer class="footer-2"  id="footer">
    <div class="clearfix">
    </div>
    <div class="bottom  <?php
 if(isset($bottom_extra_class)) echo($bottom_extra_class); ?>">
        <div class="container pdt-20 pdb-20">
            <div class="stack stack-sm">
                <div class="stack-group stack-main stack-left stack-break-sm stack-content-break-sm">
                    <div class="stack-item center-table-xs">
                        <div class="stack-content">
                            <a href="#">
                                <img class="img-responsive" alt="footer logo" src="img/logo-bottom.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="stack-group stack-right stack-top  stack-break-sm  stack-content-break-sm">
                    <div class="stack-item center-table-xs">
                        <div class="stack-content">
                            <a class="mgr-20" href="#">
                                Home
                            </a>
                            <a class="mgr-20" href="#">
                                About
                            </a>
                            <a class="mgr-20"  href="#">
                                Features
                            </a>
                            <a class="mgr-20"  href="#">
                                Portfolio
                            </a>
                            <a class="mgr-20"  href="#">
                                FAQs
                            </a>
                            <a href="#">
                                Contact
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stack stack-sm">
                <div class="stack-group stack-main stack-left stack-break-sm stack-content-break-sm">
                    <div class="stack-item center-table-xs">
                        <div class="stack-content">
                            <?php
                            if(isset($footer_message)) echo($footer_message); ?>
                        </div>
                    </div>
                </div>
                <div class="stack-group stack-right stack-top  stack-break-sm  stack-content-break-sm">
                    <div class="stack-item center-table-xs">
                        <div class="stack-content">
                            <a class="btn btn-default btn-circle btn-sm" href="#">
                                <i class="fa fa-facebook fa-fw">
                                </i>
                            </a>
                            <a class="btn btn-default btn-circle btn-sm" href="#">
                                <i class="fa fa-twitter fa-fw">
                                </i>
                            </a>
                            <a class="btn btn-default btn-circle btn-sm" href="#">
                                <i class="fa fa-google fa-fw">
                                </i>
                            </a>
                            <a class="btn btn-default btn-circle btn-sm" href="#">
                                <i class="fa fa-envelope-o fa-fw">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container -->
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
