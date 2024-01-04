<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage intranet
 * @since Intranet 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php intranet_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="theme-color" content="#ffffff" />

	<!-- ===============================================-->
	<!--    Google Fonts -->
	<!-- ===============================================-->
	<link rel="preconnect" href="https://fonts.googleapis.com/" />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet" />

	<?php wp_head(); ?>

	<!-- ===============================================-->
	<!--    scripts -->
	<!-- ===============================================-->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/simplebar/simplebar.min.js"></script>
	<script src="<?php echo PHOENIX_ASSETS; ?>/js/config.js"></script>

	<!-- ===============================================-->
	<!--    Stylesheets -->
	<!-- ===============================================-->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/vendors/simplebar/simplebar.min.css" rel="stylesheet" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/vendors/choices/choices.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendors/dhtmlx-gantt/dhtmlxgantt.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
	<link href="<?php echo PHOENIX_ASSETS; ?>/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
	<link href="<?php echo PHOENIX_ASSETS; ?>/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default" />
	<link href="<?php echo PHOENIX_ASSETS; ?>/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
	<link href="<?php echo PHOENIX_ASSETS; ?>/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default" />
	<script>
		var phoenixIsRTL = window.config.config.phoenixIsRTL;
		if (phoenixIsRTL) {
			var linkDefault = document.getElementById("style-default");
			var userLinkDefault = document.getElementById("user-style-default");
			linkDefault.setAttribute("disabled", true);
			userLinkDefault.setAttribute("disabled", true);
			document.querySelector("html").setAttribute("dir", "rtl");
		} else {
			var linkRTL = document.getElementById("style-rtl");
			var userLinkRTL = document.getElementById("user-style-rtl");
			linkRTL.setAttribute("disabled", true);
			userLinkRTL.setAttribute("disabled", true);
		}
	</script>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<main class="main" id="top">

		<?php get_template_part( 'template-parts/header/site-header' ); ?>

		<div class="content">
			<div id="primary" class="content-area">