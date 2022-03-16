<?php

use Controllers\MainController;

require '../vendor/autoload.php';

$router = new AltoRouter();

$router->map(
    'GET',
    '/',
    function () {
        MainController::indexHome();
    },
    '/'
);

$router->map(
    'GET',
    '/test',
    function () {
        MainController::indexTest();
    },
    '/test'
);

$router->map(
    'GET|POST',
    '/form',
    function () {
        MainController::indexForm();
    },
    '/form'
);

$router->map(
    'GET|POST',
    '/article/[i:id]',
    function ($id) {
        MainController::articleId($id);        
    },
    '/article'
);


$match = $router->match();

if (
    is_array($match) && is_callable($match['target'])
) {
    call_user_func_array($match['target'], $match['params']);
} else {
    echo 'Erreur 404';
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
