<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package dev
 */

echo "</div></div></main></div></div></div><!--End site wrap-->";

/**
 * dev_hook_footer hook.
 * @see dev_footer_template - 20
 */
do_action( 'dev_hook_footer' );

wp_footer();
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBV9JSW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
