# DIG.ED — Correções V1.1 e validação

Verificação concluída em 9 de outubro de 2026. Esta é a data do relatório, não a data editorial da Política de Privacidade.

## Resultado e limites

Três correções foram salvas nas páginas do staging pelo Gutenberg: CTA final da CREATE, cor dos dois CTAs da LEARN e composição do contato direto. Tipografia e estado ativo desktop foram corrigidos no tema local e testados em prévia estática; ainda **não estão aplicados ao staging**, porque commit, push e deploy não foram autorizados. A data da política permanece pendente.

Produção não foi acessada para alterações. Não houve instalação, envio de formulário, mudança no CF7/FluentSMTP/Turnstile ou alteração de configuração administrativa. Não foi criado CSS adicional no banco para contornar o fluxo Git do tema.

## Critérios de aceite

| Item | Causa e correção | Resultado |
| --- | --- | --- |
| CREATE: CTA final para Contato | A página salva mantinha `href="#contato-provisorio"` e um parágrafo de protótipo. Destino alterado para `/contato/`; removido apenas o bloco da orientação provisória. Pattern local atualizado igualmente. | **Corrigido no staging e no pattern local.** Link renderizado confirmado; Contato responde HTTP 200. |
| LEARN: dois CTAs brancos sobre coral | Os blocos Navigation não declaravam `textColor`; a cor computada era grafite. Definido `textColor: white` nativo nos dois blocos, também no pattern local. Nenhum override novo necessário. | **Corrigido no staging e no pattern local.** Ambos renderizam branco sobre `#CB4129`, contraste 4,853:1. |
| H2/H3: recuperar escala | WordPress publica variáveis `--wp--preset--font-size--h-2`/`h-3`, enquanto referências do tema e classes salvas usam `h2`/`h3`. As referências inválidas faziam títulos caírem em 18px. Corrigidas referências e acrescentado `font-size` às regras de compatibilidade já existentes `.has-h1-font-size` a `.has-h4-font-size`. | **Corrigido e testado localmente; pendente deploy autorizado.** Valores dos presets preservados. |
| Contato: seção direta wide | A instância salva continha `diged-contact-v1__innerdiged-contact-v1__direct-content`, sem espaço, e H2 fora do container; parágrafo e CTA estavam em Columns separadas. Restaurados os grupos `__inner` e `__direct-content`, conforme o pattern existente. | **Corrigido no staging.** 1216px no desktop; H2 à esquerda, texto e WhatsApp à direita; empilhamento em tablet/mobile. Pattern local já estava correto. |
| Navegação desktop: item ativo coral | Uma regra explícita em `@media (min-width: 1025px)` forçava preto no item `.diged-header__page-bound.current-menu-item`. Removida somente essa exceção; preservada a regra coral existente. | **Corrigido e testado localmente; pendente deploy autorizado.** No staging ainda está preto acima de 1024px. |
| Política: substituir redação provisória por data | Nenhuma data editorial real foi aprovada. | **Bloqueado por informação pendente.** Texto e página preservados, sem data inventada. |

## Evidências reproduzíveis

### CREATE

Em `/create/`, o botão em `#conversar .wp-block-button a` aponta para `/contato/`. O elemento `#contato-provisorio` deixou de existir. O CTA do hero continua apontando para `#conversar`, preservando a navegação interna aprovada. O botão final tem altura aproximada de 44,54px nas três larguras.

### LEARN

Em `/learn/`, os dois elementos `.diged-learn-v1__contact a` apresentam `color: rgb(255, 255, 255)` e `background-color: rgb(203, 65, 41)`. Os destinos continuam sendo a página Contato do staging. Altura aproximada: 51,20px; o primeiro CTA passa a 70,39px em 390px por quebra natural do texto.

Contrastes calculados pela luminância relativa WCAG:

| Combinação | Razão | Resultado |
| --- | ---: | --- |
| Branco / coral | 4,853:1 | AA para texto normal |
| Grafite / coral, estado anterior | 2,720:1 | Falha para texto normal |
| Coral / branco, navegação desktop corrigida | 4,853:1 | AA para texto normal |
| Coral / preto | 4,327:1 | AA apenas para texto grande; não equivale a AA para texto normal |

### Contato

Em `/contato/`, `.diged-contact-v1__direct .diged-contact-v1__inner` mede:

| Viewport | Largura do container | Organização |
| --- | ---: | --- |
| 1440px | 1216px | Colunas de aproximadamente 523,63 / 628,37px, com gap existente de 64px |
| 768px | 721px | Uma coluna; padding lateral de 16px |
| 390px | 343px | Uma coluna; padding lateral de 16px |

As diferenças entre viewport e largura útil incluem a barra de rolagem. A URL e a mensagem do WhatsApp, `target="_blank"` e `rel="noopener"` foram preservados exatamente na página salva. A seção off-white, o bloco real do CF7, hero e fechamento não foram substituídos. A comparação do conteúdo antes/depois confirmou que somente o bloco da seção direta mudou.

### Tipografia local

A prévia usa HTML público do staging com as correções locais de CSS e fontes Work Sans servidas localmente. Não é uma instalação WordPress local: scripts foram excluídos dessa prévia e ela não valida integrações ou o processamento futuro do `theme.json` pelo servidor.

