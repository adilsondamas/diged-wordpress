<?php
/**
 * Title: DIG.ED — LEARN V1
 * Slug: diged/learn-v1
 * Categories: featured
 * Description: Oferta LEARN em oito seções editoriais editáveis.
 * Viewport Width: 1440
 * Inserter: yes
 */
$diged_learn_contact = static function ( $label ) {
    $page = get_page_by_path( 'contato', OBJECT, 'page' );
    $attributes = array( 'label' => $label, 'type' => 'custom', 'kind' => 'custom', 'url' => home_url( '/contato/' ) );
    if ( $page && 'publish' === $page->post_status ) {
        $attributes['id'] = (int) $page->ID;
        $attributes['type'] = 'page';
        $attributes['kind'] = 'post-type';
        $attributes['url'] = get_permalink( $page );
    }
    echo '<!-- wp:navigation-link ' . wp_json_encode( $attributes, JSON_HEX_TAG | JSON_HEX_AMP ) . ' /-->';
};
?>
<!-- wp:group {"className":"diged-learn-v1","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull diged-learn-v1">
<!-- wp:group {"className":"diged-learn-v1__section diged-learn-v1__hero","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-learn-v1__section diged-learn-v1__hero">
<!-- wp:group {"className":"diged-learn-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__inner">
<!-- wp:group {"className":"diged-learn-v1__hero-grid","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__hero-grid">
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">DIG.ED LEARN</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:heading {"fontSize":"display-xl","level":1} -->
<h1 class="wp-block-heading has-display-xl-font-size">Transforme conhecimento em aprendizagem.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"lead"} -->
<p class="has-lead-font-size">Estruturamos conteúdos e expertise para criar experiências de aprendizagem digitais que ajudam pessoas a compreender, desenvolver e aplicar conhecimento.</p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Quero transformar meu conhecimento","className":"diged-learn-v1__contact","textColor":"white","fontSize":"button","layout":{"type":"flex"}} -->
<?php $diged_learn_contact( 'Quero transformar meu conhecimento' ); ?>
<!-- /wp:navigation -->
<!-- wp:paragraph {"fontSize":"button","className":"diged-learn-v1__anchor"} -->
<p class="diged-learn-v1__anchor has-button-font-size"><a href="#como-funciona">Entenda como funciona</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__section diged-learn-v1__challenge","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-learn-v1__section diged-learn-v1__challenge">
<!-- wp:group {"className":"diged-learn-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">O DESAFIO</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Ter conhecimento não significa conseguir ensiná-lo.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-learn-v1__challenge-grid","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__challenge-grid">
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Conteúdo pode ser valioso e ainda assim ser difícil de compreender, organizar ou aplicar.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Quando há muito a dizer, o desafio não é simplesmente disponibilizar informação. É decidir o que importa, criar uma estrutura e transformar o conteúdo em uma experiência que faça sentido para quem aprende.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:paragraph {"fontSize":"h3"} -->
<p class="has-h3-font-size">Aprender exige mais do que acesso ao conteúdo. Exige intenção, estrutura e experiência.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__section diged-learn-v1__deliver","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-learn-v1__section diged-learn-v1__deliver">
<!-- wp:group {"className":"diged-learn-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">O QUE ENTREGAMOS</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Estrutura + design de aprendizagem + experiência + produção digital.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-learn-v1__deliver-grid","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__deliver-grid">
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Estrutura</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Organizamos conhecimento, objetivos, público e conteúdo para definir o que realmente precisa ser aprendido.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Design de aprendizagem</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Construímos percurso, narrativa, atividades e interações adequadas ao objetivo.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Experiência</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Definimos linguagem visual, ritmo, mídia e interface para tornar a aprendizagem clara e envolvente.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Produção digital</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Transformamos a solução em conteúdos, materiais e experiências prontas para uso.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__section diged-learn-v1__where","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-learn-v1__section diged-learn-v1__where">
<!-- wp:group {"className":"diged-learn-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">ONDE LEARN ENTRA</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Ensinar. Capacitar. Compartilhar expertise.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-learn-v1__where-grid","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__where-grid">
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Ensinar</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Transformar conhecimento complexo ou especializado em algo compreensível e aprendível.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Capacitar</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Criar experiências para desenvolver conhecimentos e competências em equipes, clientes ou públicos específicos.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Compartilhar expertise</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Estruturar o conhecimento de especialistas e organizações para que ele possa alcançar outras pessoas.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__section diged-learn-v1__first","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-learn-v1__section diged-learn-v1__first">
<!-- wp:group {"className":"diged-learn-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">O FORMATO VEM DEPOIS</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"display","level":2} -->
<h2 class="wp-block-heading has-display-font-size">Primeiro a aprendizagem. Depois a ferramenta.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-learn-v1__first-grid","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__first-grid">
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Um projeto LEARN pode resultar em um curso ou trilha digital, módulo de aprendizagem, treinamento, conteúdo interativo, vídeo educacional, material multimídia, onboarding ou combinação desses formatos.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:paragraph {"fontSize":"lead"} -->
<p class="has-lead-font-size">O formato não vem primeiro. Ele é consequência do que precisa ser aprendido, por quem e em qual contexto.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__section diged-learn-v1__process","layout":{"type":"default"},"tagName":"section","anchor":"como-funciona"} -->
<section id="como-funciona" class="wp-block-group diged-learn-v1__section diged-learn-v1__process">
<!-- wp:group {"className":"diged-learn-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__inner">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">COMO FUNCIONA</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h2","level":2} -->
<h2 class="wp-block-heading has-h2-font-size">Do conhecimento à experiência de aprendizagem.</h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"diged-learn-v1__steps","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__steps">
<!-- wp:group {"className":"diged-learn-v1__step","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__step">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">01</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Entender</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Objetivo, público, contexto e conhecimento disponível.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__step","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__step">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">02</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Estruturar</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Conteúdo, prioridades e arquitetura da aprendizagem.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__step","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__step">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">03</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Desenhar</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Percurso, linguagem, interação e experiência.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__step","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__step">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">04</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Produzir</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Conteúdo, visual, multimídia e componentes digitais.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__step","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__step">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">05</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"h3","level":3} -->
<h3 class="wp-block-heading has-h3-font-size">Entregar</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Uma experiência preparada para entrar em uso.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Escopo e prazo são dimensionados de acordo com conteúdo, complexidade e formato da experiência.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__section diged-learn-v1__difference","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-learn-v1__section diged-learn-v1__difference">
<!-- wp:group {"className":"diged-learn-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__inner">
<!-- wp:group {"className":"diged-learn-v1__difference-grid","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__difference-grid">
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:paragraph {"fontSize":"label"} -->
<p class="has-label-font-size">TECNOLOGIA + APRENDIZAGEM</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"fontSize":"display","level":2} -->
<h2 class="wp-block-heading has-display-font-size">Tecnologia muda. Aprender continua sendo humano.</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__item","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__item">
<!-- wp:paragraph {"fontSize":"body"} -->
<p class="has-body-font-size">Usamos tecnologia para ampliar possibilidades de criação, interação e produção — sem perder de vista como as pessoas compreendem, praticam e constroem conhecimento.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"diged-learn-v1__section diged-learn-v1__cta","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group diged-learn-v1__section diged-learn-v1__cta">
<!-- wp:group {"className":"diged-learn-v1__inner","layout":{"type":"default"}} -->
<div class="wp-block-group diged-learn-v1__inner">
<!-- wp:heading {"fontSize":"display","level":2} -->
<h2 class="wp-block-heading has-display-font-size">Que conhecimento você quer colocar em movimento?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"lead"} -->
<p class="has-lead-font-size">Conte o que você precisa ensinar, compartilhar ou transformar em experiência.</p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"never","ariaLabel":"Conversar sobre meu projeto","className":"diged-learn-v1__contact","textColor":"white","fontSize":"button","layout":{"type":"flex"}} -->
<?php $diged_learn_contact( 'Conversar sobre meu projeto' ); ?>
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
