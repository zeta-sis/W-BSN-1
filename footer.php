<footer class="container footer-container no-padding">
	<div class="row no-margin">
		<div class="col-lg-9">
			<?php get_template_part( 'parts/contact-line', 'top' ); ?>
		</div>
		<div class="col-lg-3 social-line text-align-right">
			<?php get_template_part( 'parts/social-line', 'top' ); ?>
			 &nbsp; &nbsp; &nbsp;
			<a href="https://www.zetasis.com/web-tasarimi" target="_blank" title="<?php echo apply_filters('sublanguage_custom_translate', 'Web Design', 'langu_zetasis', 'optional value');?>">
			<img src="<?php echo get_template_directory_uri();?>/assest/images/zetasis.png" class="zeta" alt="<?php echo apply_filters('sublanguage_custom_translate', 'Web Design', 'langu_zetasis', 'optional value');?>">
			</a>					
		</div>			
	</div>
<div class="row no-margin">
		<div class="col-lg-12">
			<?php if(get_option('z_copyright')){ ?>
				<i class="far fa-copyright"></i> <?php echo get_option('z_copyright'); ?>
			<?php } else { ?>
			<?php } ?>
		</div>
	</div>	
</footer>
</div>
</body>
</html>