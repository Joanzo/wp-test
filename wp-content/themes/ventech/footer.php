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
<a class="top-btn"  href="#" data-scroll-to="body" data-active-scroll=300>
    <i class="lnr lnr-chevron-up text-white">
    </i>
</a>
</div>
<!-- .inner-body END  -->

<div id="page-search" role="dialog" tabindex="-1"  class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="lnr lnr-cross-circle" aria-hidden="true">
                    </i>
                </button>
                <input type="text" class="form-control input-xl input-minimal pdr-50" placeholder="Search Here">
            </div>
        </div>
    </div>
</div>
<div id="cart-modal" role="dialog" tabindex="-1"  class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    Shopping Cart
                </h3>            
            </div>
            <div class="modal-body">
                <ul class="content-list list-sm list-bordered">
                    <li class="list-item">
                        <div class="menu-item menu-icon">
                            <img src="img/shop/dlink-01.jpg" alt="example image" class="menu-i">
                        </div>
                        <div class="menu-item menu-text">
                            <div class="sc-item">
                               <span class="sc-qty ">1x </span>
                               <a class="sc-name" href="#">DIR-657 HD Media Router 1000</a>
                            </div>
                            <div class="sc-price">
                               $ 150.00 
                            </div>
                        </div>
                        <div class="menu-item menu-action">
                            <button class="btn btn-link text-grey pdt-0"  data-toggle="tooltip" data-original-title="delete item"><i class="lnr lnr-cross"></i>
                            </button>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="menu-item menu-icon">
                            <img src="img/shop/tp-wireless-01.jpg" alt="example image" class="menu-i">
                        </div>
                        <div class="menu-item menu-text">
                            <div class="sc-item">
                               <span class="sc-qty ">2x </span>
                               <a class="sc-name" href="#">TL-WA854RE 300Mbps WiFi Range Extender</a>
                            </div>
                            <div class="sc-price">
                               $ 40.00 
                            </div>
                        </div>
                        <div class="menu-item menu-action">
                            <button class="btn btn-link text-grey pdt-0"  data-toggle="tooltip" data-original-title="delete item"><i class="lnr lnr-cross"></i>
                            </button>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="menu-item menu-icon">
                            <img src="img/shop/headphone-01.jpg" alt="example image" class="menu-i">
                        </div>
                        <div class="menu-item menu-text">
                            <div class="sc-item">
                               <span class="sc-qty ">3x </span>
                               <a class="sc-name" href="#">Bluedio H+ Turbine Headphone with Bluetooth 4.1 </a>
                            </div>
                            <div class="sc-price">
                               $ 90.00 
                            </div>
                        </div>
                        <div class="menu-item menu-action">
                            <button class="btn btn-link text-grey pdt-0" data-toggle="tooltip" data-original-title="delete item"><i class="lnr lnr-cross"></i>
                            </button>
                        </div>
                    </li>                                        
                </ul>
                <hr class="mgt-0"/>
                <div class="sc-total">
                    $ 280.00
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-body" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    View Cart
                </button>
            </div>
        </div>
    </div>
</div>

    <?php wp_footer(); ?>

<!-- STYLE SWITCHER JS -->
<script>
    jQuery(function() {
        jQuery('.primary-menu li').addClass('mega-li');
        jQuery('.primary-menu a').addClass('mega-link');
    });
</script>
<?php
if(isset($style_switcher) && $style_switcher)
{
    echo '<script type="text/javascript" src="demo/demo.js"></script>';
}
?>


</html>