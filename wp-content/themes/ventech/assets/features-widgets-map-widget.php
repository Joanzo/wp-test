<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Map Widgets - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Map Widgets Features for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
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
                            Blog &amp; Gallery
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Map Widgets
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
            Map Widget using Gmap
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
                                        data-gmap
                                    </code>
                                </th>
                                <td>
                                    latitude,longitude
                                </td>
                                <td>
                                    Trigger the gMap, and put the map coordinates as its center.
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-controls
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            basic
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            advance
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Show map control:<br/>
                                    <strong>
                                        Basic:
                                    </strong><br/>
                                    <ul>
                                        <li>
                                            no controls
                                        </li>
                                    </ul>
                                    <strong>
                                        Advance:
                                    </strong>
                                    <ul>
                                        <li>
                                            panControl
                                        </li>
                                        <li>
                                            zoomControl
                                        </li>
                                        <li>
                                            mapTypeControl
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-map-zoom
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            14
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Set Map Zoom value: 1 - 20
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-map-type
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            ROADMAP
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            TERRAIN
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Set map view type
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-scroll-wheel
                                    </code>
                                </th>
                                <td>
                                    <ul class="clean-list pdl-0">
                                        <li>
                                            true
                                            <strong>
                                                (default)
                                            </strong>
                                        </li>
                                        <li>
                                            false
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Enable / disable mouse scroll on map
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <code>
                                        data-markers
                                    </code>
                                </th>
                                <td>
                                    <em>
                                        array of object
                                    </em><br/>
                                    <strong>
                                        objects:
                                    </strong>
                                    <ul>
                                        <li>
                                            <strong>
                                                coordinate
                                            </strong>:
                                            <em>
                                                latitude
                                            </em>,
                                            <em>
                                                longitude
                                            </em>
                                        </li>
                                        <li>
                                            <strong>
                                                icon
                                            </strong>: get image in img/markers/
                                            <em>
                                                value
                                            </em>.png
                                        </li>
                                        <li>
                                            <strong>
                                                infoTarget
                                            </strong>: id of targeted element
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    Add markers on map with value array of objects.
                                    <ul>
                                        <li>
                                            <strong>
                                                coordinate
                                            </strong>: marker coordinate
                                        </li>
                                        <li>
                                            <strong>
                                                icon
                                            </strong>: png image name for marker
                                        </li>
                                        <li>
                                            <strong>
                                                infoTarget
                                            </strong>: marker on click will show information on id of targeted element
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 col-md-pull-8">
                <div class="widget">
                    <h3 class="widget-title">
                        Roadmap
                    </h3>
                    <div class="widget-body">
                        <div class="height-xs-3" data-gmap="47.670553,9.47845458984375" data-markers='[{ "coordinate": "47.670553,9.47845458984375", "icon": "success", "infoTarget": "#map-info" }]'  data-map-zoom='14' data-map-type='ROADMAP'>
                            <div id="map-info" class="hidden">
                                <div class="width-xs-3">
                                    <h3 class="widget-title">
                                        Our Lovely Place
                                    </h3>
                                    <p>
                                        Grüner Weg 6<br/>
                                        61169 Friedberg<br/>
                                        GERMANY
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- .widget -->
                <div class="widget">
                    <h3 class="widget-title">
                        Terrain Zoom 5
                    </h3>
                    <div class="widget-body">
                        <div class="height-xs-3" data-gmap="47.670553,9.47845458984375" data-markers='[{ "coordinate": "47.670553,9.47845458984375", "icon": "success", "infoTarget": "#map-info-2" }]'  data-map-zoom='5' data-map-type='TERRAIN'>
                            <div id="map-info-2" class="hidden">
                                <div class="width-xs-3">
                                    <h3 class="widget-title">
                                        Our Lovely Place
                                    </h3>
                                    <p>
                                        Grüner Weg 6<br/>
                                        61169 Friedberg<br/>
                                        GERMANY
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- .widget -->
                <div class="widget">
                    <h3 class="widget-title">
                        Icon warning
                    </h3>
                    <div class="widget-body">
                        <div class="height-xs-3" data-gmap="47.670553,9.47845458984375" data-markers='[{ "coordinate": "47.670553,9.47845458984375", "icon": "warning", "infoTarget": "#map-info-3" }]'  data-map-zoom='14' data-map-type='ROADMAP'>
                            <div id="map-info-3" class="hidden">
                                <div class="width-xs-3">
                                    <h3 class="widget-title">
                                        Our Lovely Place
                                    </h3>
                                    <p>
                                        Grüner Weg 6<br/>
                                        61169 Friedberg<br/>
                                        GERMANY
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- .widget -->
            </div>
        </div>
        <br/><br/>
        <hr/>
        <br/><br/>
        <h2 class="section-title">
            Large Map
        </h2>
        <div class="widget">
            <h3 class="widget-title">
                3 Markers
            </h3>
            <div class="widget-body">
                <div class="height-xs-5" data-gmap="47.770553,9.40845458984375" data-markers='[{ "coordinate": "47.670553,9.47845458984375", "icon": "success", "infoTarget": "#map-large-info-1" }, { "coordinate": "47.770553,9.57845458984375", "icon": "warning", "infoTarget": "#map-large-info-2" },{ "coordinate": "47.800553,9.37845458984375", "icon": "danger", "infoTarget": "#map-large-info-3" }]'  data-map-zoom='10' data-map-type='TERRAIN'>
                    <div id="map-large-info-1" class="hidden">
                        <div class="width-xs-3">
                            <h3 class="widget-title">
                                Headquarters 1
                            </h3>
                            <p>
                                Grüner Weg 6<br/>
                                61169 Friedberg<br/>
                                GERMANY
                            </p>
                        </div>
                    </div>
                    <div id="map-large-info-2" class="hidden">
                        <div class="width-xs-3">
                            <h3 class="widget-title">
                                Headquarters 2
                            </h3>
                            <p>
                                Schorbachstrasse 9 <br/>
                                35510 Butzbach<br/>
                                GERMANY
                            </p>
                        </div>
                    </div>
                    <div id="map-large-info-3" class="hidden">
                        <div class="width-xs-3">
                            <h3 class="widget-title">
                                Headquarters 3
                            </h3>
                            <p>
                                Schulstrasse 4 <br/>
                                32547 Bad Oyenhausen<br/>
                                GERMANY
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- .widget -->
        <div class="widget">
            <h3 class="widget-title">
                3 Markers, Disable Scroll Wheel, Advance Control
            </h3>
            <div class="widget-body">
                <div class="height-xs-5" data-gmap="47.770553,9.40845458984375" data-markers='[{ "coordinate": "47.670553,9.47845458984375", "icon": "success", "infoTarget": "#map-large-info-4" }, { "coordinate": "47.770553,9.57845458984375", "icon": "warning", "infoTarget": "#map-large-info-5" },{ "coordinate": "47.800553,9.37845458984375", "icon": "danger", "infoTarget": "#map-large-info-6" }]'  data-map-zoom='10' data-map-type='ROADMAP' data-controls='advance' data-scroll-wheel="false">
                    <div id="map-large-info-4" class="hidden">
                        <div class="width-xs-3">
                            <h3 class="widget-title">
                                Headquarters 1
                            </h3>
                            <p>
                                Grüner Weg 6<br/>
                                61169 Friedberg<br/>
                                GERMANY
                            </p>
                        </div>
                    </div>
                    <div id="map-large-info-5" class="hidden">
                        <div class="width-xs-3">
                            <h3 class="widget-title">
                                Headquarters 2
                            </h3>
                            <p>
                                Schorbachstrasse 9 <br/>
                                35510 Butzbach<br/>
                                GERMANY
                            </p>
                        </div>
                    </div>
                    <div id="map-large-info-6" class="hidden">
                        <div class="width-xs-3">
                            <h3 class="widget-title">
                                Headquarters 3
                            </h3>
                            <p>
                                Schulstrasse 4 <br/>
                                32547 Bad Oyenhausen<br/>
                                GERMANY
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- .widget -->

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