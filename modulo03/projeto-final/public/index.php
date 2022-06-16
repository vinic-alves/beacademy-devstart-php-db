<?php

include '../vendor/autoload.php';

use App\Controller\ErrorController;

// use App\Connection\Connection;

// $connection = Connection::getConnection();

// $query = 'SELECT * FROM tb_category;';

// $preparacao = $connection->prepare($query);
// $preparacao->execute();

// while ($registro = $preparacao->fetch()){
//     var_dump($registro);
// }


$url = explode('?' , $_SERVER['REQUEST_URI'])[0];

$routes = include '../config/routes.php';


if (false ===isset($routes[$url])){
    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName = $routes[$url] ['controller'];
$methodName = $routes[$url] ['method'];

(new $controllerName())-> $methodName();