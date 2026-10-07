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
<!-- wp:navigation {"textColor":"black","backgroundColor":"white","overlayTextColor":"white","overlayBackgroundColor":"black","overlayMenu":"mobile","fontSize":"button","layout":{"type":"flex","justifyContent":"right"}} -->
<?php
$diged_link = json_decode( '{"label":"CREATE","type":"custom","url":"/create/","kind":"custom"}', true );
$diged_page = get_page_by_path( 'create', OBJECT, 'page' );
if ( $diged_page && 'publish' === $diged_page->post_status ) {
    $diged_link['className'] = trim( ( $diged_link['className'] ?? '' ) . ' diged-header__page-bound' );
    $diged_link['id'] = (int) $diged_page->ID;
    $diged_link['type'] = 'page';
    $diged_link['kind'] = 'post-type';
}
echo '<!-- wp:navigation-link ' . wp_json_encode( $diged_link, JSON_HEX_TAG | JSON_HEX_AMP ) . ' /-->';
?>
<?php
$diged_link = json_decode( '{"label":"LEARN","type":"custom","url":"/learn/","kind":"custom"}', true );
$diged_page = get_page_by_path( 'learn', OBJECT, 'page' );
if ( $diged_page && 'publish' === $diged_page->post_status ) {
    $diged_link['className'] = trim( ( $diged_link['className'] ?? '' ) . ' diged-header__page-bound' );
    $diged_link['id'] = (int) $diged_page->ID;
    $diged_link['type'] = 'page';
    $diged_link['kind'] = 'post-type';
}
echo '<!-- wp:navigation-link ' . wp_json_encode( $diged_link, JSON_HEX_TAG | JSON_HEX_AMP ) . ' /-->';
?>
<?php
$diged_link = json_decode( '{"label":"Sobre","type":"custom","url":"/sobre/","kind":"custom"}', true );
$diged_page = get_page_by_path( 'sobre', OBJECT, 'page' );
if ( $diged_page && 'publish' === $diged_page->post_status ) {
    $diged_link['className'] = trim( ( $diged_link['className'] ?? '' ) . ' diged-header__page-bound' );
    $diged_link['id'] = (int) $diged_page->ID;
    $diged_link['type'] = 'page';
    $diged_link['kind'] = 'post-type';
}
echo '<!-- wp:navigation-link ' . wp_json_encode( $diged_link, JSON_HEX_TAG | JSON_HEX_AMP ) . ' /-->';
?>
<?php
$diged_link = json_decode( '{"label":"Vamos conversar <span class=\"diged-header__arrow\" aria-hidden=\"true\">↗</span>","type":"custom","url":"/contato/","kind":"custom","className":"diged-header__contact"}', true );
$diged_page = get_page_by_path( 'contato', OBJECT, 'page' );
if ( $diged_page && 'publish' === $diged_page->post_status ) {
    $diged_link['className'] = trim( ( $diged_link['className'] ?? '' ) . ' diged-header__page-bound' );
    $diged_link['id'] = (int) $diged_page->ID;
    $diged_link['type'] = 'page';
    $diged_link['kind'] = 'post-type';
}
echo '<!-- wp:navigation-link ' . wp_json_encode( $diged_link, JSON_HEX_TAG | JSON_HEX_AMP ) . ' /-->';
?>
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
