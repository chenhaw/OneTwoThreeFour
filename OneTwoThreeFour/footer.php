<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage OneTwoThreeFour
 * @since OneTwoThreeFour 0.1
 */
?>

<div id="footer" class="grid_24">
	<p>Copyright &copy; <?php echo date('Y'); ?>, <?php bloginfo('site-title'); ?></p>
</div>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>
</html>