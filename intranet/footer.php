<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */

?>

<footer class="footer position-absolute" id="site-footer">
	<?php // get_template_part( 'template-parts/footer/footer-widgets' ); ?>
	<div class="row g-0 justify-content-between align-items-center h-100">
		<div class="col-12 col-sm-auto text-center">
			<p class="mb-0 mt-2 mt-sm-0 text-900">
				&copy; Copyrights <?php echo date('Y'); ?>, All rights reserved.
			</p>
		</div>
		<div class="col-12 col-sm-auto text-center">
			<p class="mb-0 text-600">v<?php echo wp_get_theme()->get( 'Version' ); ?></p>
		</div>
	</div>
</footer>

	</div><!-- #primary -->
</div><!-- .content -->

</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/popper/popper.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/anchorjs/anchor.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/is/is.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/fontawesome/all.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/lodash/lodash.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/list.js/list.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/feather-icons/feather.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/dayjs/dayjs.min.js"></script>
<script src="<?php echo PHOENIX_ASSETS; ?>/js/phoenix.js"></script>

<?php wp_footer(); ?>
</body>
</html>