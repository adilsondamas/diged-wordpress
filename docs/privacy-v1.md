# Política de Privacidade V1 — integração e validação

Minuta aprovada como base editorial; não constitui declaração de conformidade legal integral. Pattern `diged/privacy-v1`, dez seções, um H1 e dez H2, leitura até 42rem, Work Sans e Body 18/1.55. A organização e o texto aprovados foram preservados, com explicitação de não uso automático para publicidade/newsletters e menção nominal à LGPD. Na revisão V1.1, Cloudflare Turnstile Managed foi incluído com base na configuração e nos testes confirmados pelo responsável. O slug e o nome do pattern permanecem estáveis.

## Pendências antes da publicação pública

- Validar bases legais para as finalidades e eventuais transferências internacionais; não foram definidas por suposição no texto.
- Confirmar no frontend/requisições a retirada do Hostinger Reach, desativado pelo responsável. Não consta como serviço ativo na política.
- Inventariar cookies e armazenamento em navegador. A redação de cookies continua provisória até essa verificação.
- Confirmar logs/retenção do FluentSMTP, acesso/erro e backups da Hostinger, prazos e práticas de conservação do Gmail/WhatsApp e pessoas com acesso. Não foram inventados prazos, localização ou garantias de exclusão de backups.
- Turnstile Managed confirmado pelo responsável; incluir essa integração no inventário de cookies e sinais técnicos. Não presumir ativação de pre-clearance ou emissão de cookies específicos apenas pelo modo Managed.
- Definir procedimento de atendimento aos titulares pelo canal aprovado.
- Preencher a data real de atualização ao aprovar a versão para publicação. A pendência está documentada aqui e em comentário PHP não renderizado. Inserir após o H1 um parágrafo Small com “Última atualização:” seguido da data real aprovada; nenhum placeholder é exibido ao visitante. Não usar data dinâmica do servidor ou do post para simular revisão do texto.

## Integração no Gutenberg

1. Criar uma página chamada “Política de Privacidade”. Manter em rascunho até concluir as verificações acima.
2. Selecionar **Página com título no conteúdo** (`content-title`). Esse arquivo não contém core/post-title, somente post-content full, Header e Footer. Assim o H1 do pattern é o único título principal; verificar também se há personalização do template salva no banco.
3. Inserir uma vez o pattern **DIG.ED — Política de Privacidade V1**. Revisar texto, email e data. O tema fornece padding lateral via template; conteúdo limitado a 42rem, sem novas superfícies.
4. Após aprovação factual, publicar e abrir a página para confirmar a URL efetivamente gerada. Não é prescrita URL fictícia neste guia.
5. Em **Configurações → Privacidade**, selecionar a página publicada e salvar.
6. No formulário real do Contact Form 7, transformar a menção “Política de Privacidade” do aviso em link para essa URL. Manter o texto aprovado e toda configuração de Mail/SMTP. Não substituir o formulário ou reinserir a página Contato.
7. Conferir “Privacidade” no Footer em todas as páginas. O pattern existente usa get_privacy_policy_url(); nenhuma alteração do Footer é necessária quando essa integração funciona. Se o link não aparecer, verificar cache e instância salva da part antes de qualquer alteração de código.
8. Testar desktop/tablet/mobile, zoom, navegação por teclado e destino dos links. Confirmar um H1 e dez H2, sem overflow e sem marcador de data pendente.

Patterns não sincronizados: futuras alterações de texto no arquivo não atualizam automaticamente a página salva. Registrar revisões reais e manter publicação/documentação coerentes.

## Validação local

JSON, atributos e balanceamento de blocos, hierarquia de headings, ausência de core/post-title no template e preservação das páginas existentes. Não há WordPress/PHP local para validar inserção/renderização completa. Nenhuma página, configuração ou banco foi alterado nesta etapa.

## Revisão V1.1 — Turnstile Managed

Alterações exclusivamente editoriais: seção 3 explicita a finalidade antispam; seção 5 inclui o fornecedor; seção 9 descreve sinais técnicos e aponta sua política. As demais seções permanecem adequadas e inalteradas, incluindo a redação prudente de conservação, transferências e cookies. Sem data de publicação presumida.

Fontes oficiais consultadas:

- [Adendo de Privacidade do Turnstile](https://www.cloudflare.com/turnstile-privacy-policy/): sinais técnicos e uso para proteção e aprimoramento da detecção de bots. A base jurídica mencionada pelo fornecedor para seus próprios tratamentos não foi transposta como base da DIG.ED.
- [Modos do widget](https://developers.cloudflare.com/turnstile/concepts/widget/): Managed pode solicitar interação; não foi prometida verificação sempre invisível.

### Atualização manual do rascunho existente

Não reinserir o pattern inteiro: o arquivo PHP não sincroniza a instância já salva no Gutenberg. Manter template, headings, classes e estilos atuais. Na Visão em lista, localizar as seções e aplicar apenas estes três ajustes:

1. **Seção 3:** substituir o item “Manter o funcionamento e a segurança dos canais de contato.” por:

   > Manter o funcionamento e a segurança dos canais de contato, incluindo a prevenção de spam e abuso no formulário.

2. **Seção 5:** inserir um item de lista entre Google/Gmail e WhatsApp Business, com apenas o nome do serviço em negrito:

   > **Cloudflare Turnstile (modo Managed):** verificação de segurança integrada ao formulário de contato para ajudar a prevenir spam e abuso automatizado.

3. **Seção 9:** inserir um parágrafo Body após o primeiro parágrafo e antes de “As fontes do tema…”, usando exatamente:

   > Ao carregar o formulário, o Cloudflare Turnstile processa sinais técnicos, como endereço IP, informações do navegador, características da conexão segura e identificação do site, para distinguir acessos humanos de automações. Segundo a Cloudflare, esses sinais também são utilizados para aprimorar a detecção de bots. Saiba mais no [Adendo de Privacidade do Turnstile](https://www.cloudflare.com/turnstile-privacy-policy/).

Preservar integralmente os demais parágrafos da seção 9, sobretudo a ressalva sobre cookies. Salvar como rascunho, conferir um H1 e dez H2 e pré-visualizar desktop/mobile. Conferir o link do adendo. Não alterar formulário ou integrações. A data real e as demais pendências acima continuam necessárias antes da publicação pública.
