<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Zeta
 */
?>

<?php if ( is_active_sidebar( 'right_side_bar' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'right_side_bar' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
