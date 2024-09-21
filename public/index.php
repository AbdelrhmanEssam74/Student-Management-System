<?php

use Dotenv\Dotenv;
use PROJECT\support\Arr;
use PROJECT\support\Config;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();
config(['database.default' => 'postgresql']);
echo "<pre>";
var_dump(config('database'));
echo "</pre>";

