<?php
/**
 * Title: Letterpress Footer
 * Slug: letterpress/footer
 * Categories: footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
	<div class="wp-block-group alignwide" style="padding-top:0;padding-bottom:0">
		<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"medium","fontFamily":"secondary"} /-->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
		<p class="has-base-color has-text-color has-link-color">
			<?php
				$year = date( 'Y' ) ?: '';

				printf(
					__( '&#169; %s', 'letterpress' ),
					$year
				);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
