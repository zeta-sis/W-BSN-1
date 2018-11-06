<?php get_header(); ?>
<div class="breadcrumbs mod_breadcrumb" typeof="BreadcrumbList" vocab="http://schema.org/">
	<div class="container breadcrumb_row">
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('
		<p id="breadcrumbs">','</p>
		');
		}
	?>
	</div> 
</div>
<section class="container content">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_title( '<h1>', '</h1>' ); ?>
	    <?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
</section>
<?php get_footer(); ?>