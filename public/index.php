<?php

use Dotenv\Dotenv;
use PROJECT\Validation\Validation;
require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();

$validator = new Validation();

$validator->rules([
    'username' => ['required' , 'alphaNum']
]);

$validator->make([
    'username' => 'abdo',
]);
echo "<pre>";
var_dump($validator->errors());
echo "</pre>";


