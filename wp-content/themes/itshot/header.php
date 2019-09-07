<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T62MNBZ');</script>
<!-- End Google Tag Manager -->

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T62MNBZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="header wrapper">
	<div class="header-top wrapper">
		<div class="container_24 mfwidth">
			<div class="grid_12">
            Wed
<?php

echo date("M   d,   Y") . "\n";

?>  14:08:23
 </div>
			<div class="grid_12">
			<ul class="search"> <?php echo do_shortcode('[widget id="search-2"]'); ?>  </ul>
				<ul class="social_icon">
					<li> <i> <a href="https://www.facebook.com/ItsHot" target="_blank"> &#xf09a; </a> </i> </li>
					<li> <i> <a href="https://twitter.com/itshotdotcom" target="_blank"> &#xf099; </a> </i> </li>
					<li> <i> <a href=" https://pinterest.com/itshotdotcom" target="_blank"> &#xf231;</a> </i> </li>
					<li> <i> <a href="https://instagram.com/itshotjewelry/" target="_blank"> &#xf16d; </a> </i> </li>
</ul>
			</div>
			 </div>
		 </div>
	<div class="header-middle wrapper">
		<div class="container_24 mfwidth">
			<div class="grid_7"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logo.png" alt="itshot.com"> </a> </div>
			<div class="grid_17">
				<div class="top-banner">
					 <div class="grid_18"> Check out all of our <abbr> Diamond Jewelry </abbr> including
Featured Products and Closeout Specials. </div>
 <div class="grid_6"> <a href="https://www.itshot.com/" target="_blank"> Click Here </a> </div>

				 </div>
			</div>

		</div>

	</div>

	<!-- <div class="header-nav wrapper">
		<div class="container_24">
			<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'nav-menu' ) ); ?>

		</div>
		 </div> -->
 </header>