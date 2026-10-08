# Vamos conversar V1 — integração pendente

## Estado local

Pattern `diged/contact-v1`, para o template existente “Página com título no conteúdo”. Quatro seções: Hero, contato direto, introdução do formulário e fechamento coral. Somente estrutura editorial: **não publicar como página funcional antes de integrar os canais**. A orientação do formulário foi omitida do pattern enquanto a integração não estiver funcional. Copy aprovada a inserir somente junto do formulário real: “Preencha o formulário abaixo. Assim, já teremos um ponto de partida para responder com mais contexto.” Não foi inserida simulação, campo HTML, shortcode inválido ou área vazia reservada.

WhatsApp comercial e destinatário comercial não foram encontrados no repositório. Não se inspecionou o banco/painel, portanto configurações exclusivas do WordPress permanecem desconhecidas. Nenhum plugin instalado, serviço conectado ou envio realizado.

## 1. WhatsApp Business

1. Receber do responsável o número comercial completo com país/DDD, confirmar titularidade comercial e que recebe WhatsApp Business. Não inferir um número pessoal.
2. Após validação, montar `https://wa.me/` seguido apenas dos dígitos internacionais, sem +, espaços ou pontuação. Acrescentar `?text=` com a mensagem codificada: “Olá! Conheci a DIG.ED pelo site e gostaria de conversar sobre um projeto.”
3. Inserir um Button nativo após o texto de contato direto: “Conversar pelo WhatsApp ↗”. Usar coral/branco, mínimo 44px, foco visível. A seta pode ser decorativa, mantendo o nome acessível da ação. Preferir mesma aba.
4. Testar aplicativo mobile e WhatsApp Web com o destinatário real. Não enviar mensagem de teste sem autorização. Não carregar SDK/widget Meta ou rastreador: o usuário decide abrir o link.

Nenhum botão é renderizado até haver destino validado. A prioridade visual prevista é CTA coral na seção direta, anterior à alternativa de formulário.

## 2. Plugin recomendado: Contact Form 7

Plugin consolidado com bloco Gutenberg, validação de campos e mensagens de retorno. O envio fica no plugin/WordPress, não em código PHP/JS do tema. Recomendação sujeita à aprovação; não é uma instalação autorizada. Não usar modo demo ou skip_mail, pois podem simular sucesso sem envio.

O plugin fornece seu próprio JavaScript quando instalado. A restrição desta etapa é não adicionar JS próprio nem instalar dependências. Não prometer deduplicação transacional ou confirmação de entrega ao destinatário: esses pontos exigem testes e, se não atendidos pela configuração disponível, decisão adicional antes da publicação.

## 3. Configuração no painel, após aprovação

1. Instalar/ativar Contact Form 7 em staging e criar “DIG.ED — Contato”. Não instalar CAPTCHA, CRM, analytics, Akismet ou serviços de terceiros automaticamente.
2. Criar campos com labels explícitos e IDs únicos: Nome (text obrigatório, autocomplete name), E-mail (email obrigatório, autocomplete email), “Sobre o que vamos conversar?” (select opcional: CREATE / LEARN / Ainda não sei ou outro desafio), “Conte um pouco sobre seu projeto” (textarea obrigatório). O terceiro campo não deve impedir envio se não preenchido.
3. Botão: “Enviar mensagem ↗”. Não adicionar telefone, orçamento, prazo, upload ou inscrição em marketing. Confirmar mínimos de 44px, Body 18/1.55, mensagens legíveis e foco visível com o DOM real do plugin. CSS de integração, se necessário, deverá ser restrito a `.diged-contact-v1`; não antecipado nesta rodada.
4. Aba Mail: destinatário comercial validado; remetente real autorizado do domínio; Reply-To com o campo de e-mail validado do visitante (não usar visitante como From). Assunto “DIG.ED — contato pelo site”; corpo contendo somente nome, e-mail, assunto escolhido e mensagem. Desativar Mail (2) por padrão, evitando respostas automáticas para terceiros abusivamente.
5. Confirmar transporte de e-mail do ambiente. Usar configuração segura do host ou solução SMTP aprovada separadamente se necessária. Nenhuma senha, chave ou credencial no tema/Git. Verificar SPF/DKIM e entrega com o responsável pelo domínio.
6. Mensagens em português para obrigatório, e-mail inválido, spam, falha de envio e sucesso. Sucesso apenas quando o plugin retornar resultado real de envio; não ao clicar. Exemplo: “Sua mensagem foi enviada. Obrigado por entrar em contato.” Falha: “Não foi possível enviar sua mensagem. Tente novamente.” Não prometer prazo de resposta.
7. Inserir a copy de introdução preservada acima e, em seguida, o bloco Contact Form 7 com o formulário real selecionado, dentro do Group da seção off-white. Shortcode copiado do painel é alternativa; nunca inventar ID. Salvar a página com o template `content-title`.

## 4. Antispam, duplicidade e falhas

Começar pelas proteções locais do plugin e pela lista de termos/chaves não permitidos do WordPress em Configurações → Discussão, quando suportada pela versão instalada. Não ativar reCAPTCHA, Turnstile ou Akismet sem decisão explícita, pois envolvem terceiros. Filtragem local básica não garante resistência a bots: testar spam antes de liberar. Se insuficiente, avaliar proteção adicional no servidor ou plugin aprovado, nunca mecanismo próprio de envio no tema.

Testar duplo clique, Enter repetido, conexão lenta, timeout e reenvio. Verificar bloqueio de submissão enquanto a requisição está em andamento e que só haja um envio. Bloqueio no navegador não equivale a deduplicação no servidor; se a proteção requerida não for cumprida, integração fica pendente de solução aprovada. Não bloquear permanentemente um e-mail, pois o mesmo cliente pode enviar outro projeto legítimo.

Testar falha real do transporte em staging de forma controlada e com autorização. Confirmar que retorna erro, não sucesso. `wp_mail` aceito pelo transporte não prova entrega final: testar recebimento real e pasta de spam. Não declarar o formulário funcional apenas pelo validador de configuração do plugin.

## 5. Privacidade e acessibilidade

Antes de publicar, aprovar aviso curto explicando que os dados serão usados para responder à solicitação, e política com responsável, canais, finalidade, retenção e destinatários reais. Inserir link à página de privacidade configurada em Configurações → Privacidade; não inventar URL ou promessa de retenção. Não acrescentar consentimento de marketing. Avaliar necessidade de aceite conforme política aprovada, sem presumir que consentimento genérico é a única base possível.

Não ativar armazenamento adicional (como Flamingo), exportação, CRM ou webhooks nesta fase. Verificar logs do host e retenção na caixa comercial; definir acesso restrito, prazo e descarte, sem registrar conteúdo integral em logs técnicos. E-mail envolve o provedor comercial a ser confirmado; nenhuma integração externa deve ser habilitada silenciosamente.

Validar labels/for, required/aria-required, erro associado a cada campo, resumo/retorno anunciado por leitor de tela e foco recuperável após falha. Não depender apenas de cor. Testar teclado, zoom e mobile. Campos vazios ou inválidos devem ser rejeitados também pelo servidor.

## 6. Aceite antes da publicação

- Número comercial, destinatário, remetente e política confirmados.
- Plugin aprovado/configurado e bloco real inserido.
- Testes de sucesso com recebimento, erro, spam, duplicidade e acessibilidade aprovados.
- Nenhum serviço externo ou credencial introduzido sem autorização.
- Sem overflow em 390/781/1024/1440px; interações de pelo menos 44px.

## Fontes oficiais

- [Bloco, envio e limitações — FAQ](https://contactform7.com/faq/)
- [Configuração de e-mail](https://contactform7.com/setting-up-mail/)
- [Mensagens](https://contactform7.com/editing-messages/)
- [Modos demo e skip_mail](https://contactform7.com/additional-settings/)
- [Validação não testa entrega](https://contactform7.com/configuration-validator-faq/)

## V1.1 — template e largura

A inspeção pública de `/contato/` encontrou um `core/post-title` (“VAMOS CONVERSAR”) e post-content sem `alignfull`, limitados pelo main constrained. Essa estrutura não corresponde a `templates/content-title.html` do repositório e produz dois H1. Não é possível concluir pela URL se a origem é seleção de template ou personalização salva no banco.

No painel, quando autorizado: abrir a página Contato → configurações da página → Template → selecionar **Página com título no conteúdo** → salvar. Se já estiver selecionado, inspecionar a personalização salva desse template no Editor do site e comparar com o arquivo do tema antes de decidir qualquer restauração. Não remover personalizações automaticamente. Confirmar no frontend ausência do título automático e post-content com `alignfull`. Nada disso foi executado nesta tarefa.

O pattern mantém sua raiz full e superfícies no fluxo dessa raiz; interiores agora usam 76rem inclusive no formulário. Não há escape via 100vw, margem negativa ou override do main. Hero já tinha H1 amplo e lead deslocado à direita: passa a funcionar na largura prevista quando o template correto estiver ativo.

Inserir o CTA WhatsApp validado dentro do Group `diged-contact-v1__direct-content`, após o parágrafo. Inserir a copy de introdução pendente dentro de `diged-contact-v1__form-intro`. O bloco real Contact Form 7 deve ser irmão desse Group, diretamente no Group interno off-white. CSS ativa duas colunas somente quando encontra o wrapper nativo `.wp-block-contact-form-7-contact-form-selector` ou `.wpcf7`. Conferir esses wrappers na versão instalada; se divergirem, adaptar o seletor quando houver integração real. Sem formulário, só há a introdução existente, sem segunda coluna vazia renderizada. Shortcode renderizado diretamente como `.wpcf7` também é contemplado.

## Atualização V1.2 — WhatsApp integrado localmente

O responsável confirmou DIGED Studio e o número comercial 5511914918343. A pendência de fornecimento do WhatsApp descrita acima está resolvida. O pattern contém agora o Button nativo com o link exato aprovado e mensagem pré-preenchida, na coluna de conteúdo direto. Não há número exibido como texto, botão flutuante ou envio automático. O teste de abertura no dispositivo continua pendente; nenhuma mensagem foi enviada nesta implementação. Destinatário comercial de e-mail e integração do formulário continuam pendentes. Não é necessário configurar plugin para esse link.

## Atualização — preparação do CF7

Plugin ativo e destinatário `adilsondamas@gmail.com` confirmados pelo responsável. Não há caixa @diged.com.br; From e transporte continuam pendentes. A configuração atual recomendada, código da aba Form e testes estão em [contact-form-7-setup.md](contact-form-7-setup.md), que prevalece sobre as pendências históricas de instalação e destinatário acima. Nenhum ID real foi informado ou inventado, nem configuração aplicada ao painel.
