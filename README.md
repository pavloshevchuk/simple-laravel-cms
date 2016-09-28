# Simple Laravel CMS

About
-----
Basic CMS with content editing functionality based on [Laravel PHP framework 2](https://laravel.com/).
 
Requirements
------------
* PHP 5.6
* MySQL
* Composer

Packages
--------
* Laravel framework 5.3.
* Bootstrap framework 3.3.

Usage
-----
### Install core component:
```
$ composer install
```

### Run application:
```
$ php -S localhost:8000 -t public
```
Or 
```
$ php bin/artisan serve
```

Models
------
Create a model instance with migration:
```
$ php bin/artisan make:model Model\User --migration
```

Migrations
----------
Running migrations:
```
$ php bin/artisan migrate --force
```
Rolling back migrations:
```
$ php bin/artisan migrate:rollback --step=1
```
Resetting all migrations:
```
$ php bin/artisan migrate:reset
```
