<?php


require '../Core/Router.php';

$router = new Router();


// add the routes
$router->add('/', ['controller' => 'Home', 'action' => 'index']);
$router->add('/posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('/posts/create', ['controller' => 'Posts', 'action' => 'create']);


// match the requested route
$url = parse_url($_SERVER['REQUEST_URI'])['path'];
if ($router->match_route($url)) {
    echo '<pre/>';
    var_dump($router->getRoutes());
    echo '<pre/>';
} else {
    echo "no route found for url {$url}";
}