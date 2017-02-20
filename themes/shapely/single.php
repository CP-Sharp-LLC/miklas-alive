<?php
/**
 * The template for displaying all single posts.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shapely
 */
$ajaxLoaded = htmlspecialchars($_GET["ajaxloaded"]) == 'true';
$layout_class = shapely_get_layout_class();

if( !$ajaxLoaded )
{
	get_header();
} ?>
	<div class="row">
		<?php
		if ( $layout_class == 'sidebar-left' ):
			get_sidebar();
		endif;
		?>
		<div id="primary"><?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content' );

			endwhile; // End of the loop. ?>
		</div><!-- #primary -->
	</div>
<?php

if( !$ajaxLoaded) {
	get_footer();
}

