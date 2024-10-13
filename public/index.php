<?php

use Dotenv\Dotenv;
use App\Models\User;
use PROJECT\Validation\Validation;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();

echo "<pre>";
print_r(class_basename(User::class));
echo "</pre>";

