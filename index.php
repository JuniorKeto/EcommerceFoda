<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/**
 * Usuarios
 */

$router->group(null);
$router->get("/", function () {
    echo "baj";
});


