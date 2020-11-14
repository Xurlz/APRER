# Como executar o projeto

## Instalação de terminal
Se estiver usando Windows, é recomendavel Instale um terminal bash. Ele pode ser obtido fazendo download neste link:
https://git-scm.com/downloads 

## Pré requisitos
Será preciso ter o PHP (de preferencia a versão 5.4). Além de ter os genciadores de pacotes npm e composer instalados.

### Links
PHP: https://www.php.net/distributions/php-7.4.12.tar.bz2
Node com npm: https://nodejs.org/
Composer: https://getcomposer.org/download/

## Branch correta
O projeto atual está em outra branch, para entrar na branch correta execute:
<code>git checkout laravel</code>

## Pacotes e comandos específicos
Para poder executar a pagina, Abra o terminal bash na raiz do projeto e execute os seguintes comandos:

    composer install
    npm install
    npm run dev
    touch database/database.sqlite
    cp .env.dev .env
    php artisan serve --port 8000

Após isso entre em <code>localhost:8000</code>


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
