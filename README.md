# ryan/larademo

Demo For Someone want to hire me :D

### Environment
```php 8.0.18
laravel 9.1.5
npm 8.7.0
```

### Step By Step
```composer install
cp .env.example .env => change your vars
php artisan key:gen
php artisan jetstream:install livewire
npm install && npm run dev
php artisan migrate
```

<!-- Initializer for Laravel Todos START  -->
## TODO

This project was generated using
([Initializer for Laravel](https://laravel.initializer.dev)). To finish
the project setup run the following in your terminal:

```shell
./initialize
```

<!-- Initializer for Laravel Todos END  -->
## Local Development

This project uses
[Laravel Sail](https://laravel.com/docs/sail) to manage
its local development stack. For more detailed usage instructions take a look at
the [official documentation](https://laravel.com/docs/sail).

### Links

- **Your Application** http://localhost
- **Preview Emails via Mailhog** http://localhost:8025
- **MeiliSearch Administration Panel** http://localhost:7700
- **Laravel Telescope** http://localhost/telescope

### Start the development server

```shell
./vendor/bin/sail up
```

You can also use the `-d` option, to start the server in
the background if you do not care about the logs or still want to use your
terminal for other things.

### Build frontend assets

```shell
./vendor/bin/sail npm watch
```

### Run Tests

```shell
./vendor/bin/sail test
```

