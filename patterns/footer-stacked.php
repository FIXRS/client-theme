<?php
/**
 * Title: Footer with heading, text, button.
 * Slug: {fixrs}/footer-stacked
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|small","right":"3.0rem","left":"3.0rem"},"margin":{"top":"0rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:3.0rem;padding-bottom:var(--wp--preset--spacing--small);padding-left:3.0rem">
	<!-- wp:heading {"textAlign":"center","anchor":"let-s-connect","style":{"spacing":{"margin":{"bottom":"2.0rem"}}},"className":"wp-block-heading","fontSize":"max-48"} -->
	<h2 class="wp-block-heading has-text-align-center has-max-48-font-size" id="let-s-connect" style="margin-bottom:2.0rem"><?php echo esc_html__( 'Let’s Connect', '{fixrs}-theme' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html__( 'With its clean, minimal design and powerful feature set, Gutenberg enables agencies to build stylish and sophisticated WordPress websites.', '{fixrs}-theme' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Get in Touch', '{fixrs}-theme' ); ?> →</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">&copy; 2023 <?php echo esc_html__( 'Your Company LLC', '{fixrs}-theme' ); ?> · <a href="#"><?php echo esc_html__( 'Contact Us', '{fixrs}-theme' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
