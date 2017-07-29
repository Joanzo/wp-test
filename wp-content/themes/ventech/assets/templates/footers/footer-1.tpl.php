<!-- footer START -->
<footer class="footer-1"  id="footer">
    <div class="clearfix">
    </div>
    <div class="bottom  <?php
 if(isset($bottom_extra_class)) echo($bottom_extra_class); ?>">
        <div class="container">
            <div class="row">
                <div class="footer-widget col-sm-6 col-md-3 mgb-xs-30 mgb-md-0">
                    <?php include("templates/widgets/widget-schedule.tpl.php"); ?>
                </div>
                <div class="footer-widget col-sm-6 col-md-3 mgb-xs-30 mgb-md-0">
                    <?php include("templates/widgets/widget-gallery-carousel.tpl.php"); ?>
                </div>
                <div class="footer-widget col-sm-6 col-md-3 mgb-xs-30 mgb-md-0">
                    <?php include("templates/widgets/widget-twitter.tpl.php"); ?>
                </div>
                <div class="footer-widget col-sm-6 col-md-3 mgb-xs-30 mgb-md-0">
                    <?php include("templates/widgets/widget-newsletter.tpl.php"); ?>
                </div>
            </div>
            <!--row -->
            <div class="bottom-row">
                <div class="textline textline-right">
                    <div class="line">
                        <img class="img-responsive width-xs-3" alt="logo bottom" src="img/logo-bottom.png">
                    </div>
                </div>
                <div class="copyright">
                    <?php
                    if(isset($footer_message)) echo($footer_message); ?>
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
