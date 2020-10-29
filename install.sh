#!/bin/bash

app='laravel-app'
ruta=`pwd`

composer create-project  --prefer-dist  laravel/laravel $app 8

cd $app

cp -R ../extra/* .

chmod -R 777 storage/logs
chmod -R 777 storage/framework


#composer dump-autoload
#composer install --no-scripts
#composer update

php artisan -V

npm install

composer update

php artisan migrate

php artisan db:Seed

#echo "Para añadir los enlaces simbolicos"
#sudo ln -s $ruta/$app /var/www/html/$app
