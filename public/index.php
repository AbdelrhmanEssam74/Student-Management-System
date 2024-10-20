<?php

use App\Models\User;
use Dotenv\Dotenv;
use PROJECT\Database\Managers\MYSQLManager;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();
$m = new MYSQLManager();
//var_dump($m->update("6714f8e5f385d", ["firstname" => "abdelrhman"]));
var_dump(
    User::update("6714f8e5f385d", ["firstname" => "abdelrhman"])
);



//echo "<pre>";
//print_r(app()->db->row("select * from users"));
//echo "</pre>";
