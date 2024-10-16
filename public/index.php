<?php

use Dotenv\Dotenv;
use PROJECT\support\str;
use PROJECT\Database\Grammars\MYSQLGrammar;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
app()->run();

echo "<pre>";
print_r(MYSQLGrammar::buildInsertQuery([
    'username', 'password', 'email', 'time'
]));
echo "</pre>";

echo "<pre>";
print_r(MYSQLGrammar::buildSelectQuery(
    ['username', 'password', 'email', 'time'],
    ['`username`', "=", "admin"]
));
echo "</pre>";