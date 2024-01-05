<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(1);
define( 'PHOENIX_ASSETS', get_stylesheet_directory_uri().'/assets/phoenix' );
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/plugins/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/plugins/acf/' );

function intranet_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/inc/plugins/acf-json/';
    return $path;
}
add_filter( 'acf/settings/save_json', 'intranet_acf_json_save_point' );

function my_acf_json_load_point( $paths ) {
    $paths[] = get_stylesheet_directory() . '/inc/plugins/acf-json';
    return $paths;
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );

function check_required_plugins() {
    $missing_plugins = array();

    // Check if the Menu Icons by ThemeIsle plugin is active
    if (!is_plugin_active('menu-icons/menu-icons.php')) {
        $missing_plugins[] = 'Menu Icons by ThemeIsle';
    }

    // Check if the Font Awesome plugin is active
    if (!is_plugin_active('advanced-custom-fields-font-awesome/acf-font-awesome.php')) {
        $missing_plugins[] = 'Advanced Custom Fields: Font Awesome';
    }

    // Display a notice if any required plugin is missing
    if (!empty($missing_plugins)) {
        ?>
        <div class="notice notice-error is-dismissible">
            <p><?php printf(__('Hey there! Your theme requires the following plugins to work properly: %s. Please install and activate them.', 'intranet'), implode(', ', $missing_plugins)); ?></p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'check_required_plugins');

/**
 * Functions and definitions
 *
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */

if ( ! function_exists( 'intranet_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Intranet 1.0
	 *
	 * @return void
	 */
	function intranet_setup() {

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'dashboard' => esc_html__( 'Dashboard menu', 'intranet' ),
				'footer'  => esc_html__( 'Secondary menu', 'intranet' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'intranet' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'intranet' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'intranet' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'intranet' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'intranet' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'intranet' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'intranet' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'intranet' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'intranet' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'intranet' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'intranet' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'intranet' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'intranet' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'intranet' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'f5f7fa',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'intranet' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'intranet' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'intranet' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'intranet' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'intranet' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'intranet' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'intranet' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'intranet' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'intranet' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'intranet' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'intranet' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'intranet' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'intranet' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'intranet' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'intranet' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'intranet' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'intranet' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'intranet' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		remove_theme_support( 'widgets-block-editor' );

	}
}
add_action( 'after_setup_theme', 'intranet_setup' );

/**
 * Register widget area.
 *
 * @since Intranet 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function intranet_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer - Left', 'intranet' ),
			'id'            => 'footer-left',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'intranet' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer - Right', 'intranet' ),
			'id'            => 'footer-right',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'intranet' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'intranet_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since Intranet 1.0
 *
 * @return void
 */
function intranet_scripts() {

	// remove any block library
	wp_dequeue_style( 'wp-block-library' );
 	wp_dequeue_style( 'wp-block-library-theme' );

	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

	// RTL styles.
	wp_style_add_data( 'twenty-twenty-one-style', 'rtl', 'replace' );

	// Print styles.
	wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if ( has_nav_menu( 'primary' ) ) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'twenty-twenty-one-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'twenty-twenty-one-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'intranet_scripts' );


// SVG Icons class.
//require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
//require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
//new intranet_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// ACF builder
require get_template_directory() . '/inc/acf-builder.php';

// Phoenix 
//require get_template_directory() . '/inc/phoenix-functions.php';

// Customizer additions.
//require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
//new intranet_Customize();

// Block Patterns.
//require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
//require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
//require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
//new intranet_Dark_Mode();

require get_template_directory() . '/inc/theme-update-checker.php';
$update_checker = new ThemeUpdateChecker(
    'intranet',
    'https://raw.githubusercontent.com/jimishsoni1990/kevin-intranet/main/version-info.json'
);

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', '__return_false');

// Customize the URL setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
	return MY_ACF_URL;
}

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Intranet 1.0
 *
 * @return void
 */
function intranet_customize_preview_init() {
	wp_enqueue_script(
		'intranet-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'intranet-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'intranet-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'intranet_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since Intranet 1.0
 *
 * @return void
 */
function intranet_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'intranet-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'intranet_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since Intranet 1.0
 *
 * @return void
 */
function intranet_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Intranet 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'intranet_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Intranet 1.0
 *
 * @return void
 */
function intranet_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'intranet_add_ie_class' );

/**
 * 	Js Require by the theme to work
 *
 * @since Intranet 1.0
 *
 * @return void
 */
add_action( 'wp_footer', 'intranet_phoenix_require_js', 99 );
function intranet_phoenix_require_js(){
	?>
		<script>
	        var navbarTopShape = window.config.config.phoenixNavbarTopShape;
	        var navbarPosition = window.config.config.phoenixNavbarPosition;
	        var body = document.querySelector("body");
	        var navbarDefault = document.querySelector("#navbarDefault");
	        var documentElement = document.documentElement;
	        var navbarVertical = document.querySelector(".navbar-vertical");

	        if (navbarPosition === "dual-nav") {
	            navbarVertical.remove();
	            navbarDefault.remove();
	            documentElement.classList.add("dual-nav");
	        } else if (navbarTopShape === "slim" && navbarPosition === "vertical") {
	            navbarDefault.remove();
	            navbarVertical.style.display = "inline-block";
	            body.classList.add("nav-slim");
	        } else if (navbarTopShape === "slim" && navbarPosition === "horizontal") {
	            navbarDefault.remove();
	            navbarVertical.remove();
	            body.classList.add("nav-slim");
	        } else if (navbarTopShape === "slim" && navbarPosition === "combo") {
	            navbarDefault.remove();
	            navbarVertical.removeAttribute("style");
	            body.classList.add("nav-slim");
	        } else if (navbarTopShape === "default" && navbarPosition === "horizontal") {
	            navbarDefault.remove();
	            navbarVertical.remove();
	            documentElement.classList.add("navbar-horizontal");
	        } else if (navbarTopShape === "default" && navbarPosition === "combo") {
	            navbarDefault.remove();
	            navbarVertical.removeAttribute("style");
	            documentElement.classList.add("navbar-combo");
	        } else {
	            navbarDefault.removeAttribute("style");
	            navbarVertical.removeAttribute("style");
	        }

	        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
	        var navbarTop = document.querySelector(".navbar-top");
	        if (navbarTopStyle === "darker") {
	            navbarTop.classList.add("navbar-darker");
	        }

	        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
	        var navbarVertical = document.querySelector(".navbar-vertical");
	        if (navbarVerticalStyle === "darker") {
	            navbarVertical.classList.add("navbar-darker");
	        }
	    </script>
	<?php
}