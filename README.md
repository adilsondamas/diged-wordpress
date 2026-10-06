# DIG.ED — WordPress

Repositório dedicado ao tema próprio de blocos DIG.ED. A raiz contém diretamente os arquivos do tema e corresponde a `wp-content/themes/diged` na instalação WordPress.
WordPress mínimo: 6.6 (`theme.json` versão 3). Usar uma versão estável mantida do WordPress e PHP no ambiente de destino.

## Escopo

Somente blocos nativos, sem plugins, bibliotecas externas, build, PHP próprio ou JavaScript próprio. Nenhuma página, menu ou conteúdo é criado na ativação. O título e a descrição do site vêm das configurações do WordPress; não são o wordmark nem uma nova assinatura.

As larguras, margens laterais e entrelinha em theme.json são parâmetros técnicos provisórios para leitura e responsividade, não decisões de identidade. Não foram definidos cores, fontes, ícones ou imagens. O arquivo style.css identifica o tema; não contém regras que precisem ser carregadas. functions.php não é necessário nesta etapa.

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
