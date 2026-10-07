<?php
/**
 * Title: DIG.ED — Home V1
 * Slug: diged/home-v1
 * Categories: featured
 * Description: Home editorial com sete seções e conteúdo editável.
 * Viewport Width: 1440
 * Inserter: yes
 */
$diged_home_link = static function ( $slug, $label ) {
    $page = get_page_by_path( $slug, OBJECT, 'page' );
    $attributes = array(
        'label' => $label . ' <span aria-hidden="true">↗</span>',
        'type' => 'custom',
        'kind' => 'custom',
        'url' => home_url( '/' . $slug . '/' ),
    );
    if ( $page && 'publish' === $page->post_status ) {
        $attributes['id'] = (int) $page->ID;
        $attributes['type'] = 'page';
        $attributes['kind'] = 'post-type';
        $attributes['url'] = get_permalink( $page );
    }
    echo '<!-- wp:navigation-link ' . wp_json_encode( $attributes, JSON_HEX_TAG | JSON_HEX_AMP ) . ' /-->';
};
?>
<!-- wp:group {"className":"diged-home-v1","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull diged-home-v1">
<!-- wp:group {"className":"diged-home-v1__section diged-home-v1__hero","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-home-v1__section diged-home-v1__hero">
<!-- wp:group {"className":"diged-home-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">DIG.ED</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"display-xl","level":1} -->
<h1 class="wp-block-heading has-display-xl-font-size">Do conhecimento à experiência digital.</h1>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-home-v1__hero-bottom","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__hero-bottom">
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:paragraph {"fontSize":"lead"} -->
<p class="has-lead-font-size">Transformamos ideias, conteúdos e conhecimento em experiências digitais que comunicam, envolvem e ensinam.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:buttons {} -->
<div class="wp-block-buttons"><!-- wp:button {} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#solucoes">Conheça nossas soluções</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Vamos conversar","className":"diged-home-v1__link","fontSize":"body-l","layout":{"type":"flex","justifyContent":"left"}} -->
<?php $diged_home_link( 'contato', 'Vamos conversar' ); ?>
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"anchor":"solucoes","className":"diged-home-v1__section diged-home-v1__solutions","layout":{"type":"default"},"tagName":"section"} -->
<section id="solucoes" class="wp-block-group diged-home-v1__section diged-home-v1__solutions">
<!-- wp:group {"className":"diged-home-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">COMUNICAÇÃO + APRENDIZAGEM</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Duas formas de transformar ideias e conhecimento em experiência.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-home-v1__territories","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__territories">
<!-- wp:group {"className":"diged-home-v1__territory diged-home-v1__create","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__territory diged-home-v1__create">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">CREATE</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":3} -->
<h3 class="wp-block-heading has-h2-font-size">Coloque uma iniciativa em movimento.</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Mensagem, direção visual e aplicações para lançar, apresentar ou mobilizar algo importante.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Agilidade, clareza e impacto para transformar uma necessidade de comunicação em uma entrega pronta para uso.</p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Conheça CREATE","className":"diged-home-v1__link","fontSize":"body-l","layout":{"type":"flex","justifyContent":"left"}} -->
<?php $diged_home_link( 'create', 'Conheça CREATE' ); ?>
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__territory diged-home-v1__learn","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__territory diged-home-v1__learn">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">LEARN</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":3} -->
<h3 class="wp-block-heading has-h2-font-size">Transforme conhecimento em aprendizagem.</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Estratégia, design e produção para criar experiências de aprendizagem claras, envolventes e significativas.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Do conteúdo à experiência: organizamos conhecimento e desenvolvemos soluções digitais para quem precisa ensinar, capacitar ou compartilhar expertise.</p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Conheça LEARN","className":"diged-home-v1__link","fontSize":"body-l","layout":{"type":"flex","justifyContent":"left"}} -->
<?php $diged_home_link( 'learn', 'Conheça LEARN' ); ?>
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__section diged-home-v1__method","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-home-v1__section diged-home-v1__method">
<!-- wp:group {"className":"diged-home-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">DA IDEIA À ENTREGA</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Estratégia, design e produção digital.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-home-v1__process","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__process">
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Estratégia</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Entendemos o desafio, organizamos a informação e definimos o caminho.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Design</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Transformamos conteúdo e intenção em linguagem, estrutura e experiência.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Produção</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Criamos as aplicações, conteúdos e experiências digitais que colocam a estratégia em uso.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__closing","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__closing">
<!-- wp:paragraph {"fontSize":"lead"} -->
<p class="has-lead-font-size">Não entregamos apenas uma ideia ou uma direção. Entregamos algo que pode entrar em circulação.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__section diged-home-v1__difference","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-home-v1__section diged-home-v1__difference">
<!-- wp:group {"className":"diged-home-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">COMO TRABALHAMOS</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"display","level":2} -->
<h2 class="wp-block-heading has-display-font-size">Tecnologia acelera. Pessoas dão sentido.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-home-v1__reading diged-home-v1__offset","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__reading diged-home-v1__offset">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Combinamos estratégia, repertório, design e tecnologia para explorar possibilidades, prototipar com agilidade e produzir com mais eficiência.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">A tecnologia amplia nossa capacidade. A direção, as escolhas e o julgamento continuam humanos.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__section diged-home-v1__where","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-home-v1__section diged-home-v1__where">
<!-- wp:group {"className":"diged-home-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">ONDE ENTRAMOS</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Comunicação, aprendizagem e experiências digitais.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-home-v1__contexts","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__contexts">
<!-- wp:group {"className":"diged-home-v1__context","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__context">
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Lançar e apresentar</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Produtos, serviços, programas e novas iniciativas.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__context","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__context">
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Ensinar e capacitar</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Treinamentos e experiências de aprendizagem.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__context","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__context">
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Organizar e compartilhar conhecimento</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Transformar conteúdo e expertise em algo claro e utilizável.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__context","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__context">
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Criar experiências multimídia</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Conteúdo visual, audiovisual e interativo.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__section diged-home-v1__experience","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-home-v1__section diged-home-v1__experience">
<!-- wp:group {"className":"diged-home-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">EXPERIÊNCIA ANTES DA FERRAMENTA</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"display","level":2} -->
<h2 class="wp-block-heading has-display-font-size">Tecnologia muda. Experiência permanece.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-home-v1__reading diged-home-v1__offset","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__reading diged-home-v1__offset">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">A DIG.ED nasce de uma trajetória construída entre comunicação, educação, design, produção multimídia e tecnologia.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Esse repertório permite olhar para cada projeto além da ferramenta — entendendo primeiro o que precisa ser comunicado, aprendido ou experimentado.</p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Conheça a DIG.ED","className":"diged-home-v1__link","fontSize":"body-l","layout":{"type":"flex","justifyContent":"left"}} -->
<?php $diged_home_link( 'sobre', 'Conheça a DIG.ED' ); ?>
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__section diged-home-v1__cta","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-home-v1__section diged-home-v1__cta">
<!-- wp:group {"className":"diged-home-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__inner">
<!-- wp:heading {"fontSize":"display","level":2} -->
<h2 class="wp-block-heading has-display-font-size">O que você quer transformar em experiência?</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-home-v1__hero-bottom","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__hero-bottom">
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Uma ideia, uma mensagem, um conteúdo ou um conhecimento. Conte o ponto de partida — ajudamos a encontrar o caminho para colocá-lo em movimento.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-home-v1__cell","layout":{"type":"default"}} -->
<div class="wp-block-group diged-home-v1__cell">
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Vamos conversar","className":"diged-home-v1__link","fontSize":"body-l","layout":{"type":"flex","justifyContent":"left"}} -->
<?php $diged_home_link( 'contato', 'Vamos conversar' ); ?>
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
