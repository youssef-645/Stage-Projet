INSTRUCTIONS:

#mote de pass: admin:admin

#run:
composer update
composer install

#modifier .env ficher et ajouter votre DB

#run
php artisan migrate:fresh
php artisan db:seed
