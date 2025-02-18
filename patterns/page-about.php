<?php
/**
 * Title: Sample about page.
 * Slug: {fixrs}/page-about
 * Categories: {fixrs}-page
 *
 * @package {fixrs}-theme
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"7.0rem","bottom":"var:preset|spacing|x-large","right":"3.0rem","left":"3.0rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:7.0rem;padding-right:3.0rem;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:3.0rem">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"style":{"typography":{"letterSpacing":"-0.1rem"},"spacing":{"margin":{"bottom":"0rem"}}},"className":"wp-block-heading","fontSize":"max-60"} -->
			<h2 class="wp-block-heading has-max-60-font-size" id="we-reimagine-how-to-build-wordpress-websites" style="margin-bottom:0rem;letter-spacing:-0.1rem"><?php echo esc_html__( 'Experience the next generation of WordPress.', '{fixrs}-theme' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html__( 'Whether you’re building a website for your business, personal brand, or creative project, Gutenberg is the perfect solution for anyone looking to launch a website quickly and efficiently.', '{fixrs}-theme' ); ?></p>
			<!-- /wp:paragraph -->
				<!-- wp:buttons {"layout":{"type":"flex"},"style":{"spacing":{"blockGap":"1.0rem","margin":{"top":"3.0rem"}}}} -->
				<div class="wp-block-buttons" style="margin-top:3.0rem">
				<!-- wp:button {"fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started', '{fixrs}-theme' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"style":{"spacing":{"padding":{"top":"1.4rem","bottom":"1.4rem","left":"2.9rem","right":"2.9rem"}}},"className":"is-style-outline-background is-style-outline","fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline-background is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:1.4rem;padding-right:2.9rem;padding-bottom:1.4rem;padding-left:2.9rem"><?php echo esc_html__( 'Learn More', '{fixrs}-theme' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_black_1200x1200.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', '{fixrs}-theme' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"3.0rem","left":"3.0rem"},"margin":{"top":"0"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-background-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--medium);padding-right:3.0rem;padding-bottom:var(--wp--preset--spacing--medium);padding-left:3.0rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:image {"width":150,"height":32,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-logo.png'; ?>" alt="<?php echo esc_attr__( 'Sample Logo', '{fixrs}-theme' ); ?>" width="150" height="32"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"width":150,"height":32,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-logo.png'; ?>" alt="<?php echo esc_attr__( 'Sample Logo', '{fixrs}-theme' ); ?>" width="150" height="32"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"width":150,"height":32,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-logo.png'; ?>" alt="<?php echo esc_attr__( 'Sample Logo', '{fixrs}-theme' ); ?>" width="150" height="32"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"width":150,"height":32,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-logo.png'; ?>" alt="<?php echo esc_attr__( 'Sample Logo', '{fixrs}-theme' ); ?>" width="150" height="32"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"width":150,"height":32,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-logo.png'; ?>" alt="<?php echo esc_attr__( 'Sample Logo', '{fixrs}-theme' ); ?>" width="150" height="32"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"3.0rem","left":"3.0rem"},"margin":{"top":"0"}}},"layout":{"type":"constrained","wideSize":"120.0rem"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:3.0rem;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:3.0rem">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-0.1rem"}},"className":"wp-block-heading","fontSize":"max-60"} -->
		<h2 class="wp-block-heading has-text-align-center has-max-60-font-size" id="text-on-left-image-on-right" style="letter-spacing:-0.1rem"><?php echo esc_html__( 'Build with Gutenberg.', '{fixrs}-theme' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
		<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'With its clean, minimal design and powerful feature set, Gutenberg enables agencies to build stylish and sophisticated WordPress websites.', '{fixrs}-theme' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}},"backgroundColor":"neutral"} -->
		<div class="wp-block-column has-neutral-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"400"}},"fontSize":"max-60"} -->
			<p class="has-max-60-font-size" style="font-style:normal;font-weight:400;line-height:1">01</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading","fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Design', '{fixrs}-theme' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'The foundation on which aesthetics, user experience, and functionality is built.', '{fixrs}-theme' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="#features"><?php echo esc_html__( 'Learn More →', '{fixrs}-theme' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}},"backgroundColor":"primary","textColor":"base"} -->
		<div class="wp-block-column has-base-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"fontSize":"max-60"} -->
			<p class="has-max-60-font-size" style="font-style:normal;font-weight:400;line-height:1">02</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading","fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Patterns', '{fixrs}-theme' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'A preset bundle of blocks that empower builders and amplify their creativity.', '{fixrs}-theme' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"small"} -->
			<p class="has-link-color has-small-font-size"><a href="#"><?php echo esc_html__( 'Learn More →', '{fixrs}-theme' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}},"backgroundColor":"secondary","textColor":"base"} -->
		<div class="wp-block-column has-base-color has-secondary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"fontSize":"max-60"} -->
			<p class="has-max-60-font-size" style="font-style:normal;font-weight:400;line-height:1">03</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading","fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Layouts', '{fixrs}-theme' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'A collection of full-page patterns used to showcase content or a message.', '{fixrs}-theme' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"small"} -->
			<p class="has-link-color has-small-font-size"><a href="#"><?php echo esc_html__( 'Learn More →', '{fixrs}-theme' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}},"backgroundColor":"contrast","textColor":"base"} -->
		<div class="wp-block-column has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1"}},"fontSize":"max-60"} -->
			<p class="has-max-60-font-size" style="font-style:normal;font-weight:400;line-height:1">04</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading","fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Styles', '{fixrs}-theme' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'An essential element of web design used to create a visually striking design.', '{fixrs}-theme' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"small"} -->
			<p class="has-link-color has-small-font-size"><a href="#"><?php echo esc_html__( 'Learn More →', '{fixrs}-theme' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0rem"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"3.0rem","left":"3.0rem"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0rem;padding-top:var(--wp--preset--spacing--x-large);padding-right:3.0rem;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:3.0rem">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%">
			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="line-height:1.5"><?php echo esc_html__( 'With its clean, minimal design and powerful feature set, Gutenberg enables agencies to build stylish and sophisticated WordPress websites. Ka-chow!', '{fixrs}-theme' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php echo esc_html__( 'View Patterns', '{fixrs}-theme' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button"><?php echo esc_html__( 'View Layouts', '{fixrs}-theme' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"3.0rem","left":"3.0rem"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:3.0rem;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:3.0rem">
	<!-- wp:group {"style":{"spacing":{"blockGap":"1.0rem"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"0rem"}}},"className":"wp-block-heading","fontSize":"max-48"} -->
		<h2 class="wp-block-heading has-text-align-center has-max-48-font-size" id="block-patterns" style="margin-bottom:0rem"><?php echo esc_html__( 'Meet the team.', '{fixrs}-theme' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
		<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'The talented folks who work on the Gutenberg theme.', '{fixrs}-theme' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', '{fixrs}-theme' ); ?>" width="200" height="200"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-text-align-center has-medium-font-size" id="member-name-1"><?php echo esc_html__( 'Member Name', '{fixrs}-theme' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
				<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'I’m a WordPress developer and enjoy building websites.', '{fixrs}-theme' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'View Profile', '{fixrs}-theme' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', '{fixrs}-theme' ); ?>" width="200" height="200"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-text-align-center has-medium-font-size" id="member-name-1"><?php echo esc_html__( 'Member Name', '{fixrs}-theme' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
				<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'I’m a WordPress developer and enjoy building websites.', '{fixrs}-theme' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'View Profile', '{fixrs}-theme' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', '{fixrs}-theme' ); ?>" width="200" height="200"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-text-align-center has-medium-font-size" id="member-name-1"><?php echo esc_html__( 'Member Name', '{fixrs}-theme' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
				<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'I’m a WordPress developer and enjoy building websites.', '{fixrs}-theme' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'View Profile', '{fixrs}-theme' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', '{fixrs}-theme' ); ?>" width="200" height="200"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-text-align-center has-medium-font-size" id="member-name-1"><?php echo esc_html__( 'Member Name', '{fixrs}-theme' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
				<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'I’m a WordPress developer and enjoy building websites.', '{fixrs}-theme' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'View Profile', '{fixrs}-theme' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
