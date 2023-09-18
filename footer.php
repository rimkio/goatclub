<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package dev
 */

echo "</div></main></div></div></div><!--End site wrap-->";

/**
 * dev_hook_footer hook.
 * @see dev_footer_template - 20
 */
do_action( 'dev_hook_footer' );

wp_footer();
get_template_part( 'template-parts/script' );
?>

</body>
</html>
