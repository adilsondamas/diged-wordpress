# DIG.ED — Media System V1

Status: contrato editorial e técnico para uso dos blocos nativos. Nenhuma mídia, classe CSS, script, plugin ou bloco foi acrescentado ao site nesta etapa. A Home V1 permanece intacta.

## Base existente e limites

O tema declara WordPress mínimo 6.6, theme.json v3 e appearanceTools desativado. Não habilitar todas as ferramentas de aparência para integrar mídia. A documentação atual do WordPress pode apresentar controles que não existem na versão instalada: conferir a interface e o HTML publicado antes do primeiro uso, especialmente poster de Cover e controles de proporção/ponto focal de Image.

O theme.json já fornece paleta, espaçamentos e alinhamentos: content 48rem e wide 72rem. Composições existentes também usam Groups locais até 76rem, sem mudar esses tokens. Full depende de os ancestrais permitirem essa largura; não forçar com 100vw ou margens negativas. O front-page atual permite post-content full. Não criar outro sistema de containers.

| Necessidade | Recurso nativo | Limite / decisão |
| --- | --- | --- |
| Imagem no fluxo | Image, legenda, alt e resolução | Preferir biblioteca de mídia e proporção original |
| Superfície com texto | Cover, overlay, alinhamento e ponto focal | Avaliar contraste na mídia real |
| Vídeo editorial | Video, controles, poster, legendas e preload | Reprodução manual como padrão |
| Background em vídeo | Cover com vídeo | Recursos dependem da versão; não resolve sozinho pausa acessível e movimento reduzido |
| Enquadramento | Crop/fit e ponto focal disponíveis no bloco | Não equivalem a direção de arte independente por breakpoint |
| Mobile estático / movimento reduzido | Imagem estática ou vídeo manual | Troca automática e interrupção de vídeo não estão implementadas |

## 1. Imagem editorial

- Inserir Image no fluxo de um Group; usar largura de conteúdo, wide ou full conforme a função da imagem. A imagem inteira deve aparecer quando seus detalhes forem informação relevante.
- Preservar proporção original e altura automática por padrão. Não impor altura global ou object-fit: cover a todas as imagens.
- Crop/cover é uma decisão editorial explícita. Conferir o corte em desktop, tablet e mobile; nunca eliminar informação essencial. Ajustar ponto focal quando o controle estiver disponível.
- Informativas: alt descreve o conteúdo/função relevante sem repetir desnecessariamente a legenda. Decorativas: alt vazio. Se a imagem é um link, seu nome acessível precisa comunicar o destino.
- Usar legenda quando houver crédito ou contexto necessário. Texto essencial deve existir em HTML, não apenas dentro da imagem.

## 2. Background de imagem

Usar Cover nativo para mídia decorativa com conteúdo sobreposto. Full é permitido quando o template/Group pai suportar. Texto, CTA e sentido da seção permanecem independentes do arquivo de fundo.

Usar cores existentes no overlay e ajustar a opacidade à mídia real. Não há uma opacidade universal segura: conferir a região sob cada texto, todos os cortes e, no vídeo, os frames mais claros/escuros. AA: 4,5:1 para texto corrente; 3:1 para texto grande (24px regular ou aproximadamente 18,7px em negrito). Controles/foco precisam permanecer distinguíveis. Não confiar apenas no verificador do editor.

Não ativar parallax/background fixo ou repetir textura como padrão. A superfície deve manter cor de base legível caso a imagem falhe.

## 3. Vídeo e motion

### Vídeo editorial: caminho disponível

Usar Video com controles visíveis, autoplay desativado, poster e preload `none` para mídia não crítica. Usar `metadata` apenas quando houver justificativa; preload é uma indicação ao navegador, não uma garantia. Informações em áudio precisam de legendas; oferecer transcrição e descrição das informações visuais essenciais conforme o conteúdo. Controles de teclado e nome/contexto acessível devem ser verificados no frontend.

### Background: caminho condicionado à validação

- Apenas decorativo, sem informação essencial e sem faixa de áudio no arquivo exportado. Não basta apenas baixar o volume.
- Cover é o candidato nativo, mas seus controles de reprodução não são equivalentes aos do Video. Inspecionar HTML para `muted` e `playsinline` antes de permitir autoplay. O navegador pode bloquear a reprodução; a seção precisa funcionar parada.
- Loop somente para um arquivo concebido para loop. Se o Cover da versão instalada impuser loop e o ativo não servir para isso, usar imagem ou Video manual.
- Poster obrigatório quando suportado; poster não é automaticamente um substituto visível depois de ocultar o elemento video. Validar também falha de rede, fonte inválida e autoplay bloqueado. Se o Cover não oferecer poster adequado, não improvisar uma URL em CSS: usar imagem estática nesta fase.
- Movimento automático por mais de cinco segundos junto a outro conteúdo requer meio de pausar, parar ou ocultar, salvo exceção de movimento essencial. Ser decorativo não dispensa esse requisito. Cover sem esse controle não está aprovado para loop contínuo nesta V1.
- `prefers-reduced-motion: reduce`: experiência estática deve ser garantida antes de publicar background automático. CSS `display:none` não pausa vídeo nem garante economia de rede; `animation:none` não afeta sua reprodução. Não apresentar essas regras como solução completa.

