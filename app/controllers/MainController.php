<?php

namespace Controllers;


require '../vendor/autoload.php';

class MainController
{
    public static function indexHome()
    {
        require '../app/views/template.php';
        require '../app/views/home.php';
    }

    public static function indexTest()
    {
        require '../app/views/template.php';
        require '../app/views/test.php';
    }

    public static function indexForm()
    {
        require '../app/views/template.php';
        require '../app/views/form.php';
    }

    public static function articleId($idArticle)
    {
        require '../app/views/template.php';
        require '../app/views/article.php';
    }
}
