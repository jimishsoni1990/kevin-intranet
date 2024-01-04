<?php
/**
 * Customize API: intranet_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Intranet 1.0
 *
 * @see WP_Customize_Control
 */
class intranet_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Intranet 1.0
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since Intranet 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'intranet' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/documentation/article/twenty-twenty-one/#dark-mode-support', 'intranet' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'intranet' ); ?>
			</a></p>
		</div><!-- .notice -->
		<?php
	}
}
