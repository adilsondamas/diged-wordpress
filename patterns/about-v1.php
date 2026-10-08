<?php
/**
 * Title: DIG.ED — Sobre V1
 * Slug: diged/about-v1
 * Categories: featured
 * Description: Estúdio independente, trajetória e direção criativa e educacional.
 * Viewport Width: 1440
 * Inserter: yes
 */
$diged_about_link = static function ( $slug, $label ) {
    $page = get_page_by_path( $slug, OBJECT, 'page' );
    $attributes = array(
        'label' => $label . ' <span aria-hidden="true">↗</span>',
        'type' => 'custom', 'kind' => 'custom',
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
<!-- wp:group {"className":"diged-about-v1","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull diged-about-v1">
<!-- wp:group {"className":"diged-about-v1__section diged-about-v1__hero","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-about-v1__section diged-about-v1__hero">
<!-- wp:group {"className":"diged-about-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">SOBRE A DIG.ED</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"display-xl","level":1} -->
<h1 class="wp-block-heading has-display-xl-font-size">Experiência antes da ferramenta.</h1>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-about-v1__lead","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__lead">
<!-- wp:paragraph {"fontSize":"lead"} -->
<p class="has-lead-font-size">A DIG.ED é um estúdio independente que combina estratégia, design e produção digital para transformar ideias, conteúdos e conhecimento em experiências que comunicam, envolvem e ensinam.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__section diged-about-v1__trajectory","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-about-v1__section diged-about-v1__trajectory">
<!-- wp:group {"className":"diged-about-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">DE ONDE VIEMOS</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"diged-about-v1__trajectory-grid","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__trajectory-grid">
<!-- wp:group {"className":"diged-about-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__item">
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Uma trajetória construída entre comunicação, educação e tecnologia.</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__item">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">A DIG.ED nasce do encontro entre experiências em comunicação visual, produção multimídia, educação profissional e tecnologias digitais.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Esse percurso consolidou uma maneira de trabalhar que integra pensamento estratégico, organização do conhecimento, linguagem visual e capacidade de produção.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Hoje, esse repertório se conecta a novas possibilidades criativas e tecnológicas para desenvolver experiências digitais com propósito, clareza e qualidade.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__section diged-about-v1__principles-section","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-about-v1__section diged-about-v1__principles-section">
<!-- wp:group {"className":"diged-about-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">NOSSO OLHAR</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Pensar, desenhar e produzir.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-about-v1__principles","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__principles">
<!-- wp:group {"className":"diged-about-v1__principle","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__principle">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Entender antes de criar</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Começamos pelo contexto, pelas pessoas e pelo resultado que precisa ser alcançado.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__principle","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__principle">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Dar forma ao que importa</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Organizamos ideias e conteúdos para transformá-los em linguagem, estrutura e experiência.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__principle","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__principle">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Levar a ideia até a entrega</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Integramos design e produção para criar soluções que possam efetivamente entrar em uso.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__section diged-about-v1__founder","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-about-v1__section diged-about-v1__founder">
<!-- wp:group {"className":"diged-about-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">DIREÇÃO CRIATIVA E EDUCACIONAL</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"display","level":2} -->
<h2 class="wp-block-heading has-display-font-size">Experiência multidisciplinar. Direção próxima.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-about-v1__founder-grid","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__founder-grid">
<!-- wp:group {"className":"diged-about-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Adilson Damasceno</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Fundador da DIG.ED</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__item">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Com mais de duas décadas de experiência em comunicação, educação e produção digital, Adilson construiu uma trajetória que reúne criação multimídia, design de experiências de aprendizagem, desenvolvimento de conteúdos digitais e tecnologias educacionais.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Sua atuação conecta repertório criativo e experiência educacional para transformar desafios de comunicação e aprendizagem em soluções digitais concretas.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">À frente da DIG.ED, conduz pessoalmente a direção criativa e educacional dos projetos.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__section diged-about-v1__work","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-about-v1__section diged-about-v1__work">
<!-- wp:group {"className":"diged-about-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">NOSSA ATUAÇÃO</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Duas frentes. Um mesmo compromisso com a experiência.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-about-v1__offers","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__offers">
<!-- wp:group {"className":"diged-about-v1__offer","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__offer">
<!-- wp:group {"className":"diged-about-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">CREATE</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__item">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Comunicação essencial para lançar, apresentar ou mobilizar iniciativas.</p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Conheça CREATE","className":"diged-about-v1__link","fontSize":"body-l","layout":{"type":"flex"}} -->
<?php $diged_about_link( 'create', 'Conheça CREATE' ); ?>
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__offer","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__offer">
<!-- wp:group {"className":"diged-about-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">LEARN</h3>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-about-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__item">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Experiências digitais para ensinar, capacitar e compartilhar conhecimento.</p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Conheça LEARN","className":"diged-about-v1__link","fontSize":"body-l","layout":{"type":"flex"}} -->
<?php $diged_about_link( 'learn', 'Conheça LEARN' ); ?>
<!-- /wp:navigation -->
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
<!-- wp:group {"className":"diged-about-v1__section diged-about-v1__cta","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-about-v1__section diged-about-v1__cta">
<!-- wp:group {"className":"diged-about-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-about-v1__inner">
<!-- wp:heading {"fontSize":"display","level":2} -->
<h2 class="wp-block-heading has-display-font-size">Vamos dar forma ao que você tem em mente?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"lead"} -->
<p class="has-lead-font-size">Uma ideia, um conteúdo ou um desafio de comunicação ou aprendizagem. Conte seu ponto de partida e vamos conversar sobre as possibilidades.</p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Vamos conversar","className":"diged-about-v1__link","fontSize":"body-l","layout":{"type":"flex"}} -->
<?php $diged_about_link( 'contato', 'Vamos conversar' ); ?>
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
