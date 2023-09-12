<?php

/**
 * Hooks.
 */

/**
 * Allow upload json file
 */
add_filter('upload_mimes', function ($mime_types) {
	$mime_types['json'] = 'application/json'; // Adding .json extension

	return $mime_types;
}, 1);

/**
 * Header template
 * @return void
 */
add_action('dev_hook_header', 'dev_header_template');
function dev_header_template()
{
	load_template(get_template_directory() . '/template-parts/header.php', false);
}


/**
 * Footer template
 * @return void
 */
add_action('dev_hook_footer', 'dev_footer_template');
function dev_footer_template()
{
	load_template(get_template_directory() . '/template-parts/footer.php', false);
}

/**
 * Post loop item template
 *
 * @param Int $post_id
 *
 * @return void
 */
add_action('dev_hook_post_loop_item', 'dev_post_loop_item_template', 20, 2);
function dev_post_loop_item_template($post_id, $index)
{
	set_query_var('post_id', $post_id);
	$v  = ($index) % 3;
	$vT = ceil($v);

	$anm = 'data-aos="fade-up" data-aos-duration="' . (($v !== 0 ? $vT : 3) * 400) . '"';
?>
	<article <?= $anm; ?> <?php post_class('item post-loop-item col-md-4') ?>>
		<?php dev_post_item() ?>
	</article>
<?php
}

function dev_child_deregister_styles()
{
	wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'dev_child_deregister_styles', 20);


function dev_remove_admin_menus()
{
	remove_submenu_page( 'themes.php', 'widgets.php' );
}
add_action('admin_menu', 'dev_remove_admin_menus');
