<?php
/*Zetasis Them Settings **/

define("DIR", get_template_directory_uri());
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/translate.php';


/* Image Qıality */
add_filter('jpeg_quality', function($arg){return 100;});


/* Register our sidebars and widgetized areas. */
function right_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Right Sidebar', 'your-theme-domain' ),
            'id' => 'right_sidebar',
            'description' => __( 'Right Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'right_sidebar' );

// REMOVE UNWANTED STYLES, JAVASCRITS 
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_action( 'wp_print_styles',     'my_deregister_styles', 100 );
function my_deregister_styles()    { 
//wp_deregister_style( 'amethyst-dashicons-style' ); 
wp_deregister_style( 'dashicons' ); 
}


// ADDING CSS
function theme_styles() {
  wp_enqueue_style('reboot_css', get_template_directory_uri() . '/assest/css/reboot.css' );     
  wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
  wp_enqueue_style( 'slick_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'app_css', get_template_directory_uri() . '/assest/css/app.css' );
  wp_enqueue_style('m_drawer', get_template_directory_uri() . '/assest/css/media_queries.css' );  
  wp_register_style( 
    'fontawesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css');
  wp_enqueue_style( 'fontawesome'); 
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );
  
  wp_enqueue_style('zeta-mmenu-css', get_template_directory_uri() . '/assest/css/jquery.mmenu.css' );  
  
}
add_action( 'wp_enqueue_scripts', 'theme_styles');

// ADDING JS
function theme_js() {
  global $wp_scripts;
  wp_enqueue_script( 'my_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
  wp_enqueue_script( 'my_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'); 
  wp_enqueue_script( 'my_custom_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
  wp_enqueue_script( 'my_custom_slick_slide', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js');  
  wp_enqueue_script( 'zeta-lib', get_template_directory_uri() . '/assest/js/zeta-lib.js' );
  wp_enqueue_script( 'zeta-mmenu', get_template_directory_uri() . '/assest/js/jquery.mmenu.js' );
}
add_action( 'wp_enqueue_scripts', 'theme_js');






// SUBLANGUAGE TAGLINE TRANSLATE
function custom_read_more($original_text, $current_language, $sublanguage, $optional_arg) {
  if ($current_language->post_content == 'en_EN') {
    return 'READ MORE';
  } else if ($current_language->post_content == 'tr_TR') {
    return 'DETAYLI İNCELE';
  }
  return $original_text;
}

// SITE TAGLINE
add_filter('sublanguage_register_postmeta_key', 'my_translate_postmeta');

  function my_translate_postmeta($postmeta_keys) {

    $postmeta_keys[] = '_my_postmeta_key';
  
    return $postmeta_keys;
  }




// REMOVE ADMIN LOGIN HEADER
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


// EXCERPTS
// Adding Excerpts to Pages
add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

//* Add new featured image sizes
add_image_size( 'square-entry-image', 400, 400, TRUE );
add_image_size( 'vertical-entry-image', 400, 600, TRUE );
add_image_size( 'horizontal-entry-image', 600, 400, TRUE );
add_image_size( 'blog-entry-image', 820, 500, TRUE );
add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
add_image_size( 'singlepost-thumb', 590, 9999 ); // Unlimited Height Mode
/**
* Removes width and height attributes from image tags
*
* @param string $html
*
* @return string
*/
function remove_image_size_attributes( $html ) {
return preg_replace( '/(width|height)="\d*"/', '', $html );
}

// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );

// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );


// Multiple Featured Images
add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-image-2',
    'desc' => 'Featured Image 2',
    'label_name' => 'Featured Image 2',
    'label_set' => 'Set featured image 2',
    'label_remove' => 'Remove featured image 2',
    'label_use' => 'Set featured image 2',
    'post_type' => array( 'page' ),
  );
  $featured_images[] = $args;
  return $featured_images;
});
function remove_kdmfi_featured_images( $html ) {
return preg_replace( '/(width|height)="\d*"/', '', $html );
}



// Image qualty 100
function my_custom_jpeg_quality() {
    return 100;
}
add_filter( 'jpeg_quality', 'my_custom_jpeg_quality' );



add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
} );



