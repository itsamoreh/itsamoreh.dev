<?php
/**
 * Title: Footer
 * Slug: bts/footer
 * Description: Footer with site logo and menus.
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"48px","bottom":"48px"},"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"},"fontSize":"x-small"} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color has-x-small-font-size" style="margin-top:0;padding-top:48px;padding-bottom:48px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"id":21,"width":"60px","sizeSlug":"full","linkDestination":"custom","className":"is-resized"} -->
<figure class="wp-block-image size-full is-resized"><a href="/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/Am.png' ) ); ?>" alt="" class="wp-image-21" style="width:60px"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"ref":22,"overlayMenu":"never"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">© <?php echo esc_html( date("Y") ); ?> Amor Kumar</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
