<?php
/**
 * Title: Footer with text, links.
 * Slug: {fixrs}/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"3.0rem","right":"3.0rem"},"margin":{"top":"0rem"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:0rem;padding-top:var(--wp--preset--spacing--small);padding-right:3.0rem;padding-bottom:var(--wp--preset--spacing--small);padding-left:3.0rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph -->
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company LLC · <a href="#">Contact Us</a></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><a href="#"><?php echo esc_html__( 'Facebook', '{fixrs}-theme' ); ?></a> · <a href="#"><?php echo esc_html__( 'LinkedIn', '{fixrs}-theme' ); ?></a> · <a href="#"><?php echo esc_html__( 'Instagram', '{fixrs}-theme' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
