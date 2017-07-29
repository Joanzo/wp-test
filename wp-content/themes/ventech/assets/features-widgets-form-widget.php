<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Form Widgets - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Form Widgets Features for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu        = 'menu-features';   // To set active on the same id of primary menu ?>
<?php
// Specific Configuration for Page
$footer = 'footer-3';

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
                            Form Widgets
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Form Widgets
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
            Quick Contact Widget
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
                                        data-form
                                    </code>
                                </th>
                                <td>
                                    validate
                                </td>
                                <td>
                                    Trigger the form validation
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-alert
                                    </code>
                                </th>
                                <td>
                                    error
                                </td>
                                <td>
                                    Place this on error form message. The original/default message will be for empty required field error.
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-alert
                                    </code>
                                </th>
                                <td>
                                    success
                                </td>
                                <td>
                                    Place this on success form message.
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-button
                                    </code>
                                </th>
                                <td>
                                    submit
                                </td>
                                <td>
                                    Place this on submit button
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Input Element ID &amp; Name
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
                                        to-email
                                    </code>
                                </th>
                                <td>
                                    your to email value
                                </td>
                                <td>
                                    Fill this value with where this message should be sent to
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        to-name
                                    </code>
                                </th>
                                <td>
                                    your to name value
                                </td>
                                <td>
                                    Who this message should be sent to
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <?php include('templates/widgets/widget-quick-contact.tpl.php') ?>
            </div>
        </div>
        <br/><br/>
        <h2 class="section-title">
            Subscribe Widget
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
                                        data-form
                                    </code>
                                </th>
                                <td>
                                    validate
                                </td>
                                <td>
                                    Trigger the form validation
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-alert
                                    </code>
                                </th>
                                <td>
                                    error
                                </td>
                                <td>
                                    Place this on error form message. The original/default message will be for empty required field error.
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-alert
                                    </code>
                                </th>
                                <td>
                                    success
                                </td>
                                <td>
                                    Place this on success form message.
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-button
                                    </code>
                                </th>
                                <td>
                                    submit
                                </td>
                                <td>
                                    Place this on submit button
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <?php include('templates/widgets/widget-newsletter.tpl.php') ?>
            </div>
        </div>
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