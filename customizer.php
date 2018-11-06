<?php
/* Create Logo Setting and Upload Control */
function your_theme_logo_customizer_settings($wp_customize) {
$wp_customize->add_setting('your_theme_logo');
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
array(
'label' => 'Upload Logo',
'section' => 'title_tagline',
'settings' => 'your_theme_logo',
) ) );
}
add_action('customize_register', 'your_theme_logo_customizer_settings');
/* Create Scroll Logo Setting and Upload Control */
function your_theme_scroll_logo_customizer_settings($wp_customize) {
$wp_customize->add_setting('your_theme_scroll_logo');
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_scroll_logo',
array(
'label' => 'Scroll Logo',
'section' => 'title_tagline',
'settings' => 'your_theme_scroll_logo',
) ) );
}
add_action('customize_register', 'your_theme_scroll_logo_customizer_settings');



/*===================================================================================
* Company DetailsAdd global options
* =================================================================================*/
/* Settings > Contact Info */
function add_custom_info_menu_item(){
	
	add_options_page("Contact Info", "Contact Info", "manage_options", "contact-info", "theme_settings_page");
	
}
add_action("admin_menu", "add_custom_info_menu_item");

function theme_settings_page(){ 
	?>
	<div class="wrap">
		<h1>Contact Info</h1>
		<p>This information is used around the website, so changing these here will update them across the website.</p>
		<form method="post" action="options.php">
			<?php
			settings_fields("section");
			do_settings_sections("theme-options");
			submit_button();
			?>
		</form>
	</div>

<?php } function display_z_address_element(){ ?>
	<input type="text" name="z_address" placeholder="Enter Office Address" value="<?php echo get_option('z_address'); ?>" size="35">


<?php } function display_z_phone_element(){ ?>
	<input type="text" name="z_phone" placeholder="Enter Phone Number" value="<?php echo get_option('z_phone'); ?>" size="35">

<?php }
// Fax
function display_z_fax_element(){ ?>
	<input type="text" name="z_fax" placeholder="Enter Fax Number" value="<?php echo get_option('z_fax'); ?>" size="35">

<?php }
// Email
function display_z_email_element(){ ?>
	<input type="email" name="z_email" placeholder="Enter Email Address" value="<?php echo get_option('z_email'); ?>" size="35">

<?php }
// Facebook
function display_z_fb_element(){ ?>
	<input type="text" name="z_fb" placeholder="Enter Facebook Page Adress" value="<?php echo get_option('z_fb'); ?>" size="35">
	
<?php }

// Twitter
function display_z_tt_element(){ ?>
	<input type="text" name="z_tt" placeholder="Enter Twitter Adress" value="<?php echo get_option('z_tt'); ?>" size="35">
	
<?php }

// Instagram
function display_z_insta_element(){ ?>
	<input type="text" name="z_insta" placeholder="Enter Instagram Adress" value="<?php echo get_option('z_insta'); ?>" size="35">
	
<?php }

// Youtube
function display_z_ytbe_element(){ ?>
	<input type="text" name="z_ytbe" placeholder="Enter Youtbe Adress" value="<?php echo get_option('z_ytbe'); ?>" size="35">
	
<?php }
// Google +
function display_z_gglpls_element(){ ?>
	<input type="text" name="z_gglpls" placeholder="Enter Google + Adress" value="<?php echo get_option('z_gglpls'); ?>" size="35">
	
<?php }
// Linkedin
function display_z_lnkdin_element(){ ?>
	<input type="text" name="z_lnkdin" placeholder="Enter Linkedin Adress" value="<?php echo get_option('z_lnkdin'); ?>" size="35">
	
<?php }

// Copyright
function display_z_copyright_element(){ ?>
	<input type="text" name="z_copyright" placeholder="Copyright" value="<?php echo get_option('z_copyright'); ?>" size="35">
	
<?php }

function display_custom_info_fields(){
	
	add_settings_section("section", "Company Information", null, "theme-options");
	
	add_settings_field("z_address", "Address", "display_z_address_element", "theme-options", "section");
	
	add_settings_field("z_phone", "Phone", "display_z_phone_element", "theme-options", "section");
	
	add_settings_field("z_fax", "Fax", "display_z_fax_element", "theme-options", "section");
	
	add_settings_field("z_email", "Email Address", "display_z_email_element", "theme-options", "section");

	add_settings_field("z_fb", "Facebook Address", "display_z_fb_element", "theme-options", "section");

	add_settings_field("z_tt", "Twitter Address", "display_z_tt_element", "theme-options", "section");

	add_settings_field("z_insta", "Instagram Address", "display_z_insta_element", "theme-options", "section");

	add_settings_field("z_ytbe", "Youtbe Address", "display_z_ytbe_element", "theme-options", "section");

	add_settings_field("z_gglpls", "Google + Address", "display_z_gglpls_element", "theme-options", "section");

	add_settings_field("z_lnkdin", "Linkedin Address", "display_z_lnkdin_element", "theme-options", "section");

	add_settings_field("z_copyright", "Copyright", "display_z_copyright_element", "theme-options", "section");

	register_setting("section", "z_address");
	register_setting("section", "z_phone");
	register_setting("section", "z_fax");
	register_setting("section", "z_email");
	register_setting("section", "z_fb");
	register_setting("section", "z_tt");
	register_setting("section", "z_insta");
	register_setting("section", "z_ytbe");
	register_setting("section", "z_gglpls");
	register_setting("section", "z_lnkdin");
	register_setting("section", "z_copyright");	
}
add_action("admin_init", "display_custom_info_fields");



