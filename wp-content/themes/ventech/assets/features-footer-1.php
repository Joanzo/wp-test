<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Specific Page Data -->
<?php $title       = 'Features Footer Style 1 - Multipurpose Modern HTML 5 Templates'; ?>
<?php $keywords    = 'HTML5 Template, CSS3, Modern HTML Template, Ventech, Masonry, Font Awesome'; ?>
<?php $description = 'Features Footer Style 1 for Multipurpose Modern HTML 5 Templates'; ?>
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
                        <li class="active">
                            <a href="features-footer-1.php">
                                Footer
                            </a>
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Footer 1
                    </h1>
                    <div class="subtitle-text">
                        4 column footer
                    </div>
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

          <h2 class="section-title">Setting Up Header and Footer is Very Easy</h2>
          <p><strong>PHP Version</strong>: Just by configuring our config.php, change the value, done!.<br/>
          <strong>HTML Version</strong>: Just follow our <span class="text-danger">&lt;footer&gt;</span> structure code. <br/><br/>
          </p>
          <pre class="prettyprint theme-vt-light">/*  HEADER OR FOOTER SETTING  */

$footer = 'footer-1';

</pre>


    </div>
    <!-- container -->
</section>
<!-- .main-content -->

<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>

<!-- Specific Page Scripts Put Here -->


<!-- Specific Page Scripts END -->

<?php require_once('templates/footers/closing.tpl.php'); ?>