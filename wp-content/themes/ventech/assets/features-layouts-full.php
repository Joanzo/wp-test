<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Full Layout - Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Bootstrap theme, Technology Web Theme, Modern HTML Template, Ventech, Masonry'; ?>
<?php $description = 'Full Layout for Multipurpose Modern Minimal Responsive HTML 5 Templates'; ?>
<?php $active_menu        = 'menu-features';   // To set active on the same id of primary menu ?>
<?php
// Specific Configuration for Page
$bottom_extra_class = 'full-layout';

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
                            <a href="features-layouts-boxed.php">
                                Layouts
                            </a>
                        </li>
                        
                        <li class="active">
                            Full
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Full Layout
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

          <h2 class="section-title">Setting Up Layout</h2>
          <p>By default every bootstrap <code>.container</code> is boxed layout. To make it full layout you just need to add <code>.full-layout</code> on the parent element of <code>.container</code>.</p>
          <p>This apply to <code>&lt;header&gt;</code> and <code>&lt;footer&gt;</code> also</p>
          
          <pre class="prettyprint theme-vt-light">/* BELOW EXAMPLE FOR SECTION FULL LAYOUT */

&lt;section class=&quot;full-layout&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;h2 class=&quot;font-bold&quot;&gt;HELLO THIS IS FULL LAYOUT&lt;/h2&gt;
    &lt;/div&gt;
&lt;/section&gt;

</pre>


    </div>
    <!-- container -->
    <hr/>
    <section class="full-layout">
    <div class="container">
        <h2 class="font-bold">HELLO THIS IS FULL LAYOUT</h2>
        <p>
In lacinia lectus vitae magna elementum accumsan. Aenean ultrices eget dui quis aliquam. Duis quis lorem et orci vehicula pellentesque ut consequat mauris. Donec ultrices malesuada gravida. Praesent at aliquet odio. Nullam nec sapien ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pretium nisl id lectus laoreet ultricies. Integer hendrerit mauris sed orci maximus, ac malesuada turpis consequat. Donec elementum quis dolor in efficitur. Sed vel ullamcorper lectus. Praesent ut erat nec quam hendrerit malesuada ut eget est. Sed molestie tellus nec sapien varius egestas. Nullam ut enim vitae mi faucibus maximus vel vel erat. Nulla vehicula luctus nibh, sit amet ornare est pretium ac.
</p>
<p>
Vestibulum fermentum neque quis eros luctus bibendum. Aliquam erat volutpat. Etiam iaculis et ante eu consequat. Morbi consequat sem vel commodo vestibulum. Sed ac est pharetra, luctus turpis vitae, interdum leo. Curabitur massa est, posuere ac tempor in, elementum quis mi. Duis quam leo, egestas id nibh eget, aliquam porttitor magna. Sed id sapien lacus. Pellentesque quis elit mauris. Nulla posuere leo a magna ultricies, a iaculis dolor venenatis. Maecenas eget neque id libero dictum ultrices. Aliquam erat volutpat. Donec tincidunt fringilla sapien, eu gravida lectus cursus at.
</p>
    </div>        
    </section>
    <hr/>
    <div class="container">
          <pre class="prettyprint theme-vt-light">/* FOR PHP VERSION YOU CAN JUST ADJUST FOOTER LAYOUT from $bottom_extra_class variable  */

$bottom_extra_class = 'full-layout';

</pre>    
    <p class="font-primary font-xs-5">Below is the example of full layout footer</p>
    </div>
</section>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>