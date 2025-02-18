<?php
/**
 * Title: Header notification bar with text, button.
 * Slug: {fixrs}/header-notification-bar-dark
 * Categories: header
 * Block Types: core/template-part/header
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"right":"3.0rem","left":"3.0rem","top":"1.5rem","bottom":"1.5rem"},"margin":{"top":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-top:1.5rem;padding-right:3.0rem;padding-bottom:1.5rem;padding-left:3.0rem">
	<!-- wp:group {"style":{"spacing":{"blockGap":"1.0rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"x-small"} -->
		<p class="has-text-align-center has-x-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'With its minimal design and powerful feature set, Gutenberg enables agencies to build stylish websites.', '{fixrs}-theme' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"typography":{"fontSize":"1.4rem"},"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"1.5rem","right":"1.5rem"}}}} -->
			<div class="wp-block-button has-custom-font-size" style="font-size:1.4rem"><a class="wp-block-button__link wp-element-button" style="padding-top:0.5rem;padding-right:1.5rem;padding-bottom:0.5rem;padding-left:1.5rem"><?php echo esc_html__( 'Get Started', '{fixrs}-theme' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
