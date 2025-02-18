<?php
/**
 * Title: Sample link page.
 * Slug: {fixrs}/page-link
 * Categories: {fixrs}-page
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0rem"},"padding":{"left":"0rem","top":"var:preset|spacing|large","right":"0rem","bottom":"var:preset|spacing|large"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh;margin-top:0rem;padding-top:var(--wp--preset--spacing--large);padding-right:0rem;padding-bottom:var(--wp--preset--spacing--large);padding-left:0rem">
	<!-- wp:group {"layout":{"type":"constrained","wideSize":"60.0rem"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
		<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', '{fixrs}-theme' ); ?>" width="120" height="120"/></figure>
		<!-- /wp:image -->
		<!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-heading","fontSize":"x-large"} -->
		<h1 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html__( 'Your Name', '{fixrs}-theme' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}}} -->
		<p class="has-text-align-center" style="margin-top:0"><a href="mailto:name@company.com">name@company.com</a></p>
		<!-- /wp:paragraph -->
		
		<!-- wp:social-links {"iconBackgroundColor":"contrast","iconBackgroundColorValue":"#000","size":"has-normal-icon-size","align":"center","style":{"spacing":{"blockGap":"1.0rem","margin":{"bottom":"var:preset|spacing|medium"}}},"className":"has-icon-base-color","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-background-color has-icon-base-color" style="margin-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
		</ul>
		<!-- /wp:social-links -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"blockGap":"1.0rem","margin":{"bottom":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--small)">
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Visit My Website', '{fixrs}-theme' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Read My Blog', '{fixrs}-theme' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Download My Ebook', '{fixrs}-theme' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Follow My Newsletter', '{fixrs}-theme' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Listen to My Podcast', '{fixrs}-theme' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><a href="https://wordpress.org/themes/{fixrs}/"><?php echo esc_html__( 'Made with Gutenberg', '{fixrs}-theme' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
