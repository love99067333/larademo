#!/usr/bin/env bash
/usr/local/bin/docker-php-ext-configure sockets
/usr/local/bin/docker-php-ext-install sockets

echo "Running composer"
composer self-update --2
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

# jetstream
echo "install jetstream"
apk add --update npm
php artisan jetstream:install livewire
npm install && npm run dev

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force