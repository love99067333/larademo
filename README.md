# Laravel Demo

## Demo For Someone want to hire me :D
## 小小練習給想找專業人才的公司參考

### 安裝環境
```
php 8.0.18
laravel 9.1.5
npm 8.7.0
```

### 安裝流程
```
composer install
cp .env.example .env => change your vars
php artisan key:gen
php artisan jetstream:install livewire
npm install && npm run dev
php artisan migrate
```

### Demo
[點我](https://larademo.onrender.com)

### 這個網站實踐、使用

- Laravel 9 、 PHP 8 、 LNMP(部屬時使用Postgres->因為免費，本地使用Mysql) 、 Docker
- 快速引用了一些套件(jetstream...)
- 依賴注入、Service&Repostory Patern [(Api Docs)](https://www.postman.com/supermemo/workspace/79e822a8-4ce3-41be-a087-a393b106f55c/overview)
- Model Relations
- 部屬到雲主機 [(Render)](https://render.com/)
- Github Flow

### 此分支說明

- 保證main主分支乾淨，把需要deploy的設定寫在此分支
- 基本上只會有main的檔案merge進此分支，此分支不會回到main