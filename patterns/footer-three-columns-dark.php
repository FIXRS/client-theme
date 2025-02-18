<?php
/**
 * Title: Footer with text, links, buttons.
 * Slug: {fixrs}/footer-three-columns-dark
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"3.0rem","right":"3.0rem"},"margin":{"top":"0rem"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0rem;padding-top:var(--wp--preset--spacing--small);padding-right:3.0rem;padding-bottom:var(--wp--preset--spacing--small);padding-left:3.0rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph -->
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html__( 'Your Company LLC', '{fixrs}-theme' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><a href="#"><?php echo esc_html__( 'Privacy Policy', '{fixrs}-theme' ); ?></a> · <a href="#"><?php echo esc_html__( 'Terms of Service', '{fixrs}-theme' ); ?></a> · <a href="#"><?php echo esc_html__( 'Contact Us', '{fixrs}-theme' ); ?></a></p>
		<!-- /wp:paragraph -->
		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000","iconBackgroundColor":"base","iconBackgroundColorValue":"#fff","className":"is-style-default","style":{"spacing":{"blockGap":"1.0rem"}}} -->
		<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
			<!-- wp:social-link {"url":"#","service":"x"} /-->
			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
