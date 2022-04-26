#!/usr/bin/env bash
/usr/local/bin/docker-php-ext-configure sockets
/usr/local/bin/docker-php-ext-install sockets

echo "Running composer"
composer self-update --2
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

# jetstream
echo "install jetstream"
php artisan jetstream:install livewire
npm install && npm run dev

echo "Clear Cache"
php artisan cache:clear

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Optimize"
php artisan optimize

echo "Running migrations..."
php artisan migrate --force