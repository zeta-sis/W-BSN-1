<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<div class="container">
<div class="row no-margin no-padding">
	<div class="col-md-8 no-padding">
	    <!-- Banner Slider End --> 
	        <?php if ( is_front_page() ) { main_banner_home(); } ?>
	    <!-- Banner Slider End -->        
	</div>
	<div class="col-md-4">.col-md-4</div>
</div>
</div>

<?php get_footer();?>






