<?php

use Dotenv\Dotenv;
use PROJECT\support\Arr;
use PROJECT\support\Config;
use PROJECT\support\Hash;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();

