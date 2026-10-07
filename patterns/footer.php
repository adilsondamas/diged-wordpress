<?php
/**
 * Title: DIG.ED — Footer
 * Slug: diged/footer
 * Categories: footer
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"diged-footer","backgroundColor":"black","textColor":"white","layout":{"type":"constrained","contentSize":"76rem"}} -->
<div class="wp-block-group alignfull diged-footer has-white-color has-black-background-color has-text-color has-background">
<!-- wp:heading {"level":2,"textColor":"white","fontSize":"display","className":"diged-footer__signature"} -->
<h2 class="wp-block-heading diged-footer__signature has-white-color has-text-color has-display-font-size">Do conhecimento à experiência digital.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-footer__support","layout":{"type":"constrained","contentSize":"42rem","justifyContent":"left"}} -->
<div class="wp-block-group diged-footer__support">
<!-- wp:paragraph {"textColor":"white","fontSize":"body"} -->
<p class="has-white-color has-text-color has-body-font-size">Estratégia, design e produção digital potencializados por IA.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Navegação do rodapé","textColor":"white","fontSize":"body-l","className":"diged-footer__navigation","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<?php
$diged_footer_links = array(
    array( 'create', 'CREATE' ),
    array( 'learn', 'LEARN' ),
    array( 'sobre', 'Sobre' ),
    array( 'contato', 'Vamos conversar <span class="diged-footer__arrow" aria-hidden="true">↗</span>' ),
);
foreach ( $diged_footer_links as $diged_footer_item ) {
    $diged_footer_link = array(
        'label' => $diged_footer_item[1],
        'type' => 'custom',
        'url' => '/' . $diged_footer_item[0] . '/',
        'kind' => 'custom',
    );
    if ( 'contato' === $diged_footer_item[0] ) {
        $diged_footer_link['className'] = 'diged-footer__contact';
    }
    $diged_footer_page = get_page_by_path( $diged_footer_item[0], OBJECT, 'page' );
    if ( $diged_footer_page && 'publish' === $diged_footer_page->post_status ) {
        $diged_footer_link['id'] = (int) $diged_footer_page->ID;
        $diged_footer_link['type'] = 'page';
        $diged_footer_link['kind'] = 'post-type';
    }
    echo '<!-- wp:navigation-link ' . wp_json_encode( $diged_footer_link, JSON_HEX_TAG | JSON_HEX_AMP ) . ' /-->';
}
?>
<!-- /wp:navigation -->
<!-- wp:group {"className":"diged-footer__meta","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group diged-footer__meta">
<!-- wp:paragraph {"fontSize":"small","textColor":"white"} -->
<p class="has-white-color has-text-color has-small-font-size">DIG.ED</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"white"} -->
<p class="has-white-color has-text-color has-small-font-size">© 2026 DIG.ED</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","textColor":"white","className":"diged-footer__privacy"} -->
<p class="diged-footer__privacy has-white-color has-text-color has-small-font-size"><?php
$diged_privacy_url = get_privacy_policy_url();
if ( $diged_privacy_url ) {
    echo '<a href="' . esc_url( $diged_privacy_url ) . '">Privacidade</a>';
} else {
    echo 'Privacidade';
}
?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
