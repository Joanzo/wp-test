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
                        <div class="col-md-8 mgb-xs-40 mgb-md-0">
                            <div class="content-list list-lg list-break-xs  wrap-top">
                                <?php
                                    if ( have_posts() ) :


                                        /* Start the Loop */
                                        while ( have_posts() ) :

                                            the_post();
                                ?>
                                    <article class="list-item">
                                        <?php
                                            if ( has_post_thumbnail() ) :
                                        ?>
                                        <div class="menu-item menu-icon">
                                            <div class="anim menu-i">
                                                <a data-rel="prettyPhoto" href="<?php the_post_thumbnail_url('full'); ?>" class="anim-link">
                                                    <?php the_post_thumbnail( 'medium', array('class' => 'anim-img') ); ?>
                                                    <div class="anim-cover">
                                                        <div class="anim-box">
                                                            <div class="anim-border">
                                                                <div class="anim-info">
                                                                    <i class="plus-icon">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                            endif;
                                        ?>

                                        <div class="menu-item menu-text">
                                            <ul class="content-list list-md list-news">
                                                <li class="list-item pd-0">
                                                    <time class="menu-item menu-icon" datetime="<?php echo get_the_date() ?>">
                                                        <span class="date pdt-0">
                                                            <?php echo get_the_date('d') ?>
                                                        </span>
                                                        <span class="month">
                                                            <?php echo __(get_the_date('M')) ?>
                                                        </span>
                                                    </time>
                                                    <div class="menu-item menu-text">
                                                        <h4 class="blog-teaser-title">
                                                            <a href="<?php the_permalink() ?>" class="link-body">
                                                                <?php the_title() ?>
                                                            </a>
                                                        </h4>
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
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="blog-teaser-description">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <div class="blog-teaser-more">
                                                <a class="btn btn-xs btn-primary btn-circle btn-line" href="<?php the_permalink() ?>" data-toggle="tooltip" data-original-title="Read More">
                                                    <i class="lnr lnr-arrow-right">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                <?php

                                        endwhile;
                                    else:

                                    endif;
                                
                                ?>
                        </div>


                <ul class="pagination mgt-50">
                    <li>
                        <?php previous_posts_link('«'); ?>
                        <!--
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                
                            </span>
                        </a>
                        -->
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
                        <?php next_posts_link('»'); ?>
                        <!--
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">
                                »
                            </span>
                        </a>
                        -->
                    </li>
                </ul>


                        </div>

                        <div class="col-md-4">
                            <?php get_sidebar(); ?>
                        </div>

                    </div>
                </div>

            </section>
            <!-- .main-content -->

<?php get_footer() ?>
