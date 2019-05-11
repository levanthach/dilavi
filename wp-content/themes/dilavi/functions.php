<?php 
	function theme_settup(){
		register_nav_menu('topmenu',__( 'Menu chính' ));
	}
	add_action('init','theme_settup');

require_once trailingslashit( get_template_directory() ) . 'inc/init.php';

/**
 * Classic Editor.
 */
add_filter('use_block_editor_for_post', '__return_false');

 ?>