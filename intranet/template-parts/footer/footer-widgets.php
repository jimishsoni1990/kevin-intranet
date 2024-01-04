<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */

if ( is_active_sidebar( 'footer-left' ) ) : ?>

	<aside class="widget-area">
		<?php dynamic_sidebar( 'footer-left' ); ?>
	</aside><!-- .widget-area -->

	<?php
endif;
