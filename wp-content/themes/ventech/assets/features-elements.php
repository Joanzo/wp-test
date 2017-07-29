<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Element Features - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Element Features for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
                        <li class="active">
                            Elements
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Elements
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-pat-dark-6 op-50"> <!-- change cover with any bg class -->
        </div>
    </div>
</section>
<!-- .section -->

<section class="main-content bg-light-white">
    <div class="container">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="mgb-20">
                            Color Button
                        </h3>
                        <div class="mgb-xs-20">
                            <!-- Standard gray button with gradient -->
                            <div class="bg-black-60 pd-20">
                                <button type="button" class="btn btn-default mgb-5">
                                    Default
                                </button>
                                <!-- Light Color -->
                                <button type="button" class="btn btn-light mgb-5">
                                    Light
                                </button>
                                <!-- Light Color -->
                                <button type="button" class="btn btn-dark mgb-5">
                                    Dark
                                </button>
                                <button type="button" class="btn btn-primary mgb-5">
                                    Primary
                                </button>
                                <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                                <button type="button" class="btn btn-link mgb-5">
                                    Link
                                </button>
                            </div>
                        </div>
                        <div class="mgb-40">
                            <!-- Indicates a successful or positive action -->
                            <button type="button" class="btn btn-success mgb-5">
                                Success
                            </button>
                            <button type="button" class="btn btn-info mgb-5">
                                Info
                            </button>
                            <!-- Indicates caution should be taken with this action -->
                            <button type="button" class="btn btn-warning mgb-5">
                                Warning
                            </button>
                            <!-- Indicates a dangerous or potentially negative action -->
                            <button type="button" class="btn btn-danger mgb-5">
                                Danger
                            </button>
                            <button class="btn btn-facebook mgb-5">
                                <i class="fa fa-facebook fa-fw ">
                                </i> Facebook
                            </button>
                            <button class="btn btn-googleplus mgb-5">
                                <i class="fa fa-google-plus fa-fw">
                                </i> Google Plus
                            </button>
                            <button class="btn btn-twitter mgb-5">
                                <i class="fa fa-twitter fa-fw ">
                                </i> Twitter
                            </button>
                            <button class="btn btn-linkedin mgb-5">
                                <i class="fa fa-linkedin fa-fw ">
                                </i> Linked In
                            </button>
                        </div>
                        <h3 class="mgb-20">
                            Size Button
                        </h3>
                        <div class="mgb-40">
                            <div class="mgb-5">
                                <button type="button" class="btn btn-xs btn-primary">
                                    XSmall
                                </button>
                            </div>
                            <div class="mgb-5">
                                <button type="button" class="btn btn-sm btn-primary">
                                    Small
                                </button>
                            </div>
                            <div class="mgb-5">
                                <button type="button" class="btn  btn-primary">
                                    Medium
                                </button>
                            </div>
                            <div class="mgb-5">
                                <button type="button" class="btn btn-lg btn-primary">
                                    Large
                                </button>
                            </div>
                            <div class="mgb-5">
                                <button type="button" class="btn btn-xl btn-primary">
                                    XLarge
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>
                            Circle Button
                        </h3>
                        <p>
                            Add the
                            <code>
                                btn-circle
                            </code>attribute to
                            <code>
                                &lt;button&gt;
                            </code>buttons.
                        </p>

                        <div class="mgb-40">
                            <button class="btn btn-circle btn-facebook">
                                <i class="fa fa-facebook fa-fw ">
                                </i>
                            </button>
                            <button class="btn btn-circle btn-googleplus">
                                <i class="fa fa-google-plus fa-fw">
                                </i>
                            </button>
                            <button class="btn btn-circle btn-twitter">
                                <i class="fa fa-twitter fa-fw ">
                                </i>
                            </button>
                            <button class="btn btn-circle btn-linkedin">
                                <i class="fa fa-linkedin fa-fw ">
                                </i>
                            </button>
                        </div>
                        <h3 class="mgt-30">
                            Line Button
                        </h3>
                        <p>
                            Add the
                            <code>
                                btn-line
                            </code>attribute to
                            <code>
                                &lt;button&gt;
                            </code>buttons.
                        </p>
                        <div class="mgb-10">
                            <button class="btn btn-circle btn-xs btn-facebook btn-line mgr-5  mgb-5">
                                <i class="fa fa-facebook fa-fw ">
                                </i>
                            </button>
                            <button class="btn btn-circle btn-sm btn-googleplus btn-line mgr-5  mgb-5">
                                <i class="fa fa-google-plus fa-fw">
                                </i>
                            </button>
                            <button class="btn btn-circle btn-twitter btn-line mgr-5  mgb-5">
                                <i class="fa fa-twitter fa-fw ">
                                </i>
                            </button>
                            <button class="btn btn-circle btn-lg btn-linkedin btn-line mgr-5  mgb-5">
                                <i class="fa fa-linkedin fa-fw ">
                                </i>
                            </button>
                        </div>
                        <div class="mgb-20">
                            <!-- Indicates a successful or positive action -->
                            <button class="btn btn-success btn-line" type="button">
                                Success
                            </button>
                            <button class="btn btn-info btn-line" type="button">
                                Info
                            </button>
                            <!-- Indicates caution should be taken with this action -->
                            <button class="btn btn-warning btn-line" type="button">
                                Warning
                            </button>
                            <!-- Indicates a dangerous or potentially negative action -->
                            <button class="btn btn-danger btn-line" type="button">
                                Danger
                            </button>
                        </div>
                        <div class="mgb-20 pd-20 bg-black-80">
                            <button type="button" class="btn btn-light btn-line">
                                Light
                            </button>
                            <button type="button" class="btn btn-light btn-line">
                                <i class="lnr lnr-arrow-right">
                                </i>
                            </button>
                            <!-- Light Color -->
                        </div>
                        <div class="mgb-40">
                            <button type="button" class="btn btn-default btn-line">
                                Default
                            </button>
                            <button type="button" class="btn btn-dark btn-line">
                                Dark
                            </button>
                            <button type="button" class="btn btn-primary btn-line">
                                Primary
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>
                            Button Disabled
                        </h3>
                        <p>
                            Add the
                            <code>
                                disabled
                            </code>attribute to
                            <code>
                                &lt;button&gt;
                            </code>buttons.<br>
                            <br>
                        </p>
                        <div class="mgb-10">
                            <!-- Standard gray button with gradient -->
                            <button type="button" class="btn btn-primary disabled">
                                Primary
                            </button>
                            <button type="button" class="btn btn-info disabled">
                                Info
                            </button>
                            <button type="button" class="btn btn-success disabled">
                                Success
                            </button>
                        </div>
                        <div class="mgb-40">
                            <button type="button" class="btn btn-warning disabled">
                                Warning
                            </button>

                            <button type="button" class="btn btn-danger disabled">
                                Danger
                            </button>
                            <button type="button" class="btn btn-link disabled">
                                Link
                            </button>
                        </div>
                        <h3>
                            Button Block
                        </h3>
                        <div class="mgb-10">
                            <button type="button" class="btn btn-xs btn-danger btn-block">
                                XSmall
                            </button>
                        </div>
                        <div class="mgb-10">
                            <button type="button" class="btn btn-sm btn-info btn-block">
                                Small
                            </button>
                        </div>
                        <div class="mgb-10">
                            <button type="button" class="btn  btn-default btn-block">
                                Medium
                            </button>
                        </div>
                        <div class="mgb-10">
                            <button type="button" class="btn btn-lg btn-dark btn-block">
                                Large
                            </button>
                        </div>
                        <div class="mgb-10">
                            <button type="button" class="btn btn-xl btn-primary btn-block">
                                XLarge
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Panel Widget -->


        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Alert with links
                        </h3>
                        <p>
                            Use the
                            <code>
                                .alert-link
                            </code>utility class to quickly provide matching colored links within any alert.
                        </p>
                        <div class="alert alert-success">
                            <div class="content-list list-sm list-vm">
                                <div class="list-item pd-0">
                                    <div class="menu-item menu-icon">
                                        <i class="lnr lnr-checkmark-circle text-success-0 font-xs-7">
                                        </i>
                                    </div>
                                    <div class="menu-item menu-text">
                                        <strong>
                                            Well done!
                                        </strong>You successfully read
                                        <a href="#">
                                            important alert message
                                        </a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-info">
                            <div class="content-list list-sm list-vm">
                                <div class="list-item pd-0">
                                    <div class="menu-item menu-icon">
                                        <i class="lnr lnr-question-circle  text-info-0 font-xs-7">
                                        </i>
                                    </div>
                                    <div class="menu-item menu-text">
                                        <strong>
                                            Heads up!
                                        </strong>This
                                        <a href="#">
                                            alert needs your attention
                                        </a>, but it's not super important.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-warning">
                            <div class="content-list list-sm list-vm">
                                <div class="list-item pd-0">
                                    <div class="menu-item menu-icon">
                                        <i class="lnr lnr-warning  text-warning-0 font-xs-7">
                                        </i>
                                    </div>
                                    <div class="menu-item menu-text">
                                        <strong>
                                            Warning!
                                        </strong>Best check yo self, you're
                                        <a  href="#">
                                            not looking too good
                                        </a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger">
                            <div class="content-list list-sm list-vm">
                                <div class="list-item pd-0">
                                    <div class="menu-item menu-icon">
                                        <i class="lnr lnr-cross-circle  text-danger-0  font-xs-7">
                                        </i>
                                    </div>
                                    <div class="menu-item menu-text">
                                        <strong>
                                            Oh snap!
                                        </strong>
                                        <a href="#">
                                            Change a few things up
                                        </a>and try submitting again.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                    </div>
                    <div class="col-sm-6">
                        <h3>
                            Dismissable
                            Alerts
                        </h3>
                        <p>
                            Build on any alert by adding an optional
                            <code>
                                .alert-dismissable
                            </code>and close button.
                        </p>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                <i class="lnr lnr-cross">
                                </i>
                            </button>
                            <div class="content-list list-sm list-vm">
                                <div class="list-item pd-0">
                                    <div class="menu-item menu-icon">
                                        <i class="lnr lnr-checkmark-circle text-success-0 font-xs-7">
                                        </i>
                                    </div>
                                    <div class="menu-item menu-text">
                                        <strong>
                                            Well done!
                                        </strong>You successfully read
                                        <a href="#">
                                            important alert message
                                        </a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                <i class="lnr lnr-cross">
                                </i>
                            </button>
                            <div class="content-list list-sm list-vm">
                                <div class="list-item pd-0">
                                    <div class="menu-item menu-icon">
                                        <i class="lnr lnr-cross-circle  text-danger-0 font-xs-7">
                                        </i>
                                    </div>
                                    <div class="menu-item menu-text">
                                        <strong>
                                            Oh snap!
                                        </strong>

                                        Change a few things up
                                        and try submitting again.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <h3>
                            Alert Condensed
                        </h3>
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                <i class="lnr lnr-cross">
                                </i>
                            </button>
                            <div class="content-list list-xs list-vm">
                                <div class="list-wrapper">
                                    <div class="list-item pd-0">
                                        <div class="menu-item menu-icon">
                                            <i class="lnr lnr-warning  text-warning-0 font-xs-5">
                                            </i>
                                        </div>
                                        <div class="menu-item menu-text">
                                            <strong>
                                                Warning!
                                            </strong>Best check yo self, you're

                                            not looking too good.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-info">
                            <div class="content-list list-xs list-vm">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    <i class="lnr lnr-cross">
                                    </i>
                                </button>
                                <div class="list-wrapper">
                                    <div class="list-item pd-0">
                                        <div class="menu-item menu-icon">
                                            <i class="lnr lnr-question-circle  text-info-0 font-xs-5">
                                            </i>
                                        </div>
                                        <div class="menu-item menu-text">
                                            <strong>
                                                Heads up!
                                            </strong>This

                                            alert needs your attention
                                            , but it's not super important.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- col-sm-6 -->

                </div>
                <!-- row -->
            </div>
            <!-- panel-body -->
        </div>
        <!-- Panel Widget -->


        <div class="panel">
            <div class="panel-body">
                <h3>
                    Progress Bars
                </h3>
                <p>
                    Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.<br>
                    <br>
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="progress  progress-xs">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success width-40">
                                <span class="sr-only">
                                    40% Complete (success)
                                </span>
                            </div>
                        </div>
                        <div class="progress  progress-sm">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info width-20">
                                <span class="sr-only">
                                    20% Complete
                                </span>
                            </div>
                        </div>
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning width-60">
                                <span class="sr-only">
                                    60% Complete (warning)
                                </span>
                            </div>
                        </div>
                        <div class="progress  progress-lg">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger width-80">
                                <span class="sr-only">
                                    80% Complete
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger width-40">
                                <span>
                                    40%
                                </span>
                            </div>
                        </div>
                        <div class="progress progress-striped">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info width-20">
                                <span class="sr-only">
                                    20% Complete
                                </span>
                            </div>
                        </div>
                        <div class="progress progress-striped active">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning width-60">
                                <span class="sr-only">
                                    60% Complete (warning)
                                </span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success width-30">
                                <span class="sr-only">
                                    35% Complete (success)
                                </span>
                            </div>
                            <div class="progress-bar progress-bar-warning width-20">
                                <span class="sr-only">
                                    20% Complete (warning)
                                </span>
                            </div>
                            <div class="progress-bar progress-bar-danger width-10">
                                <span class="sr-only">
                                    10% Complete (danger)
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- col-sm-6-->

                </div>
                <!-- row -->
            </div>
            <!-- panel-body -->
        </div>
        <!-- panel -->

        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3>
                            Accordion
                        </h3>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion -->
                        <br/><br/>


                        <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="headingOne-2">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
                                            Group Success
                                            <i class="lnr lnr-plus-circle pull-right">
                                            </i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne-2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne-2">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading" role="tab" id="headingTwo-2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                            Group Info
                                            <i class="lnr lnr-plus-circle pull-right">
                                            </i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-2">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-danger">
                                <div class="panel-heading" role="tab" id="headingThree-2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2">
                                            Group Danger
                                            <i class="lnr lnr-plus-circle pull-right">
                                            </i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-2">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion -->

                    </div>
                    <div class="col-md-6">
                        <h3>
                            Nav Tabs
                        </h3>
                        <br/>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                    Home
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                    Messages
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                                    Settings
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <h5 class="mgt-25 font-primary font-bold">
                                    Home Tab
                                </h5>
                                <p>
                                    In nec nisi ut magna eleifend dapibus et et sem. Etiam hendrerit tortor at nunc vulputate, sit amet sagittis ex elementum. Donec euismod euismod nibh, vel lobortis sapien volutpat et. Sed eget urna ac mi posuere elementum ut eget orci.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <h5 class="mgt-25 font-primary font-bold">
                                    Profile Tab
                                </h5>
                                <p>
                                    Nam at sem non nisi iaculis dictum quis non lacus. Nullam eleifend neque sed aliquet luctus. Sed faucibus vestibulum nunc, in pulvinar neque fringilla et.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <h5 class="mgt-25 font-primary font-bold">
                                    Messages Tab
                                </h5>
                                <p>
                                    Etiam hendrerit tortor at nunc vulputate, sit amet sagittis ex elementum. Donec euismod euismod nibh, vel lobortis sapien volutpat et. Sed eget urna ac mi posuere elementum ut eget orci. Nam at sem non nisi iaculis dictum quis non lacus.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <h5 class="mgt-25 font-primary font-bold">
                                    Settings Tab
                                </h5>
                                <p>
                                    In nec nisi ut magna eleifend dapibus et et sem. Etiam hendrerit tortor at nunc vulputate, sit amet sagittis ex elementum. Vel lobortis sapien volutpat et. Sed eget urna ac mi posuere elementum ut eget orci. Nam at sem non nisi iaculis dictum quis non lacus..
                                </p>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <br/>

                        <h3>
                            Nav Pills
                        </h3>
                        <br/>
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home-2" aria-controls="home-2" role="tab" data-toggle="tab">
                                    Home
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#profile-2" aria-controls="profile-2" role="tab" data-toggle="tab">
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#messages-2" aria-controls="messages-2" role="tab" data-toggle="tab">
                                    Messages
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#settings-2" aria-controls="settings-2" role="tab" data-toggle="tab">
                                    Settings
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home-2">
                                <h5 class="mgt-25 font-primary font-bold">
                                    Home Tab
                                </h5>
                                <p>
                                    In nec nisi ut magna eleifend dapibus et et sem. Etiam hendrerit tortor at nunc vulputate, sit amet sagittis ex elementum. Donec euismod euismod nibh, vel lobortis sapien volutpat et. Sed eget urna ac mi posuere elementum ut eget orci.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile-2">
                                <h5 class="mgt-25 font-primary font-bold">
                                    Profile Tab
                                </h5>
                                <p>
                                    Nam at sem non nisi iaculis dictum quis non lacus. Nullam eleifend neque sed aliquet luctus. Sed faucibus vestibulum nunc, in pulvinar neque fringilla et.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages-2">
                                <h5 class="mgt-25 font-primary font-bold">
                                    Messages Tab
                                </h5>
                                <p>
                                    Etiam hendrerit tortor at nunc vulputate, sit amet sagittis ex elementum. Donec euismod euismod nibh, vel lobortis sapien volutpat et. Sed eget urna ac mi posuere elementum ut eget orci. Nam at sem non nisi iaculis dictum quis non lacus.
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings-2">
                                <h5 class="mgt-25 font-primary font-bold">
                                    Settings Tab
                                </h5>
                                <p>
                                    In nec nisi ut magna eleifend dapibus et et sem. Etiam hendrerit tortor at nunc vulputate, sit amet sagittis ex elementum. Vel lobortis sapien volutpat et. Sed eget urna ac mi posuere elementum ut eget orci. Nam at sem non nisi iaculis dictum quis non lacus..
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- .row -->
            </div>
            <!-- panel-body -->
        </div>
        <!-- panel -->

        <div class="panel">
            <div class="panel-body">
                <h3>
                    Tables Bordered
                </h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Username
                                </th>
                                <th>
                                    Date registered
                                </th>
                                <th>
                                    Role
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Johann Un
                                </td>
                                <td class="center">
                                    2010/02/03
                                </td>
                                <td class="center">
                                    Member
                                </td>
                                <td class="center">
                                    <span class="label label-success">
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success btn-line" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning btn-line" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger btn-line" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    Petrus Dar
                                </td>
                                <td class="center">
                                    2012/01/15
                                </td>
                                <td class="center">
                                    Staff
                                </td>
                                <td class="center">
                                    <span class="label label-danger">
                                        Banned
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success btn-line" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning btn-line" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger btn-line" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    Zeibsein Gunchineer
                                </td>
                                <td class="center">
                                    2013/02/01
                                </td>
                                <td class="center">
                                    Admin
                                </td>
                                <td class="center">
                                    <span class="label label-default">
                                        Inactive
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success btn-line" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning btn-line" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger btn-line" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4
                                </td>
                                <td>
                                    Goergia Zullivan
                                </td>
                                <td class="center">
                                    2013/06/20
                                </td>
                                <td class="center">
                                    Member
                                </td>
                                <td class="center">
                                    <span class="label label-warning">
                                        Pending
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success btn-line" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning btn-line" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger btn-line" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5
                                </td>
                                <td>
                                    Tresshold Compe
                                </td>
                                <td class="center">
                                    2011/02/13
                                </td>
                                <td class="center">
                                    Staff
                                </td>
                                <td class="center">
                                    <span class="label label-success">
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success btn-line" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning btn-line" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger btn-line" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br/><br/>
                <h3>
                    Tables Striped
                </h3>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Username
                                </th>
                                <th>
                                    Date registered
                                </th>
                                <th>
                                    Role
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Johann Un
                                </td>
                                <td class="center">
                                    2010/02/03
                                </td>
                                <td class="center">
                                    Member
                                </td>
                                <td class="center">
                                    <span class="label label-success">
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    Petrus Dar
                                </td>
                                <td class="center">
                                    2012/01/15
                                </td>
                                <td class="center">
                                    Staff
                                </td>
                                <td class="center">
                                    <span class="label label-danger">
                                        Banned
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    Zeibsein Gunchineer
                                </td>
                                <td class="center">
                                    2013/02/01
                                </td>
                                <td class="center">
                                    Admin
                                </td>
                                <td class="center">
                                    <span class="label label-default">
                                        Inactive
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4
                                </td>
                                <td>
                                    Goergia Zullivan
                                </td>
                                <td class="center">
                                    2013/06/20
                                </td>
                                <td class="center">
                                    Member
                                </td>
                                <td class="center">
                                    <span class="label label-warning">
                                        Pending
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5
                                </td>
                                <td>
                                    Tresshold Compe
                                </td>
                                <td class="center">
                                    2011/02/13
                                </td>
                                <td class="center">
                                    Staff
                                </td>
                                <td class="center">
                                    <span class="label label-success">
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-sm btn-warning" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-danger" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br/><br/>
                <h3>
                    Tables Condensed
                </h3>
                <div class="table-responsive">
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Username
                                </th>
                                <th>
                                    Date registered
                                </th>
                                <th>
                                    Role
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Johann Un
                                </td>
                                <td class="center">
                                    2010/02/03
                                </td>
                                <td class="center">
                                    Member
                                </td>
                                <td class="center">
                                    <span class="label label-success">
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross-circle">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="row-success">
                                <td>
                                    2
                                </td>
                                <td colspan="4">
                                    Row Success
                                </td>
                                <td>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross-circle">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    Zeibsein Gunchineer
                                </td>
                                <td class="center">
                                    2013/02/01
                                </td>
                                <td class="center">
                                    Admin
                                </td>
                                <td class="center">
                                    <span class="label label-default">
                                        Inactive
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross-circle">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="row-warning">
                                <td>
                                    4
                                </td>
                                <td colspan="4">
                                    Row Warning
                                </td>
                                <td>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross-circle">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5
                                </td>
                                <td>
                                    Tresshold Compe
                                </td>
                                <td class="center">
                                    2011/02/13
                                </td>
                                <td class="center">
                                    Staff
                                </td>
                                <td class="center">
                                    <span class="label label-danger">
                                        Danger
                                    </span>
                                </td>
                                <td>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="view">
                                        <i class="lnr lnr-enter">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="edit">
                                        <i class="lnr lnr-pencil">
                                        </i>
                                    </a>
                                    <a class="btn btn-link btn-xs" data-placement="top" data-toggle="tooltip" data-original-title="delete">
                                        <i class="lnr lnr-cross-circle">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- panel-body -->
        </div>
        <!-- panel -->

        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Modal
                        </h3>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                With Title
                            </button>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal-2">
                                Without Title
                            </button>
                        </div>
                        <br/><br/>
                        <h3>
                            Label
                        </h3>
                        <div>
                            <span class="label label-default mgr-5">
                                Default
                            </span>
                            <span class="label label-primary mgr-5">
                                Primary
                            </span>
                            <span class="label label-success mgr-5">
                                Success
                            </span>
                            <span class="label label-info mgr-5">
                                Info
                            </span>
                            <span class="label label-warning mgr-5">
                                Warning
                            </span>
                            <span class="label label-danger mgr-5">
                                Danger
                            </span>
                        </div>
                        <br/><br/>
                        <h3>
                            Badges
                        </h3>
                        <div>

                            <a href="#" class="mgr-10">
                                Inbox
                                <span class="badge">
                                    42
                                </span>
                            </a>

                            <button class="btn btn-success mgr-10" type="button">
                                Messages
                                <span class="badge">
                                    4
                                </span>
                            </button>
                            <button class="btn btn-warning" type="button">
                                Messages
                                <span class="badge">
                                    4
                                </span>
                            </button>


                        </div>
                        <br/><br/>
                    </div>
                    <div class="col-sm-6">
                        <h3>
                            Tooltip
                        </h3>
                        <button type="button" class="btn btn-info mgb-5" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                            Tooltip on left
                        </button>

                        <button type="button" class="btn btn-info mgb-5" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            Tooltip on top
                        </button>

                        <button type="button" class="btn btn-info mgb-5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                            Tooltip on bottom
                        </button>

                        <button type="button" class="btn btn-info mgb-5" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                            Tooltip on right
                        </button>
                        <br/><br/>
                        <h3>
                            Popover
                        </h3>
                        <button type="button" class="btn btn-danger mgb-5" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on left
                        </button>

                        <button type="button" class="btn btn-danger mgb-5" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on top
                        </button>

                        <button type="button" class="btn btn-danger mgb-5" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on bottom
                        </button>

                        <button type="button" class="btn btn-danger mgb-5" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on right
                        </button>
                        <br/><br/>
                        <h3>
                            Pagination
                        </h3>
                        <ul class="pagination">
                            <li class="disabled">
                                <a aria-label="Previous" href="#">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-double-left"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                    1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    2
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    3
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    4
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    5
                                </a>
                            </li>
                            <li>
                                <a aria-label="Next" href="#">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-double-right"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <br/><br/>

                    </div>
                    <!-- col-sm-6 -->

                </div>
                <!-- row -->
            </div>
            <!-- panel-body -->
        </div>
        <!-- panel-->


    </div>
    <!-- container -->
</section>
<!-- .main-content -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="lnr lnr-cross-circle" aria-hidden="true">
                    </i>
                </button>
                <h3 class="modal-title">
                    Modal title
                </h3>
            </div>
            <div class="modal-body">
                So do you want to make your dreams come true?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-body" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal-2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="lnr lnr-cross-circle" aria-hidden="true">
                    </i>
                </button>

            </div>
            <div class="modal-body mgt-20">
                <p>
                    So do you want to make your dreams come true?
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-body" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>