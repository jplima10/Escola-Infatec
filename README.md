Documentação Software Infatec - João Pedro Fontinele Lima - Projeto feito em PHP

Configuração Inicial - 

Dentro da pasta do projeto, rodar o comando ‘composer install’ no terminal

Configurando o banco de dados -> O banco de dados utilizado é o Mysql -> Dentro do WorkBench é necessario criar um schema com o nome de 'infatec', após a criação o arquivo .env na raiz do projeto tem que tá com as seguintes informações:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=infatec
DB_USERNAME=root
DB_PASSWORD=root

Após esses passos, rodar o comando 'php artisan migrate', com isso o banco de dados será conectado.

Logo em segui rodar o comando ‘php artisan key:generate’ 

E por último para rodar o projeto com o comando ‘php artisan serve’

Primeiro acesso - 
Para conseguir fazer o primeiro acesso, entrar na url ‘http://127.0.0.1:8000/direcao’ e cadastrar um diretor. o acesso será o email do diretor criado e a senha será o cpf do próprio diretor

Logo após conseguirá realizar o login normalmente, entrando pela url ‘http://127.0.0.1:8000’

Logo após teremos a url principal no site, onde se encontram as abas de cada perfil cadastrado que são, direção, docente, aluno, disciplina e turma.

Em cada um tem um CRUD completo, podendo cadastrar, exibir, editar e excluir cada usuário. 
