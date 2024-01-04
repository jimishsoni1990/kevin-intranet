<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */

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
