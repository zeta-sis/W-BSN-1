<?php if(get_option('z_address')){ ?>
	<i class="fas fa-map-marker-alt"></i> &nbsp;<?php echo get_option('z_address'); ?>
<?php } else { ?>
<?php } ?>
 &nbsp; 
<?php if(get_option('z_phone')){ ?>
	<i class="fas fa-phone"></i> &nbsp;<?php echo get_option('z_phone'); ?>
<?php } else { ?>
<?php } ?>
 &nbsp; 
<?php if(get_option('z_fax')){ ?>
	<i class="fas fa-fax"></i> &nbsp;<?php echo get_option('z_fax'); ?>
<?php } else { ?>
<?php } ?>
 &nbsp; 
<?php if(get_option('z_email')){ ?>
	<i class="fas fa-envelope"></i> &nbsp;<a href="mailto:<?php echo get_option('z_email'); ?>?Subject=Contact" title="E-mail" target="_blank">
	<?php echo get_option('z_email'); ?>
</a>   
<?php } else { ?>
<?php } ?>