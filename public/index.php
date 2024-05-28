<?php
require '../helpers.php';
// Database
require basePath('Database.php');
// Router
require basePath('Router.php');
$router = new Router();
$routes = require basePath('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$router->route($method, $uri);
