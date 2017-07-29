<!-- Footer Start -->
<footer class="footer-2"  id="footer">
    <div class="clearfix">
    </div>
    <div class="bottom  <?php
 if(isset($bottom_extra_class)) echo($bottom_extra_class); ?>">
        <div class="container">
            <div class="row">
                <div class="footer-widget col-md-4 mgb-xs-20 mgb-md-0">
                    <?php include("templates/widgets/widget-map.tpl.php"); ?>
                </div>
                <div class="footer-widget col-md-4 mgb-xs-20 mgb-md-0">
                    <?php include("templates/widgets/widget-about.tpl.php"); ?>
                </div>
                <div class="footer-widget  col-md-4 mgb-xs-20 mgb-md-0">
                    <?php include("templates/widgets/widget-newsletter.tpl.php"); ?>
                </div>
            </div>
            <!--row -->
            <hr/>
            <div class="text-center">
                <?php
                if(isset($footer_message)) echo($footer_message); ?>
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
