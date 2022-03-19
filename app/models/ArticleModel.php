<?php

namespace Models;

use Models\Bdd;

class ArticleModel extends Bdd
{

    public static function articleId($idArticle)
    {
        $idArticle = $idArticle;
        $bdd = Bdd::getBdd();
        $select = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
        $select->execute(array(
            $idArticle
        ));
        $lignes = $select->fetch();
        return $lignes;
    }
}
