<?php
/**
 * Title: DIG.ED — Header
 * Slug: diged/header
 * Categories: header
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"diged-header","backgroundColor":"white","textColor":"black","layout":{"type":"constrained","contentSize":"76rem"}} -->
<div class="wp-block-group alignfull diged-header has-black-color has-white-background-color has-text-color has-background">
<!-- wp:group {"className":"diged-header__row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group diged-header__row">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"diged-header__brand"} -->
<figure class="wp-block-image size-full diged-header__brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/diged-logo-web.png' ) ); ?>" alt="DIG.ED — início" width="894" height="222"/></a></figure>
<!-- /wp:image -->
<!-- wp:navigation {"textColor":"black","backgroundColor":"white","overlayTextColor":"black","overlayBackgroundColor":"white","overlayMenu":"mobile","fontSize":"button","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"CREATE","type":"custom","url":"/create/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"LEARN","type":"custom","url":"/learn/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Sobre","type":"custom","url":"/sobre/","kind":"custom"} /-->
<!-- wp:navigation-link {"label":"Vamos conversar","type":"custom","url":"/contato/","kind":"custom","className":"diged-header__contact"} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
