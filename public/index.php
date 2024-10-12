<?php

use Dotenv\Dotenv;
use PROJECT\Validation\Validation;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();
$validate = new Validation();
$validate->rules([
    'password' => 'required|password_confirmation',
    'password_confirmation' => 'required'
]);
$validate->make([
    'password' => 'abc',
    'password_confirmation' => 'abc'
    ]);

echo "<pre>";
print_r($validate->errors());
echo "</pre>";

