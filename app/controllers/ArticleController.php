<?php

namespace Controllers;

use Models\ArticleModel;
use Models\Bdd;

class ArticleController extends Bdd
{
    public static function articleId($idArticle)
    {
        ArticleModel::articleId($idArticle);
    }
}
