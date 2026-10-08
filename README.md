# DIG.ED — WordPress

Repositório dedicado ao tema próprio de blocos DIG.ED. A raiz contém diretamente os arquivos do tema e corresponde a `wp-content/themes/diged` na instalação WordPress.
WordPress mínimo: 6.6 (`theme.json` versão 3). Usar uma versão estável mantida do WordPress e PHP no ambiente de destino.

## Escopo

Somente blocos nativos, sem plugins, bibliotecas externas, build, PHP próprio ou JavaScript próprio. Nenhuma página, menu ou conteúdo é criado na ativação. O título e a descrição do site vêm das configurações do WordPress; não são o wordmark nem uma nova assinatura.

O Design System V1 usa a Work Sans e as seis cores aprovadas, registrados em theme.json. Escalas e estilos básicos são hipóteses de implementação documentadas abaixo. Nenhum logo, ícone, imagem, página final ou componente próprio foi criado. O arquivo style.css identifica o tema; não contém regras que precisem ser carregadas. functions.php não é necessário nesta etapa.

## Arquivos

- `style.css`: identificação e requisitos do tema.
- `theme.json`: configurações compartilhadas pelo editor e site.
- `templates/index.html`: listagem de fallback com paginação e estado vazio.
- `templates/front-page.html`: estrutura genérica da página inicial; tem precedência tanto no modo de posts recentes quanto no de página estática e não é uma Home final.
- `templates/page.html`: título e conteúdo das páginas.
- `templates/single.html`: título e conteúdo dos posts.
- `templates/archive.html`: título contextual, listagem e paginação dos arquivos.
- `templates/404.html`: mensagem e busca nativa para URL inexistente.
- `parts/header.html` e `parts/footer.html`: áreas compartilhadas e editáveis.
- `patterns/`, `assets/css/` e `assets/js/`: reservadas; `.gitkeep` apenas mantém as pastas no Git.

## Validação em WordPress — somente após autorização do ambiente

1. Em uma instalação local descartável ou staging autorizado, copiar os arquivos versionados da raiz deste repositório para `wp-content/themes/diged`. Para upload pelo painel, empacotar esses arquivos dentro de uma única pasta `diged` no ZIP, sem incluir `.git/`.
2. Em Aparência → Temas, conferir DIG.ED e ativar. Abrir Aparência → Editor; verificar que templates e partes abrem sem avisos de blocos inválidos.
3. Criar conteúdo temporário de teste. Pela hierarquia do WordPress, `front-page.html` tem precedência na página inicial independentemente da opção em Configurações → Leitura; uma página estática não é requisito técnico para carregar o template. Para testar os blocos de título e conteúdo desta fundação com uma página específica, selecionar uma página inicial estática. O template atual não contém um Query Loop: a opção de posts recentes não o transforma automaticamente em uma listagem. Referência: https://developer.wordpress.org/themes/templates/template-hierarchy/#front-page-hierarchy
4. Editar título e conteúdo da página, salvar e conferir o frontend. Testar página comum e post individual.
5. Testar arquivo de categoria com posts, paginação com posts suficientes, estado vazio e uma URL inexistente. Se houver página de posts configurada, verificar a listagem de fallback.
6. Conferir 320 px, 768 px e desktop: texto, imagem e busca sem rolagem horizontal. Conferir teclado, foco visível, busca com label e link nativo de pular ao conteúdo. Os templates usam um único main; não removemos os recursos de acessibilidade do WordPress.
7. Verificar console e log PHP. Não considerar ativação, acessibilidade ou renderização confirmadas apenas pela revisão dos arquivos.
8. Remover o conteúdo de teste ao finalizar.

## Git e manutenção

Os arquivos do tema são a fonte de verdade. Personalizações de templates e estilos salvas no Editor do Site podem sobrepor os arquivos: exportar/reconciliar alterações aprovadas no Git antes de publicar. Conteúdo editorial permanece no banco de dados, com backup separado.

Não incluir banco, credenciais, uploads ou o núcleo WordPress neste repositório. Nenhum deploy ou alteração no staging/produção faz parte desta entrega.

## Fluxo de publicação manual

`Codex/local → main → GitHub → deploy manual Hostinger → wp-content/themes/diged`

- Usar somente a branch `main`, no remoto `origin` (`https://github.com/adilsondamas/diged-wordpress.git`).
- Revisar e validar localmente, criar o commit e fazer push para `origin/main`.
- Na integração Git da Hostinger do staging, selecionar este repositório e a branch `main`. O destino deve ser a pasta do tema: `public_html/wp-content/themes/diged`, relativo ao site correto. Não usar `public_html/wp-content` como destino.
- Manter auto-deploy desativado. Executar deploy/redeploy manual somente após autorização. Configurar a integração inicialmente também pode disparar um deploy e exige autorização.
- A raiz do repositório é publicada diretamente no destino, sem etapa de build, branch de deploy, GitHub Actions ou dependências adicionais. `README.md` e `.gitignore` permanecem na raiz do tema por decisão do projeto.
- Antes da primeira publicação, confirmar no painel o caminho do staging e as condições para arquivos já existentes no destino. Não apagar pastas de WordPress, plugins ou uploads para preparar o deploy.
- Registrar o hash publicado e manter backup do tema. Para rollback, restaurar a versão aprovada por um novo commit na `main`, fazer push e redeploy manual. Dados e personalizações salvos no banco exigem backup separado.

A estrutura do tema pode ser validada localmente; ativação e renderização precisam de uma instalação WordPress. Esta reorganização não realiza deploy nem ativação.


## Design System V1

### Decisões aprovadas

- Work Sans como família principal. Não recria nem substitui o wordmark proprietário; o bloco de título do site continua sendo texto de configuração do WordPress.
- `brand`: coral #CB4129; `accent`: azul-céu #52B8F2; `black`: #000000; `graphite`: #303030; `off-white`: #F3F1EE; `white`: #FFFFFF.
- Coral representa identidade/presença humana; azul é contraponto funcional/digital secundário. O azul é um token disponível, sem aplicação global automática. A proporção visual depende da composição editorial, não é imposta por theme.json.

### Escala editorial solicitada

Extremos e métricas definidos nesta revisão. Pixels abaixo assumem raiz de 16 px; o código usa rem e clamp(). Peso 500 está disponível para usos futuros, sem adicionar um estilo não solicitado.

| Preset | Mobile / desktop | Peso | Entrelinha | Tracking |
| --- | --- | --- | --- | --- |
| Display XL (`display-xl`) | 52 / 96 px | 600 | 0.92 | -0.03em |
| Display (`display`) | 44 / 72 px | 600 | 0.95 | -0.03em |
| H1 (`h1`) | 40 / 56 px | 600 | 1 | -0.02em |
| H2 (`h2`) | 32 / 40 px | 600 | 1.05 | -0.02em |
| H3 (`h3`) | 24 / 28 px | 600 | 1.15 | 0em |
| H4 (`h4`) | 20 / 22 px | 600 | 1.2 | 0em |
| Lead (`lead`) | 21 / 24 px | 400 | 1.4 | 0em |
| Body L (`body-l`) | 18 / 20 px | 400 | 1.5 | 0em |
| Body (`body`) | 16 / 16 px | 400 | 1.55 | 0em |
| Small (`small`) | 14 / 14 px | 400 | 1.45 | 0em |
| Label (`label`) | 14 / 14 px | 600 | 1.2 | 0em |
| Button (`button`) | 16 / 16 px | 600 | 1.2 | 0em |

### Hipóteses técnicas revisáveis

- Interpolação linear entre viewport de 390 e 1440 px (24.375–90rem na referência de 16 px), com limites mínimo/máximo em rem. Abaixo/acima, mantém os extremos; não fixa o tamanho raiz do navegador. Os endpoints de viewport são hipótese técnica, não decisão de identidade.
- Tracking moderado: -0.03em nos displays e -0.02em em H1/H2; zero nos demais. Revisar acentos, quebras e legibilidade com conteúdo real. Entrelinhas menores que 1 não usam altura fixa ou corte por overflow; ainda exigem revisão visual em títulos multilinha.
- H1–H4 recebem automaticamente suas métricas por elemento HTML. H5/H6 mantêm os tamanhos prévios de 16/14 px, agora com peso 600 e entrelinha 1.2 como fallback provisório; não adicionam presets à escala.
- O preset visual não muda a hierarquia HTML: um H1 pode receber Display XL sem virar outro elemento. Label é somente um estilo de texto; não cria um campo ou elemento label funcional.
- Body é o padrão global. Button configura somente a tipografia do elemento nativo; não cria componente, forma, cor ou comportamento novo.
- Larguras preservadas: conteúdo 48rem e largura ampla 72rem. Fundo branco, texto grafite, títulos pretos; links coral sublinhados. Não existe troca automática de cor por contexto.

### Aplicação semântica no Gutenberg

`fontSizes` registra tamanhos, mas não aceita peso, entrelinha e tracking por preset. Essas métricas usam as propriedades nativas em `styles.elements` para H1–H4 e botão, e 12 regras mínimas em `styles.css` dentro do próprio theme.json para acompanhar a escolha do preset (`.has-…-font-size`). Não há arquivo CSS externo, enqueue, PHP ou JS. O CSS adicional cobre uma limitação real dos presets; não é uma biblioteca de componentes.

Os presets são destinados a blocos de texto. Aplicá-los a um container não garante substituir estilos explícitos dos elementos filhos. Negrito/ênfase em linha seguem disponíveis. O controle livre de peso continua desligado mesmo com 400–700 disponíveis na fonte. Os slugs `small`, `body`, `lead` e `display` foram mantidos; `heading`, que era provisório, foi substituído por `h2`. Se tiver sido usado em conteúdo salvo fora do Git, revisar esse conteúdo antes de publicar; nenhum banco foi alterado.

### Espaçamento

- Micro/componente: 20 = 4 px, 30 = 8 px, 40 = 16 px, 50 = 24 px, 60 = 32 px, 70 = 48 px.
- Macro/layout: 80 = 64 px (4rem), 90 = 96 px (6rem), 100 = 128 px (8rem).
- Mantidos: intervalo padrão entre blocos no token 50 e margens laterais no token 40. Os tokens macro só são aplicados quando selecionados no conteúdo, como no pattern CREATE V1.

### Contraste calculado

Razões calculadas com luminância relativa sRGB. AA: 4.5:1 para texto normal; 3:1 para texto grande (24 px regular ou aproximadamente 18.7 px em negrito). A paleta não torna toda combinação acessível.

| Texto / fundo (tokens) | Contraste | Resultado |
| --- | --- | --- |
| graphite / white | 13.20:1 | AA texto normal |
| brand / white | 4.85:1 | AA texto normal |
| brand / off-white | 4.30:1 | Somente texto grande (AA) |
| accent / white | 2.21:1 | Não atende AA para texto |
| accent / black | 9.50:1 | AA texto normal |
| black / accent | 9.50:1 | AA texto normal |
| white / brand | 4.85:1 | AA texto normal |
| brand / black | 4.33:1 | Somente texto grande (AA) |

Coral sobre branco atende texto normal; azul sobre branco não deve ser usado como texto nem como único contorno essencial de um controle. Azul sobre preto e texto preto sobre azul têm contraste adequado. Coral sobre preto fica reservado a texto grande ou usos não textuais que satisfaçam seu critério específico.

### Gutenberg controlado

- Disponibiliza somente a família, paleta, tamanhos e espaçamentos definidos pelo tema, sem presets de cores/tamanhos/espaçamentos padrão do WordPress.
- Desabilita cores, gradientes, duotones, tamanhos e espaçamentos personalizados nos controles compatíveis; oculta ajuste livre de entrelinha, peso, tracking e transformação de texto.
- Desabilita controles de borda, presets de sombra e larguras personalizadas de conteúdo. Mantém seleção dos tokens de margem, padding e intervalo nos blocos que os suportam.
- Isso organiza a interface nativa; não é uma barreira de segurança. Administradores, HTML manual, estilos existentes no banco e controles específicos de alguns blocos (por exemplo dimensões de mídia ou Espaçador) podem contornar essas opções. Não foram adicionados filtros PHP nem bloqueios de conteúdo.
- Não remove formatação semântica em linha, como forte e ênfase, nem os recursos nativos de foco/teclado.

### Fontes locais e licença

Work Sans Variable WOFF2, distribuição Google Fonts v24, obtida pela API oficial:
https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400..700;1,400..700&display=swap

Arquivos normal e itálico, cada um dividido em latin, latin-ext e vietnamese, registrados com unicodeRange e fontWeight `400 700`. Atendem 400, 500, 600 e 700 reais por variação, mantendo itálico. O navegador seleciona subconjuntos conforme os caracteres usados. Os subconjuntos latin incluem os acentos habituais do português; os demais preservam cobertura adicional.

Escolha técnica: evitar arquivos separados para cada peso/estilo. O pacote variável completo soma 190384 bytes (aproximadamente 186 KiB); os dois latin somam 98788 bytes (aproximadamente 96.5 KiB). Os quatro estáticos anteriores somavam 285160 bytes e ainda não incluíam 500/600. A economia não se deve somente à variação: as distribuições e a divisão em subconjuntos também diferem. Não é garantia de menor transferência em uma página que utilize apenas um peso.

Todos os arquivos ficam em `assets/fonts/work-sans/`, com font-display swap e fallback de sistema; não há requisição externa de fontes em runtime. Licença SIL Open Font License mantida em `OFL.txt`, do projeto Work Sans. Os quatro WOFF2 estáticos foram substituídos, sem duplicação.

Proveniência e integridade dos arquivos:

- `WorkSans-italic-vietnamese.woff2`
  - Origem: https://fonts.gstatic.com/s/worksans/v24/QGYqz_wNahGAdqQ43Rh_eZDkv_1i4_D2E4A.woff2
  - SHA-256: `73e14126fe55cec274787f0432946321b64071a94b51d38e5864908e22e0b8ca`
- `WorkSans-italic-latin-ext.woff2`
  - Origem: https://fonts.gstatic.com/s/worksans/v24/QGYqz_wNahGAdqQ43Rh_eZDlv_1i4_D2E4A.woff2
  - SHA-256: `e5431364e5d49261787f4cdd0c8231b8fceb8e647d5940e788a8c382a32f88d4`
- `WorkSans-italic-latin.woff2`
  - Origem: https://fonts.gstatic.com/s/worksans/v24/QGYqz_wNahGAdqQ43Rh_eZDrv_1i4_D2.woff2
  - SHA-256: `b87f48add7ec30528eec5bb08a62bedff58ec6093097d817d3def0c54691ad45`
- `WorkSans-normal-vietnamese.woff2`
  - Origem: https://fonts.gstatic.com/s/worksans/v24/QGYsz_wNahGAdqQ43Rh_c6DptfpA4cD3.woff2
  - SHA-256: `a7685ec477b23edc368efaa59d8f717a1e01208b68f52982673552a04f9398d3`
- `WorkSans-normal-latin-ext.woff2`
  - Origem: https://fonts.gstatic.com/s/worksans/v24/QGYsz_wNahGAdqQ43Rh_cqDptfpA4cD3.woff2
  - SHA-256: `fe0af300ce56932381af82ed960d8582dc8308ac2b7b48dd505dd49573a83ada`
- `WorkSans-normal-latin.woff2`
  - Origem: https://fonts.gstatic.com/s/worksans/v24/QGYsz_wNahGAdqQ43Rh_fKDptfpA4Q.woff2
  - SHA-256: `72cd8f67849cc714f3364eeeb378df9a49f4aff00e6a3640fad36c9c93a9b197`

### Validação desta etapa

Revisão local: tokens, sintaxe e propriedades do schema WordPress 6.6, referências de presets/arquivos, extremos de clamp, assinatura WOFF2, licença e contrastes. Sem dependências instaladas. A renderização no Gutenberg/WordPress não foi executada localmente: este ambiente não dispõe de WordPress/PHP.

Após aprovação, conferir no staging: carregamento local dos subconjuntos variáveis e pesos 400/500/600/700, acentos em português, negrito/itálico, paridade editor/frontend, seletores restritos, foco de teclado e layout em 320 px e desktop com zoom de 200%. Estilos globais anteriormente salvos no banco podem sobrepor os arquivos e devem ser inspecionados antes de concluir a validação visual. Nenhum commit, push ou deploy integra esta etapa sem autorização.


## CREATE V1 — pattern para validação

`patterns/create-v1.php` registra automaticamente o pattern **CREATE V1** (`diged/create-v1`) na categoria nativa Destaques. O arquivo PHP contém apenas o cabeçalho de registro e markup de blocos, sem lógica, queries ou criação de conteúdo. Não requer functions.php, plugins, template exclusivo ou bloco personalizado.

### Inserção manual no WordPress

Após autorização de deploy, criar uma página chamada **CREATE**, slug **create**, selecionando o template **Página com título no conteúdo** (`content-title`) nas configurações da página. No editor, inserir **CREATE V1** pelo seletor de patterns (Destaques). Salvar como rascunho e visualizar antes de publicar. Não inserir o pattern duas vezes na mesma página: ele contém âncoras fixas.

O hero contém o único H1, com preset Display XL. O template optativo não imprime o título administrativo CREATE; o template padrão de páginas, header e footer permanecem intactos. O pattern é uma composição inicial não sincronizada: após inserido, seu conteúdo fica no banco e é editável; mudanças futuras no arquivo não atualizam cópias já inseridas.

### Estrutura

Sete grupos section: hero, desafio, entregas, contextos de uso, processo, diferencial e CTA final. Composição em uma coluna, grupos, parágrafos, headings H1/H2/H3, separadores e botões nativos. Não há imagens, ícones, formulários, cards, scripts ou animações.

- CTA secundário → `#como-funciona`.
- CTA primário → `#conversar` (seção final).
- CTA final → `#contato-provisorio`, aviso visível de que o canal está pendente e não envia mensagens. Substituir somente quando o destino real for aprovado.

### Decisões provisórias de composição

- Uma coluna editorial limitada à largura de conteúdo existente, sem alargamentos ou grids novos.
- Hero em Display XL; contextos, diferencial e CTA final em Display; demais títulos de seção em H2.
- Ritmo macro provisório, em padding de topo e rodapé: hero 128 px (100); desafio 64 px (80); entregas 96 px (90); contextos de uso 96 px (90); processo 64 px (80); diferencial 96 px (90); CTA final 96 px (90). Margens internas laterais de 16 px (40) e intervalos internos de 32 px (60) preservados. Esses paddings se somam entre seções adjacentes, além do intervalo do grupo externo; não representam a distância total entre conteúdos. Nesta V1 são iguais em mobile/desktop, sem CSS de breakpoint. Validar especialmente a extensão vertical no mobile antes de considerar o ritmo definitivo.
- Entregas em superfície off-white e separadores grafite; diferencial preto com textos brancos e label azul. Não há texto coral sobre off-white ou preto.
- Botões primários coral/branco, secundário branco/preto com estilo outline nativo, bordas retas. Apenas atributos de blocos; nenhum CSS adicional. Botões podem quebrar texto e a linha de botões usa flex-wrap.
- “Lançar / Apresentar / Mobilizar” em três linhas explícitas no mesmo H2. O hero inclui oportunidades opcionais de hifenização em “comunicação” e “movimento” para telas estreitas, sem alterar a copy visível quando houver espaço.

### Validação e limites

Verificar localmente: comentários/atributos de blocos, marcação HTML, âncoras únicas com destinos existentes, copy, cores e ausência de mudanças em theme.json, templates ou parts. Nenhum CSS, JS ou PHP funcional foi adicionado.

A validação local é estática: não há WordPress/PHP neste ambiente. No staging, conferir ausência de avisos de blocos inválidos no editor, largura de 320/390/768/1440 px, zoom de 200%, foco de teclado, acentos, hifenização, títulos com entrelinha abaixo de 1, quebra dos CTAs e ausência de overflow. Não há alturas fixas ou overflow oculto para cortar texto. Conferir também possíveis estilos salvos no banco e margens que o WordPress aplica aos grupos com fundo.

Esta V1 não é o design final. Não cria a página por código e não foi publicada automaticamente.


### Template optativo: Página com título no conteúdo

Arquivo `templates/content-title.html`, slug `content-title`, registrado em `customTemplates` no theme.json para páginas (`postTypes: ["page"]`). Equivale ao template padrão, removendo somente `core/post-title`. Mantém header, main, post-content e footer. Não muda `templates/page.html` e não é exclusivo de CREATE.

Selecionar esse template manualmente para CREATE. O nome CREATE permanece no cadastro da página; a frase principal do hero é o H1 visível. Em outras páginas que adotarem esse template, o editor deve garantir um H1 no conteúdo.

Hierarquia do pattern: label DIG.ED CREATE em parágrafo; frase do hero como único H1; seis títulos de seção em H2; três entregas, três contextos de uso e cinco etapas em H3. A escolha de Display/Display XL altera a aparência, não o nível semântico.

### Limitação de macrospacing responsivo

Os atributos de padding dos grupos nativos usados nesta composição não aceitam valores por breakpoint, e theme.json não oferece uma configuração equivalente para essa instância. Os valores mobile propostos (hero 96 px, demais seções 64 px) exigiriam CSS responsivo adicional ou outra estratégia de composição. Conforme orientação, não foi acrescentado CSS nem forçada uma solução fluida que alterasse os valores solicitados.

Mantido neste momento, em topo e rodapé: hero 128; desafio 64; entregas 96; contextos 96; processo 64; diferencial 96; CTA final 96 px, tanto em desktop quanto mobile. A redução fica pendente da inspeção visual. Nenhum token global foi alterado.

## CREATE V2 — composição ampla e experimento cromático

Pattern novo `patterns/create-v2.php`, nome **CREATE V2**, slug `diged/create-v2`. A V1 permanece disponível para comparação. Inserir a V2 em uma página/rascunho usando **Página com título no conteúdo**; não inserir V1 e V2 juntas, pois compartilham âncoras. Patterns não sincronizados já inseridos não são atualizados pelo arquivo: substituir a instância deliberadamente ou usar um rascunho de comparação.

### Estrutura e larguras locais

Os tokens globais atuais são contentSize 48rem (768 px) e wideSize 72rem (1152 px). Não foram alterados: não atendem exatamente aos limites propostos e mudar globalmente afetaria outras páginas.

A V2 usa configurações nativas locais de layout dos grupos: wide 76rem (1216 px), content 64rem (1024 px), text 42rem (672 px), na referência de 16 px. Textos de leitura em grupos estreitos ficam alinhados à esquerda, e não centralizados dentro do espaço disponível. Limites são máximos, não larguras fixas de viewport.

O único ajuste de template é `align: full` no bloco post-content de `templates/content-title.html`: libera os alinhamentos full dos patterns sem remover o layout constrained para blocos comuns. Sem isso, a área de conteúdo era limitada pelo main a 768 px antes mesmo de chegar ao pattern. Template padrão de página e parts não mudaram.

- Hero: área de 1216 px, Display XL preservado, lead limitado a 672 px. CTA secundário mantém branco/preto e ganha borda preta explícita de 2 px por atributo nativo do botão.
- Desafio: colunas 25/75 para label e conteúdo, área de 1024 px.
- Entregas: superfície coral full; interior de 1216 px; três colunas coordenadas, cada uma com linha branca nativa acima. Sem cards ou bordas laterais que precisariam mudar no mobile.
- Onde CREATE entra: duas áreas 50/50 dentro de 1216 px; statement à esquerda e explicações à direita. “Apresentar.” tem marcação inline de cor coral, mantendo o mesmo H2 e fundo transparente.
- Processo: linhas com colunas 10/25/65 para número, H3 e explicação, com separadores horizontais; preserva o travessão da copy no campo do número.
- Diferencial: superfície preta full, conteúdo alinhado a 1216 px e parágrafos a 672 px; branco e label azul preservados.
- CTA final: statement em área de 1216 px, mantendo Display; texto a 672 px e destino provisório preservado.

A copy visível é idêntica à V1, incluindo os CTAs e aviso provisório. Hierarquia preservada: 1 H1, 6 H2 e 11 H3. Nada de imagens, ícones, animação ou componentes customizados.

### Contraste dos experimentos

Luminância relativa sRGB, WCAG AA para texto corrente: mínimo 4.5:1.

| Texto / fundo | Ratio | Decisão |
| --- | --- | --- |
| Branco / coral | 4.85:1 | Aplicado em todo o conteúdo de Entregas |
| Preto / coral | 4.33:1 | Não aplicado ao texto corrente |
| Grafite / coral | 2.72:1 | Rejeitado |
| Coral / branco | 4.85:1 | Aplicado a “Apresentar.” e ao H2 inteiro do Processo |
| Branco / preto | 21:1 | Preservado no Diferencial |
| Azul / preto | 9.50:1 | Preservado apenas como acento secundário |

Divisores brancos no coral usam o separador nativo, com sua opacidade padrão; são organização decorativa, não contornos de controles ou portadores exclusivos de informação. A percepção final deve ser conferida com o CSS gerado no WordPress. Nenhuma cor nova foi criada.

### Responsividade e limitações

Columns usa empilhamento nativo em telas estreitas (breakpoint padrão do WordPress, normalmente 782 px). Não foram criados breakpoints específicos, CSS adicional ou regras de tablet. Ao empilhar, a ordem de leitura permanece label → conteúdo e número → título → explicação.

Os paddings macro anteriores permanecem: 128/64/96/96/64/96/96 px, inclusive no mobile. Redução por breakpoint não é oferecida pelos atributos de padding usados. Se a inspeção confirmar a necessidade, a proposta é CSS mínimo restrito à raiz da CREATE V2 e suas seções, com media query para trocar apenas padding vertical pelos tokens 96 no hero e 64 nos demais. Esse CSS NÃO foi implementado.

Conferir no WordPress a faixa full com o root padding, largura efetiva do post-content, colunas na transição de tablet, quebra dos botões, palavras longas dos displays e ausência de overflow em 320/390/768/1024/1440 px. Se necessário, propor ajuste de breakpoint somente para as colunas da CREATE V2, sem reduzir tokens tipográficos globais. A V2 não foi renderizada em um WordPress local nesta etapa: validação executada é estática, não prova visual ou de serialização pelo editor.

Validação local: atributos JSON e pares de blocos, HTML, igualdade da copy normalizada com V1, âncoras, headings, cálculo de contraste e preservação byte a byte de theme.json, V1, page.html e parts. Nenhum commit, push ou deploy nesta rodada.

## CREATE V2.1 — legibilidade e respiro (revisão local)

Esta revisão substitui as observações anteriores sobre Body 16 px, H2 coral do Processo e ausência de CSS responsivo na V2. Não altera a arquitetura, copy ou o arquivo da V1.

### Alterações

- Token global `body`: 1.125rem (18 px na raiz de referência de 16 px), peso 400 e entrelinha 1.55 preservados. Não alteramos font-size do elemento html; larguras e spacing em rem continuam com os mesmos valores.
- H5 tinha referência a Body: fixado em 1rem (16 px), conservando seu tamanho anterior. H1–H4, H6 e displays preservados. Labels, Small, Lead, Body L e Button mantêm os valores anteriores.
- Captions usam explicitamente Small (14 px), peso 400 e entrelinha 1.45 para não crescerem por herança. Essa normalização alcança captions suportadas pelo elemento `caption` do WordPress, não qualquer parágrafo informalmente usado como legenda.
- H2 do Processo retorna ao preto; labels/números coral e “Apresentar.” coral preservados.
- CTA final: padding inline passa do token 90 (96 px) para 100 (128 px) em topo/base no desktop. Sem mudança de copy ou superfície.

### CSS mínimo

Regras adicionadas a `styles.css` dentro de theme.json, sem arquivo/enqueue/PHP. Todas as regras novas de layout se limitam a `.diged-create-v2`, classe adicionada ao grupo raiz do pattern. O CSS semântico tipográfico existente permanece intacto.

- `min-width: 0` nas colunas e `overflow-wrap: anywhere` em texto/botões: quebra emergencial apenas quando uma palavra não cabe; não usa overflow hidden nem reduz fonte.
- Até 1024 px: empilha todas as colunas, gap de 32 px (token 60), padding vertical 64 px (80) nas seções; hero e CTA final ficam com 96 px (90).
- Até 781 px: CTA final cai para 64 px; hero permanece em 96 px; demais seções em 64 px.
- Acima de 1024 px: mantém colunas, larguras e ritmo desktop; hero e CTA final 128 px, desafio/processo 64 px, demais 96 px.

1024 px é a hipótese inicial para evitar três colunas estreitas e displays apertados em tablet; 781 px acompanha a divisão móvel das Columns nativas (782 px). Validar no WordPress antes de consolidar. `!important` é restrito aos paddings que precisam superar valores inline do bloco e ao wrap/flex-basis que precisa superar regras nativas de Columns. Sem JS, plugin, componente ou breakpoint adicional.

### Alcance global do Body 18

Os dois patterns possuem 15 parágrafos explícitos `body`: desafio (1), entregas (3), contextos (3), etapas (5), diferencial (2) e introdução do CTA final (1). Esses textos passam a 18 px tanto na V2 quanto na V1, sem editar o arquivo da V1. A V1 mantém sua composição, mas não é uma captura congelada dos estilos globais.

Também herdam a nova base textos sem tamanho explícito: parágrafos/listas do conteúdo das páginas/posts, resumo de posts, descrições de arquivos, mensagens de lista vazia, texto da 404, texto de paginação e descrição do site no footer quando não houver tamanho específico. Elementos nativos com regras próprias em em podem acompanhar proporcionalmente essa base. O título textual do site pode ter regra própria do WordPress; não representa o wordmark. Conteúdo e estilos salvos no banco podem alterar a herança — não é possível inventariar exatamente as instâncias publicadas somente pelo Git.

Botões têm token Button explícito de 16 px; labels 14 px e Small 14 px; captions recebem Small. Headings/displays e todos os outros presets foram preservados. Links inline acompanham o tamanho do texto ao redor. Conteúdo que tiver sido manualmente definido em px continua com esse valor.

### Validação e aplicação

Validação estática local: copy e hierarquia preservadas, JSON/atributos de blocos, HTML/âncoras, integridade da V1/templates/parts, isolamento dos seletores e alterações exatas dos presets. Sem WordPress local para validar renderização real. Conferir 320/390/768/1024/1440 px, zoom 200%, colunas empilhadas, textos longos e foco no staging após autorização.

Um pattern já inserido não recebe estas alterações de markup automaticamente: a instância precisa ser substituída/atualizada deliberadamente para receber a classe da V2, o H2 preto e o novo padding. A alteração global de Body se aplica após deploy do tema, independentemente da substituição do pattern, salvo overrides do banco. Nenhum commit/push/deploy nesta revisão.

## CREATE V2.2 — refinamento mobile

Regras locais adicionais dentro de `.diged-create-v2`, sem modificar containers ou composição desktop:

- Até 781 px, H1/H2/H3 usam overflow-wrap normal, word-break normal e hyphens none. Isso neutraliza a regra anterior overflow-wrap anywhere somente nos headings mobile. Removidos dois soft hyphens do hero (comunicação/movimento); nenhuma palavra ou copy foi alterada.
- H1 Display XL no mobile: clamp entre 40 px em 320 px e 44 px em 390 px, limitado a 44 px até 781 px. Usa rem e mantém peso 600, tracking e entrelinha. A mesma faixa é aplicada somente aos displays da seção preta e CTA final. O statement Lançar/Apresentar/Mobilizar e outros headings não têm tamanho alterado. Acima de 781 px, os tamanhos anteriores permanecem.
- Entregas: gap vertical entre colunas empilhadas passa de 32 para 48 px no mobile.
- Processo mobile: 48 px antes de cada divisor, 16 px do divisor para a linha/etapa e 16 px entre número, título e descrição. O divisor segue visualmente com a etapa seguinte, sem wrappers novos ou mudança na ordem.
- Body continua 18 px/1.55, sem alteração global. Cor coral e empilhamento preservados.

### Causa verificada do H2 coral

Na inspeção somente leitura de `https://staging.diged.com.br/create/`, o HTML retornou o H2 do Processo com classes `wp-block-heading has-h2-font-size has-brand-color has-text-color`. A folha gerada inclui `.has-brand-color{color: var(--wp--preset--color--brand) !important;}`. Portanto, a cor coral decorre da classe persistente no HTML servido; o arquivo local do pattern já usa has-black-color. Não é possível determinar só pelo HTML se o conteúdo salvo ou cache explica a divergência.

Adicionada correção específica `.diged-create-v2 #como-funciona h2` em preto com !important para superar a classe de cor explícita da instância existente. Essa correção de cor vale em todas as larguras; não altera composição desktop, labels/números ou Apresentar. Também é recomendável atualizar o atributo textColor do H2 salvo no editor após autorização, para manter o conteúdo coerente; não foi alterado nenhum dado do staging.

O !important de font-size mobile supera as classes de tamanho que o WordPress gera com !important. Não foram modificadas as métricas globais. Limite: sem quebras emergenciais, palavras excepcionalmente longas ainda podem exceder larguras muito estreitas/zoom elevado; não se oculta overflow para mascarar isso. Validar com a fonte real no WordPress em 320/390/781 px e zoom, sobretudo nos demais H2/H3 que mantêm os tamanhos aprovados.

### Pendência após validação visual da V2.2

O override de cor do H2 do Processo é temporário, aceito somente para esta validação. Após autorização, corrigir o atributo textColor/markup da instância salva na página, conferir o HTML servido e então testar a remoção da regra `.diged-create-v2 #como-funciona h2`. Não manter o override como substituto permanente da limpeza do conteúdo. Nenhum conteúdo do banco foi alterado nesta rodada.

## Header V1 — wordmark oficial

`parts/header.html` referencia `diged/header`, pattern técnico não disponível no inseridor, definido em `patterns/header.php`. O pattern contém somente blocos nativos Group, Image, Navigation e Navigation Link; PHP é usado apenas para resolver a URL do ativo no tema e a Home, escapadas por esc_url. Isso evita domínio fixo, recriação textual da marca e dependência de um attachment ID do banco. Não há registro manual ou functions.php. O header continua editável pelo Editor do Site.

Ativo: original fornecido em `/Users/adilsondamasceno/Desktop/diged-logo.png`, RGBA 1024 × 576. Recorte por alfa não zero: caixa (57,151)–(951,373), limites finais exclusivos. Resultado `assets/images/diged-logo-web.png`, 894 × 222, 11373 bytes. Comparação dos bytes RGBA decodificados do recorte confirmou igualdade exata; sem resize, recoloração ou redesenho. O arquivo original externo foi preservado e não havia original versionado a substituir.

Desktop: container 76rem (1216 px), fundo branco, logo à esquerda em 200 px de largura, navegação à direita. Padding vertical 32 px, lateral 16 px; sem altura fixa, sombra ou borda decorativa. Links CREATE `/create/`, LEARN `/learn/`, Sobre `/sobre/`, Vamos conversar `/contato/`. Ação final em peso 600 e sublinhado; demais itens peso 500. São destinos solicitados, não confirmação de que as páginas existem.

Até 1024 px: logo 180 px (aproximadamente 45 px de altura), padding vertical 24 px; botão nativo abre overlay branco com links pretos. A escolha evita apertar a navegação entre 600 e 1024 px; o bloco Navigation mantém seus scripts nativos para abrir/fechar, teclado e foco. Não foi adicionado JavaScript próprio. A largura de 390 px comporta logo, gap e botão de 44 px.

CSS em styles.css dentro de theme.json, restrito ao header/classes diged-header: dimensões do ativo, alinhamento, padding, mínimo de toque 44 px, hover coral, foco preto com outline e breakpoint do Navigation. Preto/branco 21:1; coral/branco aproximadamente 4.85:1. O link da marca tem nome acessível `DIG.ED — início`. Escala tipográfica e paleta não foram alteradas.

Validação local: JSON, comentários/atributos de blocos, caminhos de arquivos, integridade pixel a pixel do recorte, preservação das CREATE/templates/footer e ausência de JS/plugin. Sem PHP/WordPress local para executar o pattern e validar serialização/renderização. Conferir após autorização no WordPress: logo/URL, menu em 390/768/1024/1440 px, Tab/Shift+Tab, Enter, Escape, foco no retorno e ausência de overflow. Customizações anteriores do header no banco podem prevalecer sobre parts/header.html; revisar no Editor do Site sem apagar alterações não auditadas. Nenhum commit, push ou deploy nesta etapa.

## Header V2 — Shift (local)

Evolução sobre Header V1. Ativo, tamanhos 200/180 px, fundo branco, container 76rem e Navigation nativo preservados. Nenhum JS, plugin, framework ou animação de entrada. Somente transições CSS de 180 ms.

Desktop: normal preto; hover/focus/active e página atual coral. O texto sobe 2 px em hover/focus; a área clicável não se desloca. Página atual usa os indicadores nativos `aria-current="page"` ou `current-menu-item`. O CTA mantém peso 600, perde sublinhado permanente e ganha ↗ em span aria-hidden, com deslocamento adicional de 2 px na diagonal. Nome acessível continua Vamos conversar. Não há conteúdo duplicado para produzir o efeito.

Mobile/tablet até 1024 px: mecanismo nativo de abertura/fechamento. Overlay preto fixo cobre viewport, permite rolagem quando necessário e apresenta botão fechar branco. Links principais variam localmente de 32 a 48 px, entrelinha 1.15, com intervalos de 24 px. CTA fica abaixo, empurrado por margin-top:auto, divisor grafite e texto branco 16 px com seta coral. A página atual dos links principais é coral; o CTA conserva branco por legibilidade (coral/preto 4.33:1 não atende AA para texto corrente). Áreas mínimas 44 px. Foco preto no header claro e branco no menu preto. `prefers-reduced-motion: reduce` elimina transições e transforms, mantendo mudanças de cor e foco.

### Header × Hero

Origem identificada no código: header com padding inferior 32 px desktop / 24 px mobile, hero com padding superior 128 px desktop / 96 px até 1024, somados ao intervalo global entre blocos (24 px quando aplicado pelo WordPress). Não foi atribuída uma medida visual real do staging a essa soma.

Uma única regra contextual (`.wp-site-blocks > header:has(.diged-header) + main .diged-create-v2 > section:first-child`) passa apenas o topo do primeiro hero a 64 px. Redução de 64 px desktop ou 32 px tablet/mobile. Header, logo, H1, padding inferior do hero e demais seções preservados. A regra requer header seguido de main, estrutura dos templates atuais; sem suporte a :has em navegadores antigos, permanece o espaçamento anterior. Não muda a marcação das CREATE nem o footer.

### Limitações a validar

Sem WordPress local para verificar a interface final. Confirmar serialização do HTML inline no label de Navigation Link, aria-hidden da seta no DOM, identificação nativa da página atual com URLs relativas, Escape, captura/retorno de foco, rolagem no overlay e editor. Não foram acrescentados JS para foco nem lógica própria de página atual. Se a versão do WordPress não identificar links customizados relativos como atuais, revisar o vínculo dos itens a páginas reais no editor; não inferir esse estado com CSS por URL.

Mudanças no pattern de header não substituem automaticamente versões personalizadas de template parts/menus salvas no banco. Auditar o header efetivamente renderizado após deploy autorizado. Transições, elevação tipográfica e CTA inferior são hipóteses para validação; nenhum deploy nesta etapa.

## Header V2.1 — overlay mobile

Inspeção read-only do HTML/CSS público em /create/: o link CREATE era custom sem id, aria-current ou current-menu-item; o CSS de estado não tinha o que selecionar. O CTA estava presente no HTML. Justificativa right do Navigation era transmitida aos itens por --navigation-layout-justification-setting. O min-height da lista somado ao padding superior/inferior e margin-top:auto do CTA podia levá-lo abaixo da primeira tela; sem inspeção do menu aberto não se confirmou ocultação/clipping como causa única.

Correção: padrão header resolve páginas publicadas via get_page_by_path e fornece id/type page/kind post-type ao bloco Navigation Link nativo. Sem IDs fixos, JS ou custom block. Destinos ainda não publicados mantêm custom link. WordPress passa a produzir seu estado e aria-current. Para preservar rigorosamente a aparência desktop servida anteriormente (links custom não tinham estado corrente), uma regra a partir de 1025 px mantém em preto o item recém-vinculado em repouso; hover/focus/active continuam coral. Esse seletor não muda layout desktop nem o header fechado.

Overlay aberto até 1024 px: variáveis de alinhamento flex-start; laterais 16 px (como header fechado), topo/base 24 px, coluna ocupando largura disponível e itens à esquerda. Min-height da lista recalculado para descontar padding do overlay e área de fechar; CTA permanece embaixo quando cabe, mas o conteúdo pode crescer e rolar. Itens não encolhem. Fundo da lista explicitamente transparente evita a classe white-background herdada. CTA com divisor grafite, 32 px de padding acima, texto branco e seta coral. Botão fechar, Shift, outlines e reduced-motion anteriores preservados.

Limites: sem PHP/WordPress local para executar o binding e abrir o menu. Conferir 390 px e telas baixas, aria-current, CTA/scroll e retorno de foco. Cabeçalhos/menus já personalizados no banco não são substituídos automaticamente pelo pattern do tema; atualizar vínculos dos itens existentes para páginas reais pelo editor se o header salvo prevalecer. Não houve mudança no banco nem no staging. Fonte da regra de ativo consultada: core Navigation Link do WordPress, que usa id e kind para a página singular atual; não basta mudar a URL para absoluta.

## Footer V1 — assinatura editorial

`parts/footer.html` referencia o pattern técnico `diged/footer`, em `patterns/footer.php` (Inserter: no), pela mesma arquitetura do header. PHP apenas resolve os vínculos nativos das páginas existentes e a URL de privacidade configurada no WordPress. Blocos nativos Group, Heading, Paragraph, Navigation e Navigation Link; Navigation com overlayMenu never, sem accordion ou JS próprio.

Superfície preta full-width, conteúdo 76rem (1216 px), padding vertical 96 px desktop / 64 px até 781 px, laterais 16 px. H2 branco “Do conhecimento à experiência digital.” em Display (até 72 px); em mobile, override local 40–44 px para preservar palavras sem quebra emergencial. Apoio institucional em Body 18/1.55, limitado a 42rem (672 px). Sem repetição do PNG, imagens ou decoração. Azul não utilizado por não haver necessidade funcional nesta composição.

Navegação horizontal com wrap no desktop, vertical no mobile: CREATE, LEARN, Sobre, Vamos conversar ↗. Mesmos slugs e resolução de páginas publicadas via get_page_by_path usados no header; se a página ainda não existe/publicou, mantém destino previsto como link custom. CTA em peso 700, demais em 600, tamanho local 24 px, sem novo token global. Esse mínimo de 24 px assegura enquadramento como texto grande: coral/preto 4.33:1 atende AA de 3:1, mas não seria adequado a texto corrente pequeno. Normal branco/preto 21:1; hover/focus/active e página atual coral. Shift opcional de 2 px em 180 ms, removido por prefers-reduced-motion. Setinha decorativa aria-hidden. Áreas de interação de ao menos 44 px; foco com contorno branco, independente da cor.

Linha institucional inferior: DIG.ED, © 2026 DIG.ED e Privacidade. Em mobile, empilhada. Privacidade usa get_privacy_policy_url: quando houver página publicada configurada, é link branco sublinhado com alvo real; sem essa configuração, exibe somente o texto, sem inventar URL ou link vazio. Configurar a política no WordPress é pendência para tornar o link funcional. O ano 2026 é explícito conforme solicitado, não dinâmico.

CSS adicional em styles.css dentro de theme.json, somente seletores `.diged-footer`, para padding, assinatura mobile, navegação, rodapé institucional, interações e movimento reduzido. Header, CREATE, templates, paleta, wordmark e tokens tipográficos não mudam.

Validação local: JSON, blocos estáticos e referências; integridade dos arquivos protegidos; ausência de scripts próprios. Não há PHP/WordPress local para executar o pattern: conferir no staging autorizado a execução PHP, reconhecimento dos blocos, links/estado atual, configuração de privacidade, teclado, foco, zoom e 320/390/781/1440 px. Templates/menus salvos no banco podem prevalecer e não são alterados pelo arquivo do pattern automaticamente. Nenhum commit, push ou deploy nesta etapa.


### Footer V1 — ritmo da navegação mobile

Somente até 781 px: padding vertical dos links de navegação reduzido de 8 para 4 px por lado, mantendo min-height 44 px e gap de 16 px entre itens. Com fonte 24 px e entrelinha 1.4, a caixa de linha mede 33.6 px: a separação entre caixas de texto fica aproximadamente 26.4 px (44 − 33.6 + 16), dentro da referência de 24–32 px. O CTA recebe 8 px adicionais antes dele. Medida visual dos glifos pode variar; a área clicável não cai abaixo de 44 px. Desktop, fonte, cores, Shift/foco, assinatura, mensagem, padding geral e camada institucional permanecem intactos.

## Home V1

Pattern `diged/home-v1` (DIG.ED — Home V1), editável com blocos nativos. Inserir uma única vez no conteúdo da página escolhida como Home. A âncora `solucoes` pertence à seção CREATE + LEARN. Links usam páginas publicadas por slug e seus permalinks quando disponíveis; até lá, usam os destinos previstos `/create/`, `/learn/`, `/sobre/` e `/contato/`. Conferir esses destinos na publicação. Uma instância inserida não é sincronizada com alterações futuras do pattern.

`front-page.html` exibe o conteúdo em alinhamento full, sem título automático: o H1 pertence ao Hero. Para editar a Home como página, selecionar essa página em Configurações → Leitura. Essa configuração é uma escolha de conteúdo, não um requisito da hierarquia para reconhecer o template `front-page.html`. Cabeçalho e rodapé continuam sendo as mesmas parts globais.

A composição usa os limites locais já adotados (76rem externo, 42rem de leitura), Body 18 e sete seções: Hero; CREATE + LEARN; Da ideia à entrega; Diferencial; Onde entramos; Experiência; CTA. CREATE coral e LEARN preto são um teste de composição, não regras cromáticas de submarcas. Branco sobre coral: 4,85:1; branco sobre preto: 21:1. CSS exclusivamente sob `.diged-home-v1`, em `styles.css` do theme.json, seguindo a arquitetura existente. Nenhum token foi alterado.

Desktop: territórios lado a lado, três áreas de método e contextos em duas colunas. Até 1024px, espaçamentos internos menores; até 781px, empilhamento, macrospacing 64px e displays 40–44px. Body permanece 18px/1.55. Sem animação. Validar a inserção no editor e o frontend em 390, 781, 1024 e 1440px, incluindo teclado, contraste, âncora e destinos.

### Mídia — fase 2

Hero e territórios são Groups editáveis: blocos nativos Image, Video ou Cover podem ser acrescentados em seu fluxo, inclusive como faixas editoriais abaixo do texto; não há alturas fixas nem reserva obrigatória de mídia. Não é necessário transformar o Hero em duas colunas de texto/imagem. Dimensionamento e tratamento da mídia serão definidos quando existirem ativos aprovados. Método, diferencial e contextos permanecem independentes de imagens. Motion e microinterações são possibilidades futuras, não implementadas nesta versão.

Após “Da ideia à entrega” e antes do diferencial, prever futuramente “PROJETOS SELECIONADOS — Estratégia que ganha forma.” com Groups wide/full e imagens/vídeos em grande escala, quando houver cases suficientemente fortes. **Nenhuma seção de portfólio, Case Zero, placeholder ou projeto fictício é renderizada na V1.**

## Media System V1

Regras e limites para Image, Cover e Video nativos estão em [docs/media-system-v1.md](docs/media-system-v1.md). A V1 prepara o uso editorial, acessibilidade, responsividade e performance sem inserir mídia nem alterar a Home. Imagem estática e vídeo manual são os caminhos iniciais; background automático depende de fallback estático e controle efetivo de movimento. Nenhum CSS, JS, token ou bloco adicional foi necessário nesta etapa.

### Home V1.1 — contextos compactos

O pattern mantém slug `diged/home-v1`. Apenas as quatro descrições de “Onde entramos” foram substituídas pela copy aprovada. A composição passa de quatro linhas título/descrição para duas colunas editoriais em duas fileiras: H3 acima de Body 18 em grafite, divisor superior, sem cards. Gap entre título e descrição: 16px; padding após divisor: 24px; intervalo entre fileiras: 48px, com 64px entre colunas. Até 781px: coluna única e intervalo de 32px entre contextos. A distância do H2 ao conjunto cai de 64 para 48px no desktop; mobile mantém 48px. Escala tipográfica e padding externo das seções preservados.

Método, diferencial e experiência mantêm seu ritmo. Não há espaço reservado para mídia. A futura zona descrita no Media System será um Group irmão entre `.diged-home-v1__method` e `.diged-home-v1__difference`, dentro da raiz full da Home: largura ampla por Group constrained e alinhamento wide, ou full usando toda a raiz. A mídia será inserida nesse novo Group, sem mover o conteúdo das seções adjacentes. Nenhum markup ou classe de mídia foi necessário agora. A documentação de Projetos selecionados permanece; nada de portfólio ou Case Zero foi renderizado.

Como o pattern não é sincronizado, uma Home já inserida conserva as descrições anteriores até edição do conteúdo no WordPress. As regras CSS passam a valer para as instâncias com as mesmas classes. Validar a composição final no editor/frontend antes da publicação.

## LEARN V1

Pattern `diged/learn-v1` (DIG.ED — LEARN V1), em oito seções nativas editáveis. Inserir na página LEARN usando o template existente **Página com título no conteúdo** (`content-title`). Não foi criado template exclusivo nem modificada outra página. O conteúdo controla o único H1; sete H2 organizam as seções e doze H3 identificam entregas, contextos e etapas.

Hero com label lateral e título amplo; desafio com destaque editorial; entregas em grid 2×2 sobre off-white, sem cards; contextos em três colunas; “Primeiro a aprendizagem” com protagonismo coral e texto branco; processo em linhas numeradas; diferencial preto com composição assimétrica; CTA branco. Azul não utilizado. Branco/coral ≈4,85:1, coral/branco ≈4,85:1 e branco/preto 21:1. As superfícies não definem cores de submarca.

CSS em `styles.css` do theme.json, exclusivamente `.diged-learn-v1`, seguindo a arquitetura atual. Tokens e CSS anterior intactos. Largura externa até 76rem e leitura até 42rem. Desktop: macrospacing 96px, com 128px nos momentos de destaque e início do Hero em 64px. Até 1024px: Hero e diferencial passam a uma coluna. Até 781px: grids/etapas empilhados, macrospacing 64px, displays 40–44px, palavras sem quebra arbitrária e Body 18px/1.55 preservado. Links com mínimo 44px e foco por contorno; sem animações.

CTA secundário leva a `#como-funciona`. CTAs de contato usam Navigation Link nativo, com ID/permalink de página publicada quando disponível e fallback para `/contato/`. Conferir destino antes da publicação. Patterns inseridos não se sincronizam automaticamente com futuras edições do arquivo.

“Primeiro a aprendizagem” já é um Group editorial independente dentro da raiz full. Pode receber Image/Video após o conteúdo, ou um Group wide/full no mesmo fluxo, sem reorganizar as seções adjacentes. Para mídia em toda a largura, inseri-la como irmã do Group interno da seção. Sem altura fixa, reserva de espaço ou classe preventiva de mídia. Seguir [Media System V1](docs/media-system-v1.md): vídeo manual inicialmente; background automático somente após resolver fallback e controle de movimento. Nenhuma mídia ou placeholder foi inserido.

Validação local: JSON, balanceamento dos blocos, copy e integridade das áreas protegidas. A inserção real, serialização no editor, responsividade e links precisam ser conferidos no WordPress em 390/781/1024/1440px. Sem WordPress/PHP local disponível para afirmar renderização validada.

### LEARN V1.1 — três ajustes de composição

Somente CSS local; pattern e copy da V1 intactos. “O que entregamos” ocupa horizontalmente o container existente de 76rem com quatro colunas, uma linha divisória contínua e sem bordas individuais. Off-white preservado. Entre 782–1024px, duas colunas; até 781px, uma. Ordem de leitura permanece Estrutura → Design de aprendizagem → Experiência → Produção digital.

“Onde LEARN entra” usa três faixas editoriais, título à esquerda e descrição à direita. H3 semântico recebe localmente o tamanho do token H2 (32–40px), peso existente 600, entrelinha 1.05 e tracking -.02em. Apenas Ensinar mantém coral; demais títulos pretos, descrições em grafite e Body 18. Tablet mantém duas áreas com gap 32px; mobile empilha título/descrição com gap 24px e padding vertical 32px por contexto. Sem cards ou mudança no H2 da seção.

No diferencial preto, headline e parágrafo deixam de disputar a mesma linha. Headline ocupa até 19ch dentro do container; parágrafo abaixo, até 42rem, alinhado à direita no desktop e à esquerda até 1024px. Distância entre os grupos: 64px desktop, 48px tablet/mobile. Display preservado; não há br nem quebra fixa: as linhas variam com viewport e fonte. Mobile remove o limite de 19ch para aproveitar a largura disponível.

Nenhum padding externo de seção foi alterado. Hero, desafio, seção coral, processo, CTA e demais páginas/parts/templates permanecem intactos. Sem mídia, markup reservado ou JavaScript. Validar visualmente em 390/781/782/1024/1440px no WordPress; a revisão local verifica CSS/JSON e integridade do conteúdo, sem afirmar renderização validada.

## Sobre V1

Pattern `diged/about-v1` (DIG.ED — Sobre V1), com seis seções editáveis; usar o template existente **Página com título no conteúdo** (`content-title`). Hero amplo com lead deslocado à direita; trajetória com headline e prosa em duas áreas; princípios numerados com divisores; fundador em superfície preta; atuação em duas faixas editoriais; CTA final branco. Sequência: branco → branco → off-white → preto → branco → branco. Sem azul nesta versão. Hierarquia: um H1, cinco H2, seis H3 (três princípios, nome do fundador e duas ofertas).

CSS exclusivamente sob `.diged-about-v1`, na propriedade styles.css do theme.json. Sem mudança de tokens ou do CSS anterior. Container até 76rem e texto até 42rem. Desktop acima de 1024px: composições assimétricas. De 782 a 1024px: trajetória empilhada e gaps reduzidos em fundador/princípios. Até 781px: demais grids empilhados, macrospacing 64px, displays 40–44px, Body 18px/1.55 intacto. Sem hifenização automática. Links com mínimo 44px, sublinhado, hover coral e contorno de foco. Branco/preto 21:1 e coral/branco aproximadamente 4,85:1.

### Fotografia e contatos pendentes

Conforme [Media System V1](docs/media-system-v1.md), a fotografia real poderá ser inserida como Image nativo dentro do primeiro Group de `diged-about-v1__founder-grid`, junto da identificação e em relação à biografia. Essa coluna já contém nome e identificação: não há reserva vazia nem altura fixa. Inserir fotografia com proporção preservada e alt contextual. O empilhamento mobile já contempla o mesmo Group; não é necessário reconstruir a seção. Nenhuma mídia foi inserida.

Não foram encontrados destinos profissionais aprovados para WhatsApp Business DIG.ED, LinkedIn ou e-mail no conteúdo/configuração versionados. Não foram renderizados links, ícones, dados pessoais ou placeholders desses canais. Quando fornecidos, inserir uma linha de links após a biografia, com nome acessível, ícone decorativo opcional, foco visível e área mínima de 44px. Verificar destinos reais e contraste sobre preto nessa integração. A busca local não permite confirmar configurações existentes exclusivamente no banco do WordPress.

CREATE, LEARN e Contato usam os destinos já estabelecidos no projeto (`/create/`, `/learn/`, `/contato/`), com Navigation Link vinculado ao ID/permalink da página publicada quando encontrada na inserção. Conferir existência no WordPress antes da publicação; nenhuma URL profissional foi inventada. O pattern não é sincronizado com instâncias já inseridas.

Validação local: JSON, balanceamento de blocos e integridade das áreas protegidas. Falta validar inserção/renderização no WordPress, links e composição em 390/781/782/1024/1440px. Sem WordPress/PHP local para confirmar renderização. Nenhuma alteração em Header, Footer, Home, CREATE, LEARN ou templates; sem JavaScript, mídia, cards, equipe fictícia ou placeholders.

### Sobre V1.1 — hierarquia e respiro

Os H2 de Trajetória, Nosso olhar e Nossa atuação usam localmente o tamanho existente H1 (40–56px), mantendo semântica H2, peso 600, tracking existente e entrelinha 1.05. Não mudam Hero, display do fundador ou CTA. Quebra de palavras normal e hyphens none permanecem. Somente “desenhar” recebe a formatação inline nativa de cor do Gutenberg (`mark.has-inline-color.has-brand-color`, fundo transparente), dentro do mesmo H2 e sem br. Coral sobre off-white tem contraste aproximado de 4,3:1, adequado ao título grande (AA requer 3:1); demais palavras permanecem pretas.

Até 781px, a distância da headline ao grupo de identificação passa de 48 para 64px; entre identificação e biografia, de 24 para 48px. Nome e “Fundador da DIG.ED” ficam juntos com margem de 16px. Colunas desktop/tablet, Body 18/1.55, copy e superfícies intactos. CSS todo restrito a `.diged-about-v1`. Em instâncias já inseridas, aplicar a formatação inline de “desenhar” no editor, pois o pattern não é sincronizado. Verificar visualmente quebras e espaçamento no WordPress, especialmente em 390px; a validação local não substitui essa inspeção.

### Sobre V1.1 — diagnóstico do tamanho dos H2

Inspeção do HTML/CSS público de `/sobre/`: os três containers e o destaque de “desenhar” correspondem ao pattern; a regra V1.1 está carregada. A causa é a referência CSS `--wp--preset--font-size--h1`, inexistente no CSS publicado. O WordPress gera o nome `--wp--preset--font-size--h-1` para esse preset. A declaração com variável ausente fica inválida no cálculo do estilo, mesmo com !important; não é necessário aumentar a especificidade.

Corrigida somente a referência na regra local dos três H2. O clamp publicado continua 40–56px (40px até aproximadamente 390px; 56px em 1440px, com transição fluida). Nenhum token, seletor, markup ou cor foi alterado; sem segunda camada de override. A versão pública ainda contém a referência anterior até futuro deploy. Validar o tamanho computado após publicação. Outras referências globais a presets numéricos foram observadas no CSS publicado, mas ficam fora desta correção restrita à Sobre.

## Vamos conversar V1

Pattern `diged/contact-v1`, template `content-title`, um H1 e três H2. Hero branco amplo com lead até 42rem, contato direto branco com H2 em 40–56px, introdução do formulário em off-white e fechamento coral/branco (contraste aproximado 4,85:1). Containers existentes até 76rem/64rem. Tablet alinha lead à esquerda; até 781px, macrospacing 64px e displays 40–44px. Body 18/1.55 preservado. CSS apenas `.diged-contact-v1`.

**Estrutura editorial local; não pronta para publicar como contato funcional.** Sem número comercial nem destinatário confirmado, não há botão WhatsApp, formulário, campos falsos ou shortcode provisório. A integração será por plugin aprovado, sem envio próprio no tema. Seguir [configuração e critérios de aceite](docs/contact-v1-integration.md), incluindo privacidade, antispam, duplicidade e confirmação real de envio. A orientação “Preencha o formulário abaixo” foi omitida do pattern e preservada na documentação; inserir somente junto do bloco funcional. Nenhuma dependência instalada ou alteração nas páginas existentes.

### Contato V1.1 — largura editorial

Diagnóstico do staging: título automático e post-content sem alinhamento full; selecionar/verificar o template `content-title` conforme [guia de integração](docs/contact-v1-integration.md). Não houve alteração no painel, banco ou templates. A largura full depende dessa configuração, não de CSS que ultrapasse o ancestral restrito.

Contato direto passa a duas colunas com gap 64px; texto e futuro CTA ficam em Group próprio. Formulário passa de interior 64rem para o container existente 76rem e ganha Group de introdução; segunda coluna é ativada apenas com o bloco real do plugin. Até 1024px, composições empilhadas e gap 32px; até 781px, macrospacing 64px e Body 18/1.55 preservados. Hero, lead, cores e fechamento coral mantêm regras existentes, agora preparados para a largura correta do template. Copy intacta; instrução de preenchimento continua apenas na documentação enquanto não houver formulário funcional. Sem campos, botões, links ou espaços vazios artificiais.

### Contato V1.2 — WhatsApp Business confirmado

Destino comercial DIGED Studio confirmado pelo responsável: link wa.me com número internacional 5511914918343 e mensagem inicial fornecida. CTA nativo Button “Conversar pelo WhatsApp ↗” inserido após o parágrafo em `diged-contact-v1__direct-content`; número não aparece no texto e seta é decorativa. Abre na mesma aba, sem widget, rastreador, plugin ou JS próprio. Coral/branco (≈4,85:1), alvo mínimo 44px, foco preto com afastamento e hover sublinhado. No desktop, texto/CTA ocupam a coluna direita; até 1024px seguem empilhados. Formulário permanece pendente. Não foi enviada mensagem nem acessada a conta comercial. Para página já inserida, adicionar o mesmo botão no editor; pattern não sincronizado. Validação visual ainda depende do template full correto descrito na V1.1.

### Contato V1.2 — preparação visual do Contact Form 7

CSS para controles reais `.wpcf7` limitado a `.diged-contact-v1`: Body 18, labels visíveis, campos fluidos, foco preto, botão coral/branco e erros grafite legíveis. Sem JS próprio, fake form ou shortcode sem ID. Ver [configuração pronta para o painel](docs/contact-form-7-setup.md). Plugin ativo e destinatário Gmail confirmados; não existe caixa @diged.com.br. From permanece pendente até verificar transporte autenticado; envio não testado nem declarado funcional. Pattern permanece como na integração WhatsApp, sem inserir formulário ou orientação prematura.
