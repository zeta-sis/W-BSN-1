<?php
// SUBLANGUAGE TRANSLATE
function langu_zetasis($original_text, $current_language, $sublanguage, $optional_arg) {
	if ($current_language->post_content == 'en_EN') {
		return 'Web Design';
	} else if ($current_language->post_content == 'tr_TR') {
		return 'Web Tasarımı';
	}
	return $original_text;
}


// SUBLANGUAGE SWITCH
add_action('sublanguage_custom_switch', 'my_custom_switch', 10, 3); 
function my_custom_switch($languages, $sublanguage, $context) {
if ($context == 'top') {
?>
<?php foreach ($languages as $language) { ?>
	<a href="<?php echo $sublanguage->get_translation_link($language); ?>" class="langu <?php if ($sublanguage->current_language->ID == $language->ID) echo 'active'; ?>">
		<?php echo apply_filters('sublanguage_language_name', $language->post_title, $language); ?>
	</a>
<?php } ?>

<?php } else if ($context == 'mobi') { ?>
<button class="btn btn-secondary dropdown-toggle language_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i>&nbsp; &nbsp;
    <?php foreach ($languages as $language) { ?>
        <?php if ($sublanguage->current_language->ID == $language->ID) echo  $language->post_title; ?>
    <?php } ?>
    </button>   
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php foreach ($languages as $language) { ?>
            <a href="<?php echo $sublanguage->get_translation_link($language); ?>" class="dropdown-item <?php echo $language->post_name; ?> <?php if ($sublanguage->current_language->ID == $language->ID) echo 'current_lang'; ?>">
                <?php echo apply_filters('sublanguage_language_name', $language->post_title, $language); ?></a>
    <?php } ?>
    </div> 
<?php } }
do_action('sublanguage_print_language_switch', 'top');
do_action('sublanguage_print_language_switch', 'mobi');
