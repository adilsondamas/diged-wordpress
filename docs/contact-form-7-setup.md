# Contact Form 7 — preparação DIG.ED V1.2

Estado confirmado pelo responsável: plugin ativo no staging; destinatário adilsondamas@gmail.com; não existe caixa @diged.com.br. From e transporte permanecem pendentes. Este documento substitui as pendências antigas de instalação/destinatário do guia inicial. Nenhuma configuração foi aplicada ao painel. Não há ID conhecido, shortcode inserido, credencial, envio implementado no tema ou teste de recebimento realizado.

## A. Repositório

CSS para elementos reais `.wpcf7` exclusivamente sob `.diged-contact-v1`: Work Sans, Body 18/1.55, campos fluidos brancos, borda grafite, alvos 44px, botão coral/branco, foco preto e erros legíveis. O texto de erro não usa coral sobre off-white, pois o contraste dessa combinação é insuficiente para texto pequeno. CSS não modifica aria, não esconde a resposta/spinner e não simula bloqueio de envio. O JS nativo do CF7 cuida da submissão; não foi criado JS próprio.

O pattern permanece sem formulário ou instrução de preenchimento até inserção do bloco funcional com ID real. Os seletores de layout já preparados recebem o bloco CF7 como irmão do Group de introdução. Sem alteração de outras páginas.

## B. Painel — aba Form

Em Contato → Formulários de contato, criar/editar “DIG.ED — Contato”. Colar o conteúdo abaixo na aba **Form** do plugin (não em bloco HTML do Gutenberg e sem adicionar tags form externas). IDs pressupõem uma única instância por página.

```html
<p>
<label for="diged-contact-name">Nome (obrigatório)</label>
[text* your-name id:diged-contact-name autocomplete:name]
</p>
<p>
<label for="diged-contact-email">E-mail (obrigatório)</label>
[email* your-email id:diged-contact-email autocomplete:email]
</p>
<p>
<label for="diged-contact-topic">Sobre o que deseja conversar? (opcional)</label>
[select your-topic id:diged-contact-topic include_blank "CREATE" "LEARN" "Ainda não sei ou outro desafio"]
</p>
<p>
<label for="diged-contact-message">Conte um pouco sobre seu projeto (obrigatório)</label>
[textarea* your-message id:diged-contact-message]
</p>
<p class="diged-contact-v1__privacy">Usaremos os dados informados para responder à sua solicitação. Evite incluir informações sensíveis.</p>
<p>[submit "Enviar mensagem ↗"]</p>
```

Aviso de privacidade é proposta a aprovar antes da publicação; não inventa URL. Quando existir página oficial, acrescentar link real à política próximo ao envio. Não incluir checkbox de marketing nem pedir dados extras. Não instalar armazenamento de mensagens adicional.

## C. Aba Mail

| Campo | Configuração |
| --- | --- |
| To | `adilsondamas@gmail.com` |
| From | **PENDENTE — não colar este texto como endereço** |
| Subject | `[DIG.ED] Novo contato pelo site — [your-name]` |
| Additional headers | `Reply-To: [your-email]` |
| Mail (2) | Desativado |
| Attachments | Vazio |

Corpo em texto simples:

```text
Nome: [your-name]
E-mail: [your-email]
Sobre o que deseja conversar: [your-topic]

Mensagem:
[your-message]
```

Não usar visitante como From. Não aceitar como validado eventual remetente automático gerado pelo CF7. Não preencher endereço inventado para eliminar alerta do validador. É possível preparar campos e aparência, mas a configuração de envio fica incompleta e não deve ser publicada como funcional. Não ativar demo_mode ou skip_mail para obter sucesso artificial.

### Remetente / transporte: alternativas a verificar

1. **Hospedagem:** verificar com suporte/painel se há relay autenticado disponível para o site e quais identidades reais de remetente ele autoriza. Não presumir que PHP mail ou wp_mail já tenham autenticação/entregabilidade. Sem identidade confirmada, manter pendência.
2. **Conta do domínio futura:** após decisão separada, uma caixa ou identidade de envio efetivamente provisionada e autenticada pode ser usada. Não criar conta nem alterar DNS nesta etapa.
3. **Conta Gmail existente por transporte autenticado:** alternativa técnica a avaliar com autorização do titular e compatibilidade do transporte. To não autoriza automaticamente usar a conta como From. Pode gerar aviso de domínio no CF7 e exigir conector/autenticação adicional; não configurar SMTP simples com From Gmail arbitrário nem desativar validação para ocultar problema.
4. **Serviço transacional com identidade verificada:** opção futura que envolve terceiros, possível DNS e integração adicional; depende de aprovação explícita. Não adotado agora.

Obter o endereço autorizado e o método real antes de preencher From. Guardar segredos somente no mecanismo seguro da hospedagem/integração aprovada, nunca neste documento, tema ou Git. Verificar SPF/DKIM/DMARC existentes sem alterá-los. A aceitação por wp_mail não comprova chegada à caixa do destinatário.

## D. Aba Messages

- Envio realizado: “Sua mensagem foi enviada. Obrigado por entrar em contato.”
- Falha ao enviar: “Não foi possível enviar sua mensagem. Tente novamente.”
- Validação geral: “Revise os campos indicados antes de enviar.”
- Campo obrigatório: “Preencha este campo.”
- E-mail inválido: “Informe um e-mail válido.”
- Spam: “Não foi possível enviar sua mensagem. Revise os dados e tente novamente.”

Não configurar redirecionamento que esconda o retorno nem mensagem de sucesso ao clique. Preservar os mecanismos nativos de anúncio acessível e associação dos erros; verificar teclado/leitor de tela com a versão real.

## E. Inserção no Gutenberg

1. Confirmar template **Página com título no conteúdo** na página Contato.
2. No Group off-white, manter `diged-contact-v1__form-intro` à esquerda. Quando a integração estiver pronta, acrescentar nele a copy aprovada: “Preencha o formulário abaixo. Assim, já teremos um ponto de partida para responder com mais contexto.”
3. Inserir o bloco **Contact Form 7**, selecionando o formulário real, como irmão do Group de introdução. Alternativa: copiar o shortcode oficial fornecido pelo painel, com ID real. Nenhum ID é indicado aqui.
4. Desktop: esquerda introdução, direita formulário. Até 1024px: empilhamento; campos usam largura disponível. Confirmar wrapper `.wpcf7` no frontend e largura em 390/781/1024/1440px.
5. Não publicar a orientação antes do formulário funcional. Formulários/páginas são dados do WordPress; o repositório não os cria. Depois de obter ID e validar, decidir se a associação deve também entrar no pattern, evitando IDs não portáveis entre ambientes.

## F. Antispam, privacidade e duplicidade

Usar inicialmente a lista local de chaves não permitidas do WordPress compatível com CF7 (Configurações → Discussão). Testar com um termo exclusivo de teste e removê-lo depois. Isso bloqueia conteúdo conhecido; não equivale a proteção robusta contra todos os bots. Se insuficiente, submeter a decisão sobre proteção de servidor ou integração adicional. Não ativar Akismet/reCAPTCHA/Turnstile sem aprovação: envolvem terceiros.

Testar duplo clique e Enter repetido com rede lenta, verificar uma única requisição/envio e estado de submissão do CF7. Não usar pointer-events como suposta proteção. O plugin deve impedir reenvios durante a requisição; a versão real precisa ser testada. Isso não garante idempotência entre requisições independentes. Caso o teste produza duplicidade, manter publicação pendente e definir solução aprovada, sem código de envio próprio no tema.

Aprovar aviso e política, definir retenção e acesso à caixa Gmail, considerar que o destinatário confirmado utiliza provedor externo. Não habilitar CRM, webhooks, telemetria ou armazenamento adicional. Não incluir IP, agente de navegador ou conteúdo de mensagem em logs públicos. Inspecionar logs técnicos sem expor dados e apagar dados de teste conforme procedimento aprovado.

## G. Teste ponta a ponta — ainda não executado

1. Confirmar From e transporte autenticados; CF7 sem erro de configuração, sem demo/skip_mail.
2. Campos vazios e e-mail inválido: rejeição e erro associado, também no servidor. Select vazio deve ser aceito.
3. Enviar com dados de teste autorizados: resposta de sucesso, exatamente uma mensagem recebida no Gmail, conteúdo correto, Reply-To correto; testar responder sem enviar resposta involuntária.
4. Verificar spam/pasta de entrada e cabeçalhos de autenticação. Não chamar de funcional só porque apareceu sucesso.
5. Falha controlada de transporte em staging: erro visível e anunciado, sem sucesso falso. Restaurar configuração sob autorização.
6. Termo da lista antispam: não enviar; testar também uma mensagem legítima.
7. Duplo clique, Enter, rede lenta, timeout e tentativa posterior: sem envios duplicados no teste.
8. Teclado/leitor de tela: labels, required/invalid, retorno e erros percebidos sem depender de cor.
9. Verificar layout, zoom, overflow e toque de 44px; outras páginas/formulários inalterados.

## Referências oficiais

- https://contactform7.com/text-fields/
- https://contactform7.com/form-autocompletion/
- https://contactform7.com/setting-up-mail/
- https://contactform7.com/configuration-errors/email-not-in-site-domain/
- https://contactform7.com/comment-blacklist/
- https://contactform7.com/configuration-validator-faq/

## V1.3 — inspeção pública e refinamento visual

O responsável confirmou FluentSMTP/Gmail autenticado e recebimento real. Isso atualiza o estado histórico acima; o transporte não foi inspecionado nem modificado nesta rodada. A leitura pública de `/contato/` encontrou CF7 6.2.1, formulário real 49, dentro de Columns Gutenberg (33,33% / 66,66%). Nenhum ID foi incorporado ao pattern: a associação funcional permanece na página salva.

Markup encontrado: labels envolvendo campos, br entre label e controle, campos your-name/your-email, your-subject como texto obrigatório, your-message opcional, submit “Enviar”, live region nativa e `.wpcf7-response-output`. Não há select nem aviso de privacidade nessa resposta pública. Não alterar esses campos via CSS nem trocar tags no banco nesta rodada: a adequação ao esquema aprovado depende de edição explícita no CF7, preservando o Mail configurado.

CSS atualizado: 24px entre grupos de campo; 8px entre label e controle; labels 600 e valores 400 (para não herdar peso dos labels envolvidos); campos 100%, min-height 44px; foco visível e textarea redimensionável verticalmente. Ocultar somente br diretamente dentro dos labels elimina espaçamento redundante; não remove labels ou elementos acessíveis. Retornos usam texto grafite, superfície branca e divisor grafite discreto independentemente de sucesso/falha, sem código verde/laranja; o significado permanece na mensagem textual nativa. Select e aviso de privacidade têm estilo preparado, mas estão ausentes no formulário publicado e não foram verificados visualmente.

A introdução aprovada foi restaurada no pattern local. Patterns não sincronizados não atualizam a instância salva: na página real, inserir o parágrafo abaixo do H2 na coluna esquerda, mantendo o bloco CF7 atual à direita. Não reinserir todo o pattern por cima do formulário funcional. Nenhuma alteração de painel foi feita.

Verificações realizadas: inspeção read-only do HTML público, correspondência dos seletores, JSON, blocos e diff. Não houve envio de teste, acionamento real dos estados de sucesso/falha, inspeção visual em navegador ou teste de foco por teclado. Após publicação autorizada: conferir 390/781/1024/1440px, foco, select quando configurado, textarea e respostas reais, preservando o transporte já validado.

## Acabamento final V1.3 — estado público atualizado

Nova leitura pública confirma select `your-topic`, mensagem obrigatória, botão “Enviar mensagem ↗” e aviso `.diged-contact-v1__privacy-note`. As divergências registradas na inspeção anterior quanto à ausência desses campos estão superadas. Envio/Gmail/remetente autenticado foram confirmados pelo responsável; nenhuma configuração foi alterada nem envio de teste realizado pelo agente.

CSS agora contempla a classe real do aviso, sem mudar o texto. H2 da seção recebe o mesmo token H1 local usado em contato direto. Columns nativo publicado mantém proporções desktop, gap 64px e empilha até 1024px com gap 32px. Labels/campos/retornos usam os seletores reais já preparados. Região de anúncio e estado aria do plugin permanecem intactos.

Pendência no Gutenberg: inserir na coluna esquerda, abaixo do H2, o parágrafo já restaurado no pattern: “Preencha o formulário abaixo. Assim, já teremos um ponto de partida para responder com mais contexto.” Preservar o bloco CF7 existente à direita e o CTA WhatsApp validado. O aviso público menciona Política de Privacidade sem link; vincular somente quando existir destino real aprovado, sem inventar URL. Não substituir a página inteira pelo pattern, que não carrega o vínculo ao formulário real salvo no banco.

Verificação nesta rodada: inspeção HTML read-only do staging, select/textarea/submit/classes de privacidade/live region; JSON e diff local. Testes visuais em viewports e interação por teclado/estados de retorno ainda exigem navegador após aplicação autorizada; não foram simulados como resultado de envio real.
