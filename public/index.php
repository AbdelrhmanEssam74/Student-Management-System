<?php

use Dotenv\Dotenv;
use PROJECT\Validation\Validation;
use PROJECT\Validation\Rules\RequireRule;
use PROJECT\Validation\Rules\AlphaNum;
require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();

$validator = new Validation();

$validator->rules([
    'username' => ['required' , 'alphaNum'],
]);

$validator->make([
    'username' => '',
]);
echo "<pre>";
var_dump($validator->errors());
echo "</pre>";


