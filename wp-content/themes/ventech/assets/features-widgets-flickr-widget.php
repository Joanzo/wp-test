<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Flickr Widgets - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Flickr Widgets Features for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu        = 'menu-features';   // To set active on the same id of primary menu ?>
<?php
// Specific Configuration for Page

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
                            <a href="features-typography.php">
                                Features
                            </a>
                        </li>
                        <li>
                            <a href="features-widgets.php">
                                Widgets
                            </a>
                        </li>
                        <li class="active">
                            Flickr Widget
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Flickr Widget
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-pat-dark-6 op-50"> <!-- change cover with any bg class -->
        </div>        
    </div>
</section>
<!-- .section -->

<section class="main-content">
    <div class="container">
        <h2 class="section-title">
            Flickr Widget
        </h2>
        <div class="row">

            <div class="col-md-8 col-md-push-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Data Attribute
                                </th>
                                <th class="text-center">
                                    Value
                                </th>
                                <th class="text-center">
                                    Description
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <code>
                                        data-flickr
                                    </code>
                                </th>
                                <td>
                                    Flickr ID
                                </td>
                                <td>
                                    Trigger the flickr, fill with your flickr id
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-limit
                                    </code>
                                </th>
                                <td>
                                    <em>number</em>
                                </td>
                                <td>
                                    Show how many image
                                </td>
                            </tr>                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <div class="widget">
                    <h3 class="widget-title">
                        10 Gallery
                    </h3>
                    <div class="widget-body">
                        <ul class="content-grid column-xs-4 list-pd-1" data-flickr="37304598@N02" data-limit=10>            
                        </ul>
                    </div>
                </div>
                <div class="widget">
                    <h3 class="widget-title">
                        5 Gallery
                    </h3>
                    <div class="widget-body">
                        <ul class="content-grid column-xs-4 list-pd-1" data-flickr="37304598@N02" data-limit=5>            
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
        <br/><br/>


        <div class="height-xs-1">
        </div>

    </div>
    <!-- container -->
</section>
<!-- .main-content -->


<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->



<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>