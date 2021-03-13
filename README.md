## Introduction

A books app with relationship example in Laravel with Breeze scaffolding.

## Installation

```
git clone https://github.com/bohmm/books-app.git

cd books-app

composer install

cp .env.example .env

php artisan key:generate
```

configure the `.env` file to access the database

```
php artisan migrate:fresh --seed
```
