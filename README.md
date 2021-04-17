# Laravel-crud
[![Latest Stable Version](https://poser.pugx.org/hum/crud/v)](//packagist.org/packages/hum/crud) 
[![Total Downloads](https://poser.pugx.org/hum/crud/downloads)](//packagist.org/packages/hum/crud) 
[![Latest Unstable Version](https://poser.pugx.org/hum/crud/v/unstable)](//packagist.org/packages/hum/crud)
[![License](https://poser.pugx.org/hum/crud/license)](//packagist.org/packages/hum/crud)
PHP-CRUD
=======
A simple library for laravel crud.

Installation
------------

Use composer to manage your dependencies and download Laravel-crud:

```bash
composer require hum/crud:dev-main
```

Example
-------
```php
use hum\crud\Crud;

$humcrud = new Crud();
return $humcrud->testgreet("HUM");
