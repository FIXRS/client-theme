<?php
/**
 * Title: Header with site title, navigation.
 * Slug: {fixrs}/header-default-dark
 * Categories: header
 * Block Types: core/template-part/header
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3.0rem","bottom":"3.0rem"},"margin":{"top":"0rem"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0rem;padding-top:3.0rem;padding-bottom:3.0rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} /-->
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
