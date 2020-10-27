#!/bin/bash

app='laravel-app'
ruta=`pwd`

composer create-project  --prefer-dist  laravel/laravel $app 8

cd $app
#composer dump-autoload
#composer install --no-scripts
#composer update

php artisan -V

npm install

#echo "Para añadir los enlaces simbolicos"
#sudo ln -s $ruta/$app /var/www/html/$app
