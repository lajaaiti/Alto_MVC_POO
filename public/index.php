<?php


use Controllers\FormController;
use Controllers\HomeController;
use Controllers\ArticleController;

require '../vendor/autoload.php';


$router = new AltoRouter();

$router->map(
    'GET|POST',
    '/home',
    function () {
        HomeController::index();
    },
    'home'
);

$router->map(
    'GET|POST',
    '/article/[i:idArticle]',
    function ($idArticle) {
        ArticleController::articleId($idArticle);
    },
    'article'
);

$router->map(
    'GET|POST',
    '/form',
    function () {        
        //dans ma logique je fais toujours appele à une closure puisque ma condition
        //check la présence d'une closure 'is_callable($match['target'])'.
        //
    },
    'form'
);

$match = $router->match();


if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
    ob_start();
    $params = $match['params'];
    require "../app/views/{$match['name']}.php";
    $pageContent = ob_get_clean();
    require '../app/views/layout.php';
} else {
    echo 'Erreur 404';
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
