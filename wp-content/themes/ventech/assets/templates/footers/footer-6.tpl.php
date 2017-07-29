<!-- Footer Start -->
<footer class="footer-6"  id="footer">
    <div class="clearfix">
    </div>
    <div class="bottom  bg-pat-dark-5 <?php
 if(isset($bottom_extra_class)) echo($bottom_extra_class); ?>">
        <div class="container pdt-20 pdb-20">
            <div class="row">
                <div class="footer-widget col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <?php include('templates/widgets/widget-about.tpl.php') ?>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <h3 class="widget-title">
                                    Main
                                </h3>
                                <div class="widget-body">
                                    <ul class="content-list">
                                        <li class="list-item">
                                            <a href="#" class="link-white">
                                                <i class="lnr lnr-chevron-right-circle text-white  mgr-10">
                                                </i>Home
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="link-white">
                                                <i class="lnr lnr-chevron-right-circle text-white  mgr-10">
                                                </i>About
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="link-white">
                                                <i class="lnr lnr-chevron-right-circle text-white  mgr-10">
                                                </i>Features
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="link-white">
                                                <i class="lnr lnr-chevron-right-circle text-white  mgr-10">
                                                </i>Products
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="link-white">
                                                <i class="lnr lnr-chevron-right-circle text-white  mgr-10">
                                                </i>Shop
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="link-white">
                                                <i class="lnr lnr-chevron-right-circle text-white  mgr-10">
                                                </i>Pages
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="#" class="link-white">
                                                <i class="lnr lnr-chevron-right-circle text-white  mgr-10">
                                                </i>Gallery
                                            </a>
                                        </li>


                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">
                                <h3 class="widget-title">
                                    Latest Blog
                                </h3>
                                <div class="widget-body">
                                    <ul class="content-list list-sm list-vm list-icon-bordered list-icon-padded">
                                        <li class="list-item">
                                            <div class="menu-item menu-icon">
                                                <img alt="blog image" class="menu-i img-circle" src="img/blog/01.jpg">
                                            </div>
                                            <div class="menu-item menu-text">
                                                <h5 class="font-primary mgt-0 mgb-0">
                                                    <a class="link-white font-xs-3" href="pages-blogs-single-page.php">
                                                        Some Significant Blog Title
                                                    </a>
                                                </h5>
                                            </div>
                                        </li>
                                        <li class="list-item">

                                            <div class="menu-item menu-icon">
                                                <img alt="blog image" class="menu-i img-circle" src="img/blog/02.jpg">
                                            </div>
                                            <div class="menu-item menu-text">
                                                <h5 class="font-primary mgt-0 mgb-0">
                                                    <a class="link-white font-xs-3" href="pages-blogs-single-page.php">
                                                        Get What You Want
                                                    </a>
                                                </h5>
                                            </div>

                                        </li>
                                        <li class="list-item">
                                            <div class="menu-item menu-icon">
                                                <img alt="blog image" class="menu-i img-circle" src="img/blog/03.jpg">
                                            </div>
                                            <div class="menu-item menu-text">
                                                <h5 class="font-primary mgt-0 mgb-0">
                                                    <a class="link-white font-xs-3" href="pages-blogs-single-page.php">
                                                        Excelent in Every Step
                                                    </a>
                                                </h5>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div>



                </div>
                <div class="footer-widget col-md-4">
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <h4 class="font-xs-8 mgb-5 text-primary font-bold" data-animate-number="1856">
                                1856
                            </h4>
                            <p>
                                Clients
                            </p>
                        </div>
                        <div class="col-xs-6 text-center">
                            <h4 class="font-xs-8 mgb-5 text-primary font-bold" data-animate-number="1524">
                                1524
                            </h4>
                            <p>
                                Total Website
                            </p>
                        </div>
                    </div>
                    <hr/>
                    <div class="widget">
                        <div class="widget-body">
                            <p class="font-light">
                                Keep up-to-date with our awesome products and news.
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
                                    <button data-dismiss="alert" class="close" type="button">
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

                </div>
            </div>
            <!--row -->

        </div>
        <!-- container -->
        <div class="bg-black-30  pdt-40 pdb-40">
            <div class="container text-center">
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
