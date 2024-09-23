<?php

use Dotenv\Dotenv;
use PROJECT\support\Arr;
use PROJECT\support\Config;
use PROJECT\support\Hash;
use PROJECT\Validation\Validation;
use PROJECT\Validation\RequireRule;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();

$validator = new Validation();

$validator->rules([
    'username' => [new RequireRule()],
]);

$validator->make([
    'username' => '',
]);
echo "<pre>";
var_dump($validator->errors());
echo "</pre>";


