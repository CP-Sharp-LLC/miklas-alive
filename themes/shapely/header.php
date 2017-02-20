<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="row">
            <div class="module left site-title-container">
		        <?php shapely_get_header_logo(); ?>
            </div>
        </div>
        <div id="" class="" style="background: rgb(0, 0, 0); border-width: 0px 0px 1px; border-style: solid; border-color: rgb(30,30,30);"></div>        
        <div class="nav-container">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="container nav-bar">
                    <div class="row">
                        <div class="module center container">
                            <?php shapely_header_menu(); // main navigation ?>
                        </div>
                    </div>
                </div>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->

	<div id="content" class="main-container">
		<?php if ( ! is_page_template( 'page-templates/template-home.php' ) ): ?>
			<div class="header-callout">
				<?php shapely_top_callout(); ?>
			</div>
		<?php endif; ?>

		<section class="content-area <?php echo ( get_theme_mod( 'top_callout', true ) ) ? '' : ' pt0 ' ?>">
			<div id="main" class="<?php echo ( ! is_page_template( 'page-templates/template-home.php' ) ) ? 'container' : ''; ?>"
			     role="main">