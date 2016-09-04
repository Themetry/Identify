<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Identify
 */

?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<span class="copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></span>
			<span class="sep"> &middot; </span>
			<span class="credit"><?php printf( esc_html__( 'Theme: %1$s', 'identify' ), '<a href="https://themetry.com/identify/">Identify</a>' ); ?></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
