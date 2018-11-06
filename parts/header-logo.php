<?php if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
    <a title="<?php bloginfo('name'); ?>" href="<?php echo get_home_url(); ?>" class="navbar-brand d-md-block d-lg-none x d-lg-block d-xl-none x d-xl-block">
        <img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="logo_main img-100" >
    </a>
<?php else : ?>
    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
<?php endif; ?>
<div class="fix">
    <a href="#" title="<?php bloginfo('name'); ?>">
        <img src="<?php echo get_theme_mod( 'your_theme_scroll_logo' ); ?>" alt="<?php bloginfo('name'); ?>" class="logo_scroll" >
    </a>
</div> 