<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Page FAQ - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'FAQ Page for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu = 'menu-pages';   // To set active on the same id of primary menu ?>


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
                        <li class="active">
                            FAQ
                        </li>
                    </ul>                
                    <h1 class="title-text">
                        FAQ
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-black-10"> <!-- change cover with any bg class -->
        </div>
    </div>
</section>
<!-- .section -->



<div class="main-content pd-submenu">
    <div class="container">
        <section class="section section-faq">
            <div class="container">
                <h4 class="text-center mgb-50 font-primary space-xl">
                    FREQUENTLY ASKED QUESTIONS
                </h4>

                <div class="panel-group" id="payment-group" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default panel-success">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="show" role="button"  href="#collapseOne" data-radio-accordion="#payment-group" data-radio-id="#radio-cod">
                                    Where Is My Purchase Code?
                                    <i class=" lnr lnr-plus-circle   pull-right">
                                    </i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" >
                            <div class="panel-body">
                                <input type="radio" checked="checked" value="COD" name="radio-payment" id="radio-cod" class="hidden">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sodales et nibh at congue. Phasellus quis accumsan mi, ac tincidunt nisl. Phasellus faucibus lobortis tincidunt. Pellentesque sit amet arcu sem. Mauris blandit luctus vestibulum. Aenean ullamcorper libero eros, consectetur egestas ipsum lacinia sit amet. Duis pharetra rhoncus diam id suscipit.<br/><br/>

                                    Integer ac nunc finibus tellus bibendum interdum et ac nibh. Sed facilisis velit vitae augue venenatis, nec rhoncus dui iaculis. Aliquam faucibus nec nulla a consectetur. Aliquam nec velit enim. Etiam sit amet dolor eu justo volutpat imperdiet. Morbi ultricies lacus vel dolor posuere, at semper nibh ornare. Cras vitae quam id felis tempor laoreet. Pellentesque quis nisi dolor. Etiam nec magna tellus. Mauris sit amet eleifend arcu. Nunc scelerisque, tellus facilisis sodales tristique, odio massa imperdiet felis, et lacinia ante justo sed odio. Cras iaculis neque sit amet accumsan porttitor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"  id="headingTwo">
                            <h4 class="panel-title">
                                <a class="show collapsed"  href="#collapseTwo"  data-radio-accordion="#payment-group"  data-radio-id="#radio-transfer">
                                    Where Do I Transfer The Payment?
                                    <i class="lnr lnr-plus-circle   pull-right ">
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
                                    Which Author Payment Option Do I Choose?
                                    <i class="lnr lnr-plus-circle   pull-right">
                                    </i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <input type="radio" value="Credit Card" name="radio-payment" id="radio-credit" class="hidden">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.<br/><br/> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="show" role="button"  href="#collapseFour" data-radio-accordion="#payment-group" data-radio-id="#radio-4">
                                    Where Do I Need To Send My Portfolio?
                                    <i class=" lnr lnr-plus-circle   pull-right">
                                    </i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" >
                            <div class="panel-body">
                                <input type="radio" checked="checked" value="COD" name="radio-4" id="radio-4" class="hidden">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sodales et nibh at congue. Phasellus quis accumsan mi, ac tincidunt nisl. Phasellus faucibus lobortis tincidunt. Pellentesque sit amet arcu sem. Mauris blandit luctus vestibulum. Aenean ullamcorper libero eros, consectetur egestas ipsum lacinia sit amet. Duis pharetra rhoncus diam id suscipit.<br/><br/>

                                    Integer ac nunc finibus tellus bibendum interdum et ac nibh. Sed facilisis velit vitae augue venenatis, nec rhoncus dui iaculis. Aliquam faucibus nec nulla a consectetur. Aliquam nec velit enim. Etiam sit amet dolor eu justo volutpat imperdiet. Morbi ultricies lacus vel dolor posuere, at semper nibh ornare. Cras vitae quam id felis tempor laoreet. Pellentesque quis nisi dolor. Etiam nec magna tellus. Mauris sit amet eleifend arcu. Nunc scelerisque, tellus facilisis sodales tristique, odio massa imperdiet felis, et lacinia ante justo sed odio. Cras iaculis neque sit amet accumsan porttitor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"  id="headingFive">
                            <h4 class="panel-title">
                                <a class="show collapsed"  href="#collapseFive"  data-radio-accordion="#payment-group"  data-radio-id="#radio-5">
                                    What Is Your Office Opening Time?
                                    <i class="lnr lnr-plus-circle   pull-right ">
                                    </i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <input type="radio" value="Bank Transfer" name="radio-5" id="radio-5" class="hidden">
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
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a class="show collapsed" href="#collapseSix"  data-radio-accordion="#payment-group"  data-radio-id="#radio-6">
                                    Which Meeting Should I Attend?
                                    <i class="lnr lnr-plus-circle   pull-right">
                                    </i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                <input type="radio" value="Credit Card" name="radio-6" id="radio-6" class="hidden">
                                <p>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.<br/><br/> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!-- container -->

</div>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>