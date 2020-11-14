# Como executar o projeto

Se estiver usando Windows, é recomendavel Instale um terminal bash. Ele pode ser obtido fazendo download neste link:
https://git-scm.com/downloads 

Abra o terminal bash na raiz do projeto e execute os seguintes comandos:

    composer install
    npm install
    npm run dev
    touch database/database.sqlite
    cp .env.dev .env
    php artisan serve --port 8000

Após isso entre em <code>localhost:8000</code>


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
