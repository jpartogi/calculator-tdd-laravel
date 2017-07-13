# Calculator TDD with Laravel

## Prerequisites:

1. PHP is installed and you can run `php -v` from the command line.
2. Composer is already installed and can be called from the command line with this command `composer -v`. Go to https://getcomposer.org/download/ to download composer if you have not already.
3. XDebug is installed. If you haven't, please download it from http://xdebug.org

## Steps

1. Run each of these commands from the console in sequential order:

- `composer update` 
- `cp .env.example .env` from the command line
- Run `php artisan key:generate`
- Run `php artisan serve`

2. Access the case study from the browser using this URL: http://localhost:8000/api/calc?input=1