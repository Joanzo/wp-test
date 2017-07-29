<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Shop Product List View Full -  Multipurpose Responsinve HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Elegant HTML Template, Ventech, Masonry, Font Aweseome'; ?>
<?php $description = 'List View Full Modern Shopping Templates for Modern minimalist HTML 5 responsive templates for multipurpose use'; ?>
<?php $active_menu = 'menu-shop';   // To set active on the same id of primary menu ?>
<?php

// Specific Configuration for Page
$header      = 'header-shop';

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
                            <a href="pages-blogs-small.php">
                                Pages
                            </a>
                        </li>
                        <li>
                            <a href="pages-shop-4-columns-full.php">
                                Shop
                            </a>
                        </li>
                        <li class="active">
                            Cart
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Shopping Cart
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .section -->

<?php include('templates/submenus/submenu-pages-shop.tpl.php'); ?>

<section class="main-content pd-submenu">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 mgb-xs-40 mgb-md-0">
                <div class="table-responsive">
                    <table class="table mgb-0">
                        <thead>
                            <tr>
                                <th>

                                </th>
                                <th>
                                    Product
                                </th>
                                <th class="width-xs-2">
                                    Unit Price
                                </th>
                                <th class="width-xs-2">
                                    Quantity
                                </th>
                                <th class="width-1">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img class="width-xs-1" src="img/shop/dlink-01.jpg" alt="example image">
                                </td>
                                <td>
                                    <a href="#" class="link-body">
                                        DIR-657 HD Media Router 1000
                                    </a>
                                </td>
                                <td>
                                    $ 150.00
                                </td>
                                <td>
                                    <input value="1" id="page-cart-spin-1" name="page-cart-spin-1" data-rel="spinner" data-max="10">
                                </td>
                                <td>
                                    <button data-original-title="delete item" data-toggle="tooltip" class="btn btn-link text-grey pd-0">
                                        <i class="lnr lnr-cross">
                                        </i>
                                    </button>
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <img class="width-xs-1" src="img/shop/tp-wireless-01.jpg" alt="example image">
                                </td>
                                <td>
                                    <a href="#" class="link-body">
                                        TL-WA854RE 300Mbps WiFi Range Extender
                                    </a>
                                </td>
                                <td>
                                    $ 40.00
                                </td>
                                <td>
                                    <input value="2" id="page-cart-spin-2" name="page-cart-spin-2" data-rel="spinner" data-max="10">
                                </td>
                                <td>
                                    <button data-original-title="delete item" data-toggle="tooltip" class="btn btn-link text-grey pd-0">
                                        <i class="lnr lnr-cross">
                                        </i>
                                    </button>
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <img class="width-xs-1" src="img/shop/headphone-01.jpg" alt="example image">
                                </td>
                                <td>
                                    <a href="#" class="link-body">
                                        Bluedio H+ Turbine Headphone with Bluetooth 4.1
                                    </a>
                                </td>
                                <td>
                                    $ 90.00
                                </td>
                                <td>
                                    <input value="3" id="page-cart-spin-3" name="page-cart-spin-3" data-rel="spinner" data-max="10">
                                </td>
                                <td>
                                    <button data-original-title="delete item" data-toggle="tooltip" class="btn btn-link text-grey pd-0">
                                        <i class="lnr lnr-cross">
                                        </i>
                                    </button>
                                </td>
                            </tr>                                                                                                           
                        </tbody>
                    </table>
                </div>
                <hr class="mgt-0"/>
                <div class="text-right pdr-20">
                    <button class="btn btn-primary">
                        Update Cart
                    </button>
                </div>                                    
                <!-- table-responsive -->
     </div>
     <!-- col -->
     <div class="col-lg-3 col-md-4">
         <h3 class="widget-title">CART TOTAL</h3>
         <div class="table-responsive">
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <td class="no-bd">
                                    <div class="mgb-5">Subtotal</div>
                                    <div class="mgb-5">Shipping</div>
                                </td>
                                <td class="width-xs-2 text-right no-bd">
                                    <div class="mgb-5">$ 280.00</div>
                                    <div class="mgb-5">$ 0</div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right">
                                    <button class="btn btn-sm btn-dark btn-line mgt-5 mgb-5">Apply Coupon</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Total:
                                </td>
                                <td class="font-xs-5 text-right font-bold">
                                    $ 280.00 
                                </td>
                            </tr>                            
                        </tbody>
                    </table>                               
         </div>
         <a href="pages-shop-checkout.php" data-rel="translink" class="btn btn-block btn-primary">Proceed To Checkout</a>  
     </div>

        </div>
        <!-- .row -->


    </div>
    <!-- container -->
</section>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->



<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>