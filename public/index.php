<?php

use App\Models\User;
use Dotenv\Dotenv;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();
echo "<pre>";
print_r(User::where(['school_id', "=", "995"]));
echo "</pre>";
