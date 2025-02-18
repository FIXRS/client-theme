<?php
/**
 * Title: Box with image, text, social icons.
 * Slug: {fixrs}/author-box
 * Categories: call-to-action
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"style":{"border":{"width":"0.1rem"},"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}},"borderColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:0.1rem;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:avatar {"size":100,"align":"center","style":{"border":{"radius":"5.0rem"}}} /-->
	<!-- wp:post-author-name {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"1.0rem"}}},"fontSize":"large"} /-->
	<!-- wp:post-author-biography {"textAlign":"center","style":{"spacing":{"margin":{"top":"0rem"}},"typography":{"lineHeight":"1.5"}}} /-->
	<!-- wp:social-links {"iconBackgroundColor":"contrast","iconBackgroundColorValue":"#000000","align":"center"} -->
	<ul class="wp-block-social-links aligncenter has-icon-background-color">
		<!-- wp:social-link {"url":"#","service":"x"} /-->
		<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
		<!-- wp:social-link {"url":"#","service":"instagram"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
