<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Miklas
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">
		<div class="row">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<div class="row">
			<div class="site-info ">
				<div class="copyright-text">
					Joe Miklas &copy; <?php echo(date('Y', mktime())); ?> | Design By <a href="http://www.cpsharp.net">CP Sharp</a>
				</div>
			</div><!-- .site-info -->
			<div class="col-sm-6 text-right">
				<?php shapely_social_icons(); ?>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php
wp_footer();
?>

</body>
</html>