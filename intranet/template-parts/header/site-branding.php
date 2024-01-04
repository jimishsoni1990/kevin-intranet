<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<div class="navbar-logo">
    <button
        class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarVerticalCollapse"
        aria-controls="navbarVerticalCollapse"
        aria-expanded="false"
        aria-label="Toggle Navigation"
        >
        <span class="navbar-toggle-icon"><span class="toggle-line"></span></span>
    </button>
    <a class="navbar-brand me-0" href="<?php echo get_site_url(); ?>">
    <div class="d-flex align-items-center">
        <div class="d-flex align-items-center">
            <?php
	            if( has_custom_logo() ){
	                $logo_image_url = $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' );
	                echo "<img src='$logo_image_url[0]' alt='$blog_info' height='40' />"; } else { echo '<img src="'.PHOENIX_ASSETS.'/img/icons/logo.png" alt="'.$blog_info.'" width="30" />'; echo '
	                <p class="logo-text ms-2 d-none d-sm-block">'.$blog_info.'</p>'; 
	            }
              ?>
            </div>
        </div>
    </a>
</div>