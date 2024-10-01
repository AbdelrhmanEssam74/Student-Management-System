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
    'username' => 'required|max:25|alphaNum',
]);
$validate->make(['username' => '']);

echo "<pre>";
print_r($validate->errors());
echo "</pre>";