// MENUS
function wpb_main_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'wpb_main_menu' );

function wpb_info_menu() {
  register_nav_menu('info-menu',__( 'Info Menu' ));
}
add_action( 'init', 'wpb_info_menu' );




////////////////////////////////////////
///--  MAIN BANNER /
// ---------- Taxonomy: Banner Categories.

function cptui_register_my_taxes_banner_category() {
	$labels = array(
		"name" => __( "Banner Kategorie", "" ),
		"singular_name" => __( "Banner Kategorie", "" ),
	);

	$args = array(
		"label" => __( "Banner Categories", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Banner Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => false,
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "banner_category",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "banner_category", array( "banner_slider" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_banner_category' );

// ---------- Post Type: Banner Slider
function cptui_register_my_cpts_banner_slider() {
	$labels = array(
		"name" => __( "Banner Slider", "" ),
		"singular_name" => __( "Banner Slider", "" ),
	);
	$args = array(
		"label" => __( "Banner Slider", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_icon" => "dashicons-laptop",
		"supports" => array( "title", "thumbnail" ),
		"taxonomies" => array( "banner_category" ),
	);

	register_post_type( "banner_slider", $args );
}

add_action( 'init', 'cptui_register_my_cpts_banner_slider' );
add_theme_support( 'post-thumbnails', array( 'post', 'page','banner_slider' ) );

// ---------- META BOX

add_action( 'init', 'create_post_banner_slider' );
function add_main_banner_fields_meta_box() {
	add_meta_box(
		'main_banner_fields_meta_box', // $id
		'Main Banner', // $title
		'show_main_banner_fields_meta_box', // $callback
		'banner_slider', // $screen
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_main_banner_fields_meta_box' );

function show_main_banner_fields_meta_box() {
    global $post;  
    
		$meta = get_post_meta( $post->ID, 'main_banner_fields', true ); ?>

  <input type="hidden" name="main_banner_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

  <p>
    <label for="main_banner_fields[text]">Banner Link</label>
    <br>
    <input type="text" name="main_banner_fields[text]" id="main_banner_fields[text]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['text'])) {	echo $meta['text']; } ?>">
  </p>

  <p>
    <label for="main_banner_fields[text]">Title</label>
    <br>
    <input type="text" name="main_banner_fields[text2]" id="main_banner_fields[text2]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['text2'])) {	echo $meta['text2']; } ?>">
  </p>

  <p>
    <label for="main_banner_fields[text]">Description</label>
    <br>
    <input type="text" name="main_banner_fields[text3]" id="main_banner_fields[text3]" class="regular-text" value="<?php if (is_array($meta) && isset($meta['text3'])) {	echo $meta['text3']; } ?>">
  </p>

  <?php }
function save_main_banner_fields_meta( $post_id ) {   
	// verify nonce
	if ( isset($_POST['main_banner_meta_box_nonce']) 
			&& !wp_verify_nonce( $_POST['main_banner_meta_box_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	
	$old = get_post_meta( $post_id, 'main_banner_fields', true );
		if (isset($_POST['main_banner_fields'])) { //Fix 3
			$new = $_POST['main_banner_fields'];
			if ( $new && $new !== $old ) {
				update_post_meta( $post_id, 'main_banner_fields', $new );
			} elseif ( '' === $new && $old ) {
				delete_post_meta( $post_id, 'main_banner_fields', $old );
			}
		}
}
add_action( 'save_post', 'save_main_banner_fields_meta' );

// HOME PAGE BANNER
function main_banner_home() { ?>
 
   <?php 
    global $post;
    $args = array(
    'post_type' => 'banner_slider',
    'tax_query' => array(
        array(
            'taxonomy' => 'banner_category',
            'field' => 'slug',
            'terms' => 'main-banner'
            )
        )
    );
    $the_query = new WP_Query($args);
    ?>    

<section class="slides">
  <section class="slides-nav">
    <nav class="slides-nav__nav">
      <button class="slides-nav__prev js-prev"><</button>
      <button class="slides-nav__next js-next">></button>
    </nav>
  </section> 
<?php if ( have_posts() ) :?>
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);?>
    <?php  $meta = get_post_meta( $post->ID, 'main_banner_fields', true ); ?>

	  <section class="slide">
	    <div class="slide__content">
	    	<article class="slide__header">
		        <h2 class="slide__title">
		          <span class="title-line title-text"><span><?php echo $meta['text2'] ?></span></span>
		          <span class="title-line sub_text"><span><?php echo $meta['text3'] ?></span></span>
		        </h2>
				<a title="<?php echo $meta['text3'] ?>" href="<?php echo get_bloginfo('wpurl'); ?><?php echo $meta['text'] ?>" class="banner-info">
					<span>i</span>
    			</a>

	      	</article>    	
			<figure class="slide__figure">
				<div class="slide__img" style="background-image: url(<?php echo $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>)"></div>
			</figure>	
	    </div>
	  </section>

	<?php endwhile; ?>
	<img src="<?php echo get_template_directory_uri();?>/assest/images/slice_slider_bg.jpg" class="slice-slider-bg">
<?php endif; ?>    
</section>
<!-- .ct-header -->
    <?php wp_reset_postdata(); ?>

<?php wp_reset_postdata(); }