**Decisão V1:** imagem estática ou Video sem autoplay são as opções prontas para integração. Background automático fica pendente de implementação/validação futura do fallback e do controle de movimento, sem adicionar JavaScript nesta tarefa. Motion informativo deve usar vídeo com controles, não background nem GIF animado sem controle.

## 4. Responsividade e fallback

Validar em 390, 781, 1024 e 1440px e com zoom. Mídia não pode criar overflow horizontal; evitar dimensões fixas maiores que o container. Não cortar overflow do documento para esconder erros.

Desktop e mobile podem precisar de cortes diferentes. Começar pelo ponto focal nativo e uma composição que sobreviva à mudança de proporção. Se não bastar, registrar a necessidade de fonte/crop alternativo: Image/Cover não oferecem necessariamente fontes e pontos focais independentes por breakpoint. `srcset` seleciona resolução, não substitui direção de arte.

Preferir estático no mobile quando o movimento não acrescentar valor. Não duplicar vídeos/imagens e esconder um deles por CSS como suposta otimização: o download pode ocorrer mesmo assim. Uma futura troca automática deverá ser testada quanto a reprodução, rede e acessibilidade. Até lá, optar por imagem universal ou vídeo manual.

Não há classes novas nesta versão. Se um ativo demonstrar lacuna real, adotar nomes semânticos `diged-*`, com contrato documentado, sem prefixos de página. Não há valores de crop ou breakpoints de mídia inventados antecipadamente.

## 5. Performance e produção dos arquivos

- Biblioteca WordPress para imagens: selecionar tamanho adequado à maior largura de exibição e conferir `srcset`, `sizes`, dimensões e comportamento de carregamento gerados. Evitar arquivo original enorme quando uma versão otimizada basta.
- Fotografias: WebP/AVIF quando suportados pelo servidor e navegadores alvo; JPEG como alternativa. PNG quando transparência ou fidelidade exigir. Não rasterizar texto editorial para substituir HTML.
- Definir dimensões/proporção para evitar deslocamento durante o carregamento. Não aplicar lazy loading indiscriminadamente à imagem principal visível na primeira tela; verificar as otimizações nativas. Imagens abaixo da dobra devem aproveitar carregamento adiado quando adequado.
- Vídeo: exportar duração, resolução, taxa de quadros e compressão compatíveis com o espaço real; remover áudio de backgrounds; preparar poster leve. MP4 compatível é uma opção inicial, sujeita a teste de codec/navegador. Não há orçamento de bytes definitivo sem ativo e medição.
- Não usar vídeo de background como padrão do Hero. Autoplay pode iniciar download apesar de preload `none`. CSS e posição abaixo da dobra não garantem carregamento tardio de vídeo.
- Medir transferência inicial, LCP e estabilidade de layout com rede móvel antes da publicação. Não instalar otimização adicional nesta fase.

## 6. Primeiro teste futuro na Home

Posição prevista: entre “Estratégia, design e produção digital.” e “Tecnologia acelera. Pessoas dão sentido.”

Inserir futuramente um Group editorial independente no fluxo da Home, compatível com wide/full. Seu conteúdo inicial poderá ser Image ou Video nativo; usar Cover apenas se houver conteúdo sobreposto que justifique background. A seção não terá altura obrigatória nem dependência estrutural de uma mídia específica. Trocar Image por Video não deverá exigir reconstruir as seções vizinhas; proporção e duração serão decisões do ativo.

Essa zona é um teste de mídia, não uma autorização para criar portfólio/case. Nenhum Group vazio, placeholder, imagem, vídeo ou seção foi inserido. Projetos selecionados continuam sendo uma etapa futura separada.

## 7. Critérios do primeiro teste

1. Confirmar versão do WordPress, controles disponíveis e serialização sem bloco inválido.
2. Conferir alt/legendas, teclado, foco, contraste e legibilidade sem mídia.
3. Conferir cortes, alinhamentos, zoom e ausência de overflow nos quatro viewports.
4. Testar movimento reduzido, autoplay bloqueado, erro de rede e mobile; não publicar background automático sem solução estática efetiva e controle aplicável.
5. Inspecionar requisições e tamanho transferido, poster, carregamento abaixo da dobra e estabilidade.

## Referências oficiais consultadas

- [Image — WordPress](https://wordpress.org/documentation/article/image-block/)
- [Cover — WordPress](https://wordpress.org/documentation/article/cover-block/)
- [Video — WordPress](https://wordpress.org/documentation/article/video-block/)
- [Cover — atributos e suporte](https://developer.wordpress.org/block-editor/reference-guides/core-blocks/core-blocks-media/core-block-cover/)
- [WCAG — Pause, Stop, Hide](https://www.w3.org/WAI/WCAG22/Understanding/pause-stop-hide.html)

A documentação atual não prova disponibilidade na instalação de staging. Este guia não substitui a validação do bloco e do navegador com o ativo real.
