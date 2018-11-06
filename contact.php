<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<?php echo do_shortcode('[gmap-embed id="157"]');?>
<section class="container content"> 
	<div class="contact-box">
	<div class="row">
		<div class="col-md-7">
			<div class="adress-box">
			<h1>Kontakt</h1>
			<address>
			<p>
				<strong>Adresse: &nbsp;</strong>	
				<?php if(get_option('z_address')){ ?>
					<?php echo get_option('z_address'); ?>
				<?php } else { ?>
				<?php } ?>
			</p>						
			</address>			

			<p>
				<strong>Telefon: &nbsp;</strong>
				<?php if(get_option('z_phone')){ ?>
					<?php echo get_option('z_phone'); ?>
				<?php } else { ?>
				<?php } ?>
			</p>
			<p>
				<strong>Fax: &nbsp;</strong>
				<?php if(get_option('z_fax')){ ?>
					<?php echo get_option('z_fax'); ?>
				<?php } else { ?>
				<?php } ?>
			<p>
			</p>
			<p>
				<strong>E-mail: &nbsp;</strong>
				<?php if(get_option('z_email')){ ?>
					<a href="mailto:<?php echo get_option('z_email'); ?>" target="_top">
						<?php echo get_option('z_email'); ?>
					</a>
				<?php } else { ?>
				<?php } ?>
			</p>
			<div class="social">
				<div class="row">
				<div class="col-1">
					<?php if(get_option('z_fb')){ ?>
						<a href="<?php echo get_option('z_fb'); ?>" title="Facebook" target="_blank">
							<i class="fab fa-facebook"></i>
						</a>
					<?php } else { ?>
					<?php } ?>
				</div>	
				<div class="col-1">
					<?php if(get_option('z_tt')){ ?>
						<a href="<?php echo get_option('z_tt'); ?>" title="Twitter" target="_blank">
							<i class="fab fa-twitter-square"></i>
						</a>   
					<?php } else { ?>
					<?php } ?>
				</div>	
				<div class="col-1">
					<?php if(get_option('z_insta')){ ?>     
						<a href="<?php echo get_option('z_insta'); ?>" title="Instagram" target="_blank">
							<i class="fab fa-instagram"></i> 
						</a>    
					<?php } else { ?>
					<?php } ?>
				</div>	
				<div class="col-1">
					<?php if(get_option('z_ytbe')){ ?>
						<a href="<?php echo get_option('z_ytbe'); ?>" title="Youtube" target="_blank">
							<i class="fab fa-youtube"></i>
						</a>
					<?php } else { ?>
					<?php } ?>
				</div>
				<div class="col-1">
					<?php if(get_option('z_gglpls')){ ?>
						<a href="<?php echo get_option('z_gglpls'); ?>" title="Google Plus" target="_blank">
							<i class="fab fa-google-plus-g"></i>
						</a>    
					<?php } else { ?>
					<?php } ?>
				</div>	
				<div class="col-1">
					<?php if(get_option('z_lnkdin')){ ?>
						<a href="<?php echo get_option('z_lnkdin'); ?>" title="Linked In" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a> 
					<?php } else { ?>
					<?php } ?>
				</div>	
				<div class="col-10"></div>
				</div>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<h1> Kontaktformular</h1>
			<p>
				Schreiben Sie uns eine E-Mail.<br>
				Wir freuen uns auf Ihre Kontaktaufnahme.
			</p>
			<div class="contact-hours"> 
				<?php echo do_shortcode('[mbhi location="Shop"]'); ?> 
				<?php echo do_shortcode('[mbhi_hours location="Shop"]'); ?> 
				<br>
			</div>	
			<?php echo do_shortcode('[wpforms id="155"]'); ?> 		
			
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
