<?php

use Dotenv\Dotenv;
use PROJECT\support\Arr;
use PROJECT\support\Config;
use PROJECT\support\Hash;
use PROJECT\Validation\Validation;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();

$validator = new Validation();

$validator->rules([
    'username' => 'required|string',
    'email' => 'required|email',
]);
echo "<pre>";
$validator->make([
    'username' => 'abdelrhman',
    'email' => 'abdelrhman@gamail.com',
]);
echo "</pre>";