| Preset | 1440px | 768px | 390px |
| --- | ---: | ---: | ---: |
| H2 convencional | 40px | 34,88px | 32px |
| H3 convencional | 28px | 25,44px | 24px |

Os H2 editoriais específicos de Sobre e Contato continuam em 56 / 45,76 / 40px. Os H2 da política continuam em 28 / 25,44 / 24px. Displays mantêm suas regras anteriores. Nenhum valor da escala foi redesenhado. A referência inválida usada no destaque dos contextos da LEARN também foi corrigida para `h-2`.

Após deploy autorizado, conferir no CSS gerado pelo WordPress essas mesmas variáveis, classes e valores computados. A prévia estática não substitui essa última validação.

## Matriz responsiva executada

Cada página foi carregada no navegador e medida nas três larguras, com fontes carregadas. Houve capturas para suporte à inspeção, incluindo o Contato corrigido e a LEARN na prévia. A tabela abaixo registra a checagem geométrica; não representa aprovação das falhas tipográficas ainda presentes no staging.

| Página | Staging 1440 / 768 / 390 | Prévia local 1440 / 768 / 390 |
| --- | --- | --- |
| Home | Sem overflow horizontal ou de headings; um H1 | Sem overflow, escala restaurada |
| CREATE | Sem overflow horizontal ou de headings; um H1; CTA correto | Sem overflow, escala e ativo desktop restaurados |
| LEARN | Sem overflow horizontal ou de headings; um H1; CTAs brancos | Sem overflow, escala e ativo desktop restaurados |
| Sobre | Sem overflow horizontal ou de headings; um H1 | Sem overflow, hierarquia específica preservada |
| Vamos conversar | Sem overflow horizontal ou de headings; um H1; seção direta correta | Sem overflow, composição preservada |
| Política de Privacidade | Sem overflow horizontal ou de headings; um H1 | Sem overflow, escala específica preservada |

Body verificado em todas as páginas e larguras: **18px / 27,9px**, equivalente a line-height 1,55. Não foram reduzidos displays, corpo, botões, espaçamentos ou containers para fazer o teste passar.

## Navegação, recursos e integrações

- As seis URLs públicas retornaram HTTP 200 em requisições sem autenticação.
- Dezessete recursos CSS/JS/PNG/WOFF2 identificados no HTML retornaram HTTP 200.
- Nenhuma imagem essencial quebrada observada no conteúdo ou header.
- Nenhum erro ou aviso retornado pelo coletor de console do navegador durante a verificação. Isso não constitui cobertura de todos os navegadores.
- O teste autenticado exibiu imagens Gravatar da barra administrativa; elas não fazem parte da experiência pública. Não foram tratadas como falha do tema.
- Em 390px, o Navigation nativo abre o overlay, os quatro links têm 44px de altura, Tab apresenta outline branco de 2px e Escape fecha o menu com retorno de foco ao botão de abertura.
- Footer nas seis páginas e aviso do CF7 apontam para a URL real `/politica-de-privacidade/` no staging.
- CF7 permanece presente somente na página Contato; seu bloco e sua configuração não foram alterados.
- O script oficial `challenges.cloudflare.com/turnstile/v0/api.js` está presente. Não foi realizado desafio manual, envio ou validação de token no servidor nesta rodada. O resultado de entrega de e-mail continua baseado na validação anterior do responsável.
- Hostinger Reach não foi encontrado nos scripts das seis páginas inspecionadas.
- Scripts CF7/Turnstile continuam carregados globalmente, como antes; não houve otimização ou mudança de configuração nesta tarefa.
- As correções de conteúdo também aparecem nas respostas públicas sem autenticação, sem evidência de versão antiga dessas três alterações no cache consultado.

## Arquivos locais

- `patterns/create-v2.php`: destino real do CTA final e remoção da orientação provisória.
- `patterns/learn-v1.php`: `textColor: white` nos dois blocos Navigation dos CTAs.
- `theme.json`: referências tipográficas válidas, compatibilidade com classes salvas e remoção da exceção preta do item ativo desktop.
- `docs/audit-v1-1.md`: este relatório.

Nenhum arquivo de template/part, fonte, plugin ou JavaScript foi modificado. `patterns/contact-v1.php` e a política permanecem intactos. As correções em CREATE, LEARN e Contato no banco são instâncias de páginas do staging, não alterações de configurações administrativas.

## Validação de código

- JSON válido.
- `settings` do `theme.json` idêntico ao HEAD: tokens e controles preservados.
- Delimitadores e atributos JSON dos blocos balanceados: CREATE V2, 112 blocos; LEARN V1, 100 blocos.
- Trechos PHP executáveis dos dois patterns idênticos ao HEAD. PHP não está disponível localmente para executar `php -l`; não foi alegado teste de runtime PHP.
- `git diff --check` sem erros.

## Pendências e próximo passo

1. Autorizar separadamente versionamento/push/deploy do tema no staging para aplicar tipografia e navegação desktop. Repetir os valores computados e a revisão visual após aplicação no WordPress real.
2. Fornecer a data editorial aprovada da política antes de substituir a redação provisória.
3. Nenhum envio de teste de formulário foi feito; não é necessário repetir para validar estas alterações de apresentação, salvo regressão observada ou autorização específica.

**Não houve commit, push ou deploy nesta rodada.**
