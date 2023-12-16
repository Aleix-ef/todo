# Laravel 9 To-Do Application
# Quick deployment

git clone https://github.com/acoloma-edu/todo.git todo

cd todo

cp .env.example .env

edit .env file with appropiate properties, including existing database and user with DDL and DML permissions

composer install

cp .env.example .env

php artisan migrate

create a virtualhost on your nginx/apache service.
