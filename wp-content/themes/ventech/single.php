<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


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
                            <a href="pages-blogs-small.php">
                                Blogs
                            </a>
                        </li>
                        <li class="active">
                            Small Thumbs
                        </li>
                    </ul>
                    <h1 class="title-text">
                        Small Thumbs Blog List
                    </h1>
                </div>
            </div>
        </div>
        <div class="full-size bg-black-10"> <!-- change cover with any bg class -->
        </div>
    </div>
</section>

            <section class="main-content pd-submenu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 mgb-xs-40 mgb-md-0">

                                <?php
                                    if ( have_posts() ) :


                                        /* Start the Loop */
                                        while ( have_posts() ) :

                                            the_post();
                                ?>
                <?php
                    if ( has_post_thumbnail() ) :
                ?>
                <div class="blog-image pdb-20">
                    <div class="menu-i">
                        <!-- masterslider -->
                        <div class="master-slider ms-skin-light-thin" data-list-slider="parallaxMask" data-arrow="false" data-autoplay="true">
                            <div class="ms-slide">
                                <?php the_post_thumbnail( 'full', array('class' => 'anim-img') ); ?>
                                <a data-rel="prettyPhoto[carousel-post]" href="<?php the_post_thumbnail_url('full'); ?>">
                                </a>
                            </div>
                        </div>
                        <!-- end of masterslider -->
                    </div>
                </div>
                <?php
                    endif;
                ?>
                <section class="blog-content">
                    <h2 class="blog-title">
                        <?php the_title() ?>
                    </h2>
                    <div class="blog-subtitle">
                        <div class="blog-teaser-tags">
                            <span class="blog-teaser-tag">
                                <i class="lnr lnr-user mgr-5">
                                </i>
                                <?php the_author_link(); ?>
                            </span>
                            <span class="blog-teaser-tag">
                                <i class="lnr lnr-tag mgr-5">
                                </i>
                                <?php the_category(', ') ?>
                            </span>
                            <span class="blog-teaser-tag">
                                <i class="lnr lnr-clock mgr-5">
                                </i>
                                <span>
                                    <?php echo get_the_date() ?>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="blog-body">
                        <?php the_content(); 
                            wp_link_pages(array (
                                'before'            => '<div class="more-pages-link mgt-20"><span class="page-link-text">' . __( 'More pages: ' ) . '</span>',
                                'after'             => '</div>',
                                'next_or_number'    => 'number',
                                'separator'         => ' ',
                            ));
                        ?>
                    </div>
                    <div class="blog-tags">
                        
                        <?php the_tags( '', '', '' ); ?>

                    </div>



                </section>

                                <?php

                                        endwhile;
                                    else:

                                    endif;
                                
                                ?>

                    <div class="blog-share">

                        <span class="mgr-10">
                            SHARE:
                        </span>
                        <button class="btn btn-facebook btn-circle btn-sm" data-share="facebook">
                            <i class="fa fa-facebook">
                            </i>
                        </button>
                        <button class="btn btn-twitter btn-circle btn-sm" data-share="twitter">
                            <i class="fa fa-twitter">
                            </i>
                        </button>
                        <button class="btn btn-googleplus btn-circle btn-sm" data-share="pinterest">
                            <i class="fa fa-pinterest-p">
                            </i>
                        </button>

                    </div>

                    <div class="blog-prevnext mgt-50">
                        <div class="pull-right">
                            <?php previous_post_link('%link') ?>
                            <?php next_post_link('%link') ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <hr class="mgt-50 mgb-50"/>
            

                    <!-- comments -->
                    <?php
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                        
                    ?>

                        </div>

                        <div class="col-lg-3 col-md-4">
                            <?php get_sidebar(); ?>
                        </div>

                    </div>
                </div>

            </section>
            <!-- .main-content -->

<?php get_footer() ?>
