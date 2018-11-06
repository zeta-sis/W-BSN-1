<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php the_title(); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Zetasis" />
<?php if (has_post_thumbnail()) : ?>
<meta property="og:image" content="<?= get_the_post_thumbnail_url(null, 'medium', ''); ?>" />
<?php else : ?>
<meta property="og:image" content="<?= DIR; ?>/assets/img/site.png" />
<?php endif; ?>
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Poppins:500" rel="stylesheet">  
</head>
<body <?php body_class(); ?>>
<div id="pagev">
<?php get_template_part( 'parts/mobinav', 'top' ); ?>
<header class="container header-container no-padding">
    <div class="row no-margin">
        <div class="col-xl-3  col-lg-4 col-md-5 col-sm-6 col-8 header-logo">
            <?php get_template_part( 'parts/header-logo', 'top' ); ?>
        </div>
        <div class="col-lg-9 d-none d-xl-block">
            <div class="row">
                <div class="col-md-12 contact-line">
                    <?php get_template_part( 'parts/contact-line', 'top' ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </div>
                <div class="col-md-4 text-align-right social-line">
                    <?php get_template_part( 'parts/social-line', 'top' ); ?>
                </div>                
            </div>
        </div>
        <div class="text-align-right col-xl-3 col-lg-8 col-md-7 col-sm-6 col-4 d-xl-none">
        	<a href="#menu" class="mobi-nav"><i class="fas fa-bars"></i></a>
    	</div>
    </div>
</header>