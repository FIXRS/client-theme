<?php
/**
 * Title: Boxes with heading, text, button.
 * Slug: {fixrs}/boxes-two
 * Categories: featured
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"width":"0.1rem"}},"borderColor":"contrast"} -->
		<div class="wp-block-column has-border-color has-contrast-border-color" style="border-width:0.1rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"fontSize":"x-large","anchor":"sample-heading-1"} -->
			<h3 class="wp-block-heading has-x-large-font-size" id="sample-heading-1"><?php echo esc_html__( 'Build with Gutenberg', '{fixrs}-theme' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Gutenberg is a powerful WordPress theme created for agencies and professional website builders. With its clean, minimal design, Gutenberg provides the perfect canvas for stylish and sophisticated websites.', '{fixrs}-theme' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Learn More', '{fixrs}-theme' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"width":"0.1rem"}},"borderColor":"contrast"} -->
		<div class="wp-block-column has-border-color has-contrast-border-color" style="border-width:0.1rem;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"fontSize":"x-large","anchor":"sample-heading-1"} -->
			<h3 class="wp-block-heading has-x-large-font-size" id="sample-heading-1"><?php echo esc_html__( 'Build with Gutenberg', '{fixrs}-theme' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Gutenberg is a powerful WordPress theme created for agencies and professional website builders. With its clean, minimal design, Gutenberg provides the perfect canvas for stylish and sophisticated websites.', '{fixrs}-theme' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Learn More', '{fixrs}-theme' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
