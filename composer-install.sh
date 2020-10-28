#!/bin/bash

#Script para instalar composer en sistemas basados en ubuntu:
#https://getcomposer.org/download/

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'c31c1e292ad7be5f49291169c0ac8f683499edddcfd4e42232982d0fd193004208a58ff6f353fde0012d35fdd72bc394') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

sudo mv composer.phar /usr/local/bin/composer


#Esto funciona en sistemas basados en ubuntu (pero no saca la última versión):
#sudo apt-get install composer




#Librerias necesarias (hace falta tener un lamp):
sudo apt-get install npm php7.4-xml

#Hace falta tener el mod rewrite activado (activarlo en vhosts también) :
sudo a2enmod rewrite



