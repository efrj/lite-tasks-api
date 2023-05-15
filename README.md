# Produtos

## Rodando a API com Docker
Entre no diretório "products-api" 

``cd products-api`` 

Copie o arquivo ".env.example" para ".env"

``cp .env.example .env``

Execute o comando ``docker-compose up`` 

Instale as dependências do projeto. 
Entre no container 

``docker container exec -it php.products-api /bin/bash`` 

Volte um diretório 

``cd ..``

Use o comando "composer install" 

``composer install`` 

Gere a API Key da aplicação" 

``php artisan key:generate`` 

Dê permissão para o usuário www-data no diretório 'storage'" 

``chown -R www-data:www-data /var/www/storage/`` 

Execute o comando com o Docker para rodar as migrations no container do PHP 

``php artisan migrate`` 

Acesse a API através da url "http://localhost:8000" 

O arquivo "Tasks_Postman_Collection.json" presente na raiz do projeto contém os endpoints da API e pode ser importado no Postman/Insomnia. 

Há uma aplicação front-end que consome esta API. O repositório é este: https://github.com/efrj/lite-tasks-front-end
