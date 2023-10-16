## Este projeto foi desenvolvido com Laravel, PostgreSQL, Bootstrap e JavaScript.

A seguir, apresentamos as principais tecnologias que estão por trás desta aplicação:

## FRONTEND:

- HTML
- CSS
- Bootstrap
- JavaScript

## BACKEND:

- Laravel
- PHP
- PostgreSQL

## 🚀 Começando

## Geral:

Utilize o Visual Studio Code e instale os plugins eslint, prettier e editor config em sua IDE.
Instale o Homebrew https://brew.sh .

## Instalando o Laravel:

Para instalar o Laravel, é necessário ter o Composer já instalado. Se você não tiver o Composer em seu computador, pode aprender a instalá-lo neste link https://getcomposer.org/ .

É necessário ter o PHP configurado em seu computador.

Neste projeto, é usada a versão mais recente do PHP.

Após instalar o PHP e o Composer, você pode criar novos projetos Laravel instalando globalmente o instalador do Laravel via Composer:

"composer global require laravel/installer"

Para obter mais informações sobre a instalação do Laravel, consulte a documentação em: https://laravel.com/docs/10.x

## Configurando o arquivo .env da aplicação e conectando ao Banco de Dados PostgreSQL:

O PostgreSQL é utilizado neste projeto para armazenar dados em um banco de dados. Por padrão, o arquivo ".env", arquivo de configuração da aplicação, especifica que o Laravel se conectará a um banco de dados PostgreSQL e acessará o banco de dados em 127.0.0.1.

Cada instalação em um novo ambiente requer um arquivo de ambiente personalizado para definir configurações como informações de conexão ao banco de dados, opções de depuração, URL da aplicação e outros itens que podem variar dependendo do ambiente em que a aplicação está sendo executada.

Edite o arquivo .env na raiz do nosso projeto e insira as credenciais do nosso banco de dados. Deverá ficar assim:

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Além disso, verifique se o PHP possui as extensões DLL necessárias deste banco de dados definidas no arquivo de configuração. Se estiver utilizando XAMPP, verifique essa configuração no arquivo xampp/php/php.ini. As duas linhas a seguir devem estar descomentadas:

extension=pdo_pgsql
extension=pgsql

Agora que toda a configuração inicial está concluída, inicie o servidor da API. Para isso, execute o comando "php artisan serve" no Terminal.

## Executando a migração:

As migrações são uma forma de controle de versão para seu banco de dados. Elas permitem que uma equipe modifique o esquema do banco de dados e fique atualizada sobre o estado atual do esquema.

Para executar as migrações do projeto, use o comando:

"php artisan migrate"