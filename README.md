# projeto desenvolvido em mvc, não mexa na pasta static.
# a pasta config contem 2 arquivos, constants.php que representa as constants do sistema e routes.php.

Pastas do sistema:

Descrição - O sistema inicia no index.php independentemente da rota escolhida. A index que inclui a core e rules que montam as regras de negocio do sistema e as routes que compoem o sistema através da Controller, Model e View escolhida.

config: Esta pasta representa os arquivos configuraveis do sistema.
  constants.php - Contém todas as constantes do sistema.
  routes.php - Contém todas as rotas do sistema.

app: Esta pasta contém o mvc do sistema. Em caso de mudanças no sistema reveja os metodos dele.
  Controller - Contém os controllers do sistema. Representa a parte executavel do sistema.
  Helpers - Contém os helpers do sistema que são funções de uso rápido, por exemplo uma função que faz a conversão de datas.
  Model - Contém os Models que são conexões com o banco de dados. O arquivo Model.php contém a conexão e todos os outros métodos herdam dele.
  Views - Representam as Views do sistema. Estas que são responsáveis pela parte do front-end do sistema.

static: Esta pasta contém as regras de negocio do sistema. Jamais mude!


.htaccess

# Turn rewriting on
Options +FollowSymLinks // esta opção não permite que as pastas sejam expostas.
RewriteEngine On // habilita o redirecionamento
RewriteRule ^(assets|login)($|/) - [L] // desabilita o redirecionamento para a pasta assets e login
# Redirect requests to index.php
RewriteRule .* index.php // redireciona todas as requisições para a index.php
