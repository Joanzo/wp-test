<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Data Attributes Utilities - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Data Attributes Utilities for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu = 'menu-features';   // To set active on the same id of primary menu ?>
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
                            <a href="features-utilities-typography.php">
                                Comprehensive Utilities
                            </a>
                        </li>
                        <li class="active">
                            Data Attributes
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Data Attributes
                    </h1>
                    <div class="subtitle-text">
                        Our easily used javascript can be triggered via data-* attributes
                    </div>
                </div>
            </div>
        </div>
        <div class="full-size bg-pat-dark-6 op-50"> <!-- change cover with any bg class -->
        </div>        
    </div>
</section>
<!-- .section -->


<section class="main-content full-layout">
    <div class="container">
        <h2 class="section-title">
            Data Attributes List
        </h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Element Placement
                        </th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <code>
                                data-active-menu
                            </code>
                        </th>
                        <td>
                            Add active class to this value target.<br/>
                            Example: <strong>'#home'</strong> or <strong>'.home'</strong>
                        </td>
                        <td>
                            <code>&lt;body&gt;</code>
                        </td>                        
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-active-submenu
                            </code>
                        </th>
                        <td>
                            Add active class to this value target (if any).<br/>
                            Example: <strong>'#sub-1'</strong> or <strong>'.sub-1'</strong>
                        </td>
                        <td>
                            <code>&lt;body&gt;</code>
                        </td>                        
                    </tr> 
                    <tr>
                        <th>
                            <code>
                                data-img-bg
                            </code>
                        </th>
                        <td>
                            Add style image background with center position on this element<br/>
                            Example: <strong>'img/bg/01.jpg'</strong><br/>
                            Other Options:<br/>
                            <strong>data-repeat</strong>: 'repeat' <i>(default)</i>, 'repeat-x', 'repeat-y', or 'none'<br/>
                            <strong>data-position</strong>: 'center 0px' <i>(default)</i>, or other css background image
                            
                        </td>
                        <td>
                            <code>any</code>
                        </td>                        
                    </tr>  
                    <tr>
                        <th>
                            <code>
                                data-scroll-to
                            </code>
                        </th>
                        <td>
                            On click: scroll to element ID or Class<br/>
                            Example: <strong>data-scroll-to="#features"</strong><br/>
                            Other options:<br/>
                            <code>
                                data-offset
                            </code> : Add offset to ID top position
                        </td>
                        <td>
                            <code>any</code>
                        </td>                        
                    </tr>   
                    <tr>
                        <th>
                            <code>
                                data-parallax
                            </code>
                        </th>
                        <td>
                            Add Parallax background effect<br/>
                            Value: numeric (example: -1.2, -0.2, 0.2, 1.2)
                        </td>
                        <td>
                            <code>any</code>
                        </td>
                    </tr> 
                    <tr>
                        <th>
                            <code>
                                data-waypoint
                            </code>
                        </th>
                        <td>
                            Check on scroll page, if it inside the current element then set 'active' class on target<br/>
                            Value: '#menu-features' (element target to set active)
                        </td>
                        <td>
                            <code>any</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-toggle="modal"
                            </code>
                        </th>
                        <td>
                            On Click, add modal page with content target.<br/>
                            Options: <br/>
                            <code>data-target = "#page-search"</code> (The content is element with Id="page-search")
                        </td>
                        <td>
                            <code>any</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-toggle-class
                            </code>
                        </th>
                        <td>
                            On click: toggle class on target<br/>
                            Example: <strong>data-toggle-class="active"</strong><br/>
                            Other options:<br/>
                            <code>
                                data-target
                            </code> : target ID or Class to be toggled
                        </td>
                        <td>
                            <code>any</code>
                        </td>                        
                    </tr> 
                    <tr>
                        <th>
                            <code>
                                data-shop-list-toggle
                            </code>
                        </th>
                        <td>
                            On click: toggle view of shop listing to be grid or list with additional functionality <br/>
                            Example: <strong>data-shop-list-toggle="grid"</strong><br/>
                            Other options:<br/>
                            <code>
                                data-target
                            </code> : target ID or Class to be toggled <br/>
                            <code>
                                data-grid
                            </code> : Numeric value of how many columns in grid view.
                        </td>
                        <td>
                            <code>any</code>
                        </td>                        
                    </tr>  
                    <tr>
                        <th>
                            <code>
                                data-page-transition
                            </code>
                        </th>
                        <td>
                            true/false. Add transition between page.
                            Example: <strong>data-page-transition="true"</strong><br/>
							Place <code>[data-rel^="translink"]</code> on <code>&lt;a&gt;</code> to add page transition functionality.<br/>
                        </td>
                        <td>
                            <code>body</code>
                        </td>                        
                    </tr>  
                    <tr>
                        <th>
                            <code>
                                data-form="validate"
                            </code>
                        </th>
                        <td>
                            Put in form tag to activate validation. <a data-rel="translink" href="features-form-validation.php">View Demo</a>
                        </td>
                        <td>
                            <code>&lt;form&gt;</code>
                        </td>                        
                    </tr>   
                    <tr>
                        <th>
                            <code>
                                data-rel="spinner"
                            </code>
                        </th>
                        <td>
                            Change input into spinner type input with minimum value of 1 with options:<br/>
                            <code>data-max</code>: maximum value
                        </td>
                        <td>
                            <code>&lt;input&gt;</code>
                        </td>                        
                    </tr> 
                    <tr>
                        <th>
                            <code>
                                data-toggle="tooltip"
                            </code>
                        </th>
                        <td>
                            Apply bootstrap tooltip
                        </td>
                        <td>
                            <code>&lt;any&gt;</code>
                        </td>                        
                    </tr>   
                    <tr>
                        <th>
                            <code>
                                data-toggle="popover"
                            </code>
                        </th>
                        <td>
                            Apply bootstrap popover
                        </td>
                        <td>
                            <code>&lt;any&gt;</code>
                        </td>                        
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-rel="prettyPhoto"
                            </code>
                        </th>
                        <td>
                            Apply prettyPhoto plugin. <br/>
                            Grouped Pretty Photo: <code>data-rel="prettyPhoto[group-name]"</code><br/>
                            Group name can be number
                        </td>
                        <td>
                            <code>&lt;a&gt;</code>
                        </td>                        
                    </tr>     
                    <tr>
                        <th>
                            <code>
                                data-rel="select"
                            </code>
                        </th>
                        <td>
                            Apply bootstrap select
                        </td>
                        <td>
                            <code>&lt;select&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-radio-accordion
                            </code>
                        </th>
                        <td>
                            Value = group name. Styling and Linking radio button with bootstrap accordion. <a data-rel="translink" href="features-form-elements.php">View Demo</a> Options: <br/>
                            <code>data-active-class</code>
                        </td>
                        <td>
                            <code>bootstrap accordion & radio button</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-gallery
                            </code>
                        </th>
                        <td>
                            Value: isotope options (<a href="http://isotope.metafizzy.co/">http://isotope.metafizzy.co/</a>) Example: <a href="gallery-masonry.php">gallery-masonry.php</a>
                        </td>
                        <td>
                            <code>any element</code> (<a href="gallery-masonry.php">look example</a>)
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-filter-bind
                            </code>
                        </th>
                        <td>
                            Bind this element to be a filter of isotope gallery, such as<code>[data-gallery]</code>. Value: ID or class or [data-gallery] that use isotope gallery.
                        </td>
                        <td>
                            <code>any element</code> (<a href="gallery-masonry.php">look example</a>)
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-add-gallery-list
                            </code>
                        </th>
                        <td>
                            To load more gallery using ajax. <strong>Value</strong>: json file url. Options: <code>data-add-quantity</code>: how many items per load.
                        </td>
                        <td>
                            <code>&lt;button&gt;</code> (<a href="gallery-ajax.php">look example</a>)
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-share="facebook"
                            </code>
                        </th>
                        <td>
                            Share page to facebook
                        </td>
                        <td>
                            <code>&lt;button&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-share="twitter"
                            </code>
                        </th>
                        <td>
                            Share page to twitter
                        </td>
                        <td>
                            <code>&lt;button&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-share="pinterest"
                            </code>
                        </th>
                        <td>
                            Share page to pinterest
                        </td>
                        <td>
                            <code>&lt;button&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-share="googleplus"
                            </code>
                        </th>
                        <td>
                            Share page to googleplus
                        </td>
                        <td>
                            <code>&lt;button&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-share="linkedin"
                            </code>
                        </th>
                        <td>
                            Share page to linkedin
                        </td>
                        <td>
                            <code>&lt;button&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-countdown
                            </code>
                        </th>
                        <td>
                            Add countdown functionality to element. <strong>Value</strong>: end of date. <strong>Options</strong>: data-format: date-format.(<a href="http://www.w3schools.com/js/js_date_formats.asp">http://www.w3schools.com/js/js_date_formats.asp</a>)
                        </td>
                        <td>
                            <code>&lt;button&gt;</code> Example: <a href="index-speciality-coming-soon.php">Coming Soon</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-twitter
                            </code>
                        </th>
                        <td>
                            Bind Twitter List to element. Look detail: <a href="features-widgets-twitter-widget.php">features-widgets-twitter-widget.php</a>
                        </td>
                        <td>
                            <code>&lt;any element&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-flickr
                            </code>
                        </th>
                        <td>
                            Bind Flickr List to element. Look detail: <a href="features-widgets-flickr-widget.php">features-widgets-flickr-widget.php</a>
                        </td>
                        <td>
                            <code>&lt;any element&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-gmap
                            </code>
                        </th>
                        <td>
                            Bind Google map to element. Look detail: <a href="features-widgets-map-widget.php">features-widgets-map-widget.php</a>
                        </td>
                        <td>
                            <code>&lt;any element&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-ventro-slider
                            </code>
                        </th>
                        <td>
                            Bind Ventro Slider to element. <strong>Value</strong>: ventro slider options. Look detail: <a href="index-multipage-corporate.php">index-multipage-corporate.php</a>
                        </td>
                        <td>
                            <code>&lt;any element&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-list-slider
                            </code>
                        </th>
                        <td>
                            Bind Master Slider List View to element. Look detail: <a href="gallery-list-slider.php">gallery-list-slider.php</a>
                        </td>
                        <td>
                            <code>&lt;any element&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-staff-slider
                            </code>
                        </th>
                        <td>
                            Bind Master Slider Staff View to element. Look detail: <a href="index-multipage-corporate.php">index-multipage-corporate.php</a>
                        </td>
                        <td>
                            <code>&lt;any element&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <code>
                                data-carousel-widget
                            </code>
                        </th>
                        <td>
                            Bind Slick Slider to element. Look detail: <a href="features-widgets-carousel-widget.php">features-widgets-carousel-widget.php</a>
                        </td>
                        <td>
                            <code>&lt;any element&gt;</code>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
    <!-- container -->
</section>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>