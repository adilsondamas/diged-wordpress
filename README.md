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
- Mantidos: intervalo padrão entre blocos no token 50 e margens laterais no token 40. Os novos tokens macro não foram aplicados automaticamente a páginas ou templates.

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
