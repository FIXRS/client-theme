<?php
/**
 * Title: Call-to-action with text, button.
 * Slug: {fixrs}/cta-stacked
 * Categories: call-to-action
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"layout":{"type":"constrained","wideSize":""}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"border":{"width":"0.1rem"},"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0"}}},"borderColor":"contrast","layout":{"type":"default"}} -->
	<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:0.1rem;margin-top:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html__( 'Call-to-Action', '{fixrs}-theme' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
		<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'With its minimal design and powerful feature set, Gutenberg enables agencies to build sophisticated websites.', '{fixrs}-theme' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Get Started', '{fixrs}-theme' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
