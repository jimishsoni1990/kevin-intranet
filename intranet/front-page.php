<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

   ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php get_template_part( 'template-parts/content/content-page-header' ); ?>

        <div class="entry-content">
            <?php
                if( have_rows('builder') ):

                    acf_builder();
                    
                endif;
            ?>
        </div><!-- .entry-content -->

        <?php get_template_part( 'template-parts/content/content-page-footer' ); ?>

    </article><!-- #post-<?php the_ID(); ?> -->


    <!-- Statistics 
    <div class="row mb-3 gy-6">
        <div class="col-12">
            <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
                <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3">
                    <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-books text-primary-500"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 me-2">32</h2><span class="fs-1 fw-semi-bold text-900">Flash Report</span>
                            </div>
                            <p class="text-800 fs--1 mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3">
                    <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-users-alt text-success-500"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 me-2">94</h2><span class="fs-1 fw-semi-bold text-900">Daily Communication</span>
                            </div>
                            <p class="text-800 fs--1 mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3">
                    <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-invoice text-warning-500"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 me-2">23</h2><span class="fs-1 fw-semi-bold text-900">Daily Sales Report</span>
                            </div>
                            <p class="text-800 fs--1 mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3">
                    <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-500"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 me-2">3</h2><span class="fs-1 fw-semi-bold text-900">Insider Card</span>
                            </div>
                            <p class="text-800 fs--1 mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
				<div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3">
                    <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-500"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 me-2">3</h2><span class="fs-1 fw-semi-bold text-900">Champions</span>
                            </div>
                            <p class="text-800 fs--1 mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
				<div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3">
                    <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-500"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 me-2">3</h2><span class="fs-1 fw-semi-bold text-900">Planning Calendar</span>
                            </div>
                            <p class="text-800 fs--1 mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Statistics End -->

<?php
    }
} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

get_footer();