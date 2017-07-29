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
                            Checkout
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Checkout
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
            <div class="col-md-6 mgb-xs-40 mgb-md-0">
                <h3 class="section-title">
                    BILLING ADDRESS
                </h3>
                <form class="form-horizontal" action="#">
                    <div class="form-group">
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                First Name:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Last Name:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-12 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Adress:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-12 controls mgb-10">
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-12 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                City:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Phone:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-6 controls  mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Email:
                            </label>
                            <input type="email" class="form-control input-minimal" placeholder="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 mgb-xs-40 mgb-md-0">
                <h3 class="section-title">
                    SHIPPING ADDRESS
                </h3>
                <form class="form-horizontal" action="#">
                    <div class="form-group">
                        <div class="col-sm-12 controls mgb-20">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" value="1" id="checkbox-same-address">
                                <label for="checkbox-same-address">
                                    Use the same address as billing address
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                First Name:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-6 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Last Name:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-12 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Adress:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-12 controls mgb-10">
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-12 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                City:
                            </label>
                            <input type="text" class="form-control input-minimal" placeholder="">
                        </div>
                        <div class="col-sm-12 controls mgb-10">
                            <label class="control-label font-normal font-xs-2">
                                Notes:
                            </label>
                            <textarea class="form-control input-minimal" placeholder="">
                            </textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br/> <br/>
        <div class="row">
            <div class="col-md-6 mgb-xs-40 mgb-md-0">
                <h3 class="section-title">
                    PAYMENT METHODS
                </h3>
                <div class="panel-group" id="payment-group" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="show" role="button"  href="#collapseOne" data-radio-accordion="#payment-group" data-radio-id="#radio-cod">
                                    Cash on Delivery
                                    <i class="check-accordion lnr lnr-checkmark-circle pull-right">
                                    </i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" >
                            <div class="panel-body">
                                <input type="radio" checked="checked" value="COD" name="radio-payment" id="radio-cod" class="hidden">
                                Your items are eligible to use Cash on Delivery Shipping. You can pay with cash or debit card. Our delivery person will provide you with the debit machine.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"  id="headingTwo">
                            <h4 class="panel-title">
                                <a class="show collapsed"  href="#collapseTwo"  data-radio-accordion="#payment-group"  data-radio-id="#radio-transfer">
                                    Direct Bank Transfer
                                    <i class="check-accordion lnr lnr-checkmark-circle pull-right hidden">
                                    </i> 
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <input type="radio" value="Bank Transfer" name="radio-payment" id="radio-transfer" class="hidden">
                                <p>
                                    Please transfer the payment to:
                                </p>
                                <ul class="clean-list">
                                    <li>
                                        Acc Name:
                                        <b>
                                            Guardian Angel
                                        </b>
                                    </li>
                                    <li>
                                        Acc No:
                                        <b>
                                            8212391204293
                                        </b>
                                    </li>
                                </ul>
                                <p>
                                    Then send email to
                                    <a href="#">
                                        billing@ventech.com
                                    </a>for payment confirmation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="show collapsed" href="#collapseThree"  data-radio-accordion="#payment-group"  data-radio-id="#radio-credit">
                                    Credit Card
                                    <i class="check-accordion lnr lnr-checkmark-circle pull-right hidden">
                                    </i> 
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <input type="radio" value="Credit Card" name="radio-payment" id="radio-credit" class="hidden">
                                <p>
                                    Provide the following information:
                                </p>
                                <form class="form-horizontal" action="#">
                                    <div class="form-group">
                                        <div class="col-sm-12 controls">
                                            <label class="control-label font-normal font-xs-2">
                                                Card Number:
                                            </label>
                                            <input type="text" class="form-control input-minimal" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 controls">
                                            <label class="control-label font-normal font-xs-2">
                                                Card Name:
                                            </label>
                                            <input type="text" class="form-control input-minimal" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 controls">
                                            <label class="control-label font-normal font-xs-2">
                                                Expiry Date:
                                            </label>
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <input type="text" class="form-control input-minimal width-xs-1 mgr-10" placeholder="mm">
                                                </div>
                                                <div class="col-xs-4">
                                                    <input type="text" class="form-control input-minimal width-xs-1" placeholder="yy">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 controls">
                                            <label class="control-label font-normal font-xs-2">
                                                CVV:
                                            </label>
                                            <input type="text" class="form-control input-minimal width-xs-1 mgr-10" placeholder="">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- panel-group -->
                </div>
            </div>
            <!-- col -->
            <div class="col-md-6">
                <h3 class="section-title">
                    YOUR ORDERS
                </h3>
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
                                    Quantity
                                </th>
                                <th class="width-xs-2">
                                    Total Price
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img class="width-xs-1" src="img/shop/dlink-01.jpg" alt="example image">
                                </td>
                                <td>
                                    DIR-657 HD Media Router 1000
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    $ 150.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="width-xs-1" src="img/shop/tp-wireless-01.jpg" alt="example image">
                                </td>
                                <td>
                                    TL-WA854RE 300Mbps WiFi Range Extender
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    $ 40.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="width-xs-1" src="img/shop/headphone-01.jpg" alt="example image">
                                </td>
                                <td>
                                    Bluedio H+ Turbine Headphone with Bluetooth 4.1
                                </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    $ 90.00
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br/><br/>
                <h3 class="section-title">
                    CART TOTAL
                </h3>
                <div class="table-responsive">
                    <table class="table table-condensed">

                        <tbody>
                            <tr>
                                <td class="no-bd">
                                    <div class="mgb-5">
                                        Subtotal
                                    </div>
                                    <div class="mgb-5">
                                        Shipping
                                    </div>
                                </td>
                                <td class="width-xs-2 no-bd text-right">
                                    <div class="mgb-5">
                                        $ 280.00
                                    </div>
                                    <div class="mgb-5">
                                        FREE SHIPING
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right">
                                    <div class="pdt-5 pdb-5">
                                        <span class=" mgr-10">
                                            Coupon Redeemed "20-OFF":
                                        </span>
                                        <span class="text-danger">
                                            ($20)
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Total:
                                </td>
                                <td class="font-xs-5 text-right font-bold">
                                    $ 260.00
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="#"  class="btn btn-lg btn-block btn-primary">
                    Place Order
                </a>
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