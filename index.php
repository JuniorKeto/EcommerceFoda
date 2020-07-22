<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/**
 * Namespace do Controller
 */

$router->namespace("Source\App");

/**
 * Usuarios
 */

$router->group(null);
$router->get("/", "Web:main");

$router->dispatch();


