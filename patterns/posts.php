<?php
/**
 * Title: List of posts in one column.
 * Slug: {fixrs}/posts
 * Categories: posts
 * Block Types: core/query
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
		<article class="wp-block-group">
			<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"1.0rem"}},"className":"entry-header"} -->
			<header class="wp-block-group entry-header">
				<!-- wp:post-title {"isLink":true} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"3.0rem"}},"typography":{"fontSize":"1.8rem"}},"className":"post-meta","layout":{"type":"flex"}} -->
				<div class="wp-block-group post-meta" style="margin-bottom:3.0rem;font-size:1.8rem">
					<!-- wp:post-date /-->
					<!-- wp:paragraph -->
					<p>·</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-author-name {"isLink":true} /-->
				</div>
				<!-- /wp:group -->
			</header>
			<!-- /wp:group -->
			<!-- wp:post-excerpt {"moreText":"Read More"} /-->
		</article>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
