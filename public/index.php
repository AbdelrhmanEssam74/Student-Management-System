<?php

use PROJECT\HTTP\Request;
use PROJECT\HTTP\Response;
use PROJECT\HTTP\Route;
use Dotenv\Dotenv;

require_once '../src/support/helpers.php';
require_once base_path() . 'vendor/autoload.php';
require_once base_path() . 'routes/web.php';
$env = Dotenv::createImmutable(base_path());
$env->load();
$route = new Route(new Request(), new Response());
$route->resolve();;

