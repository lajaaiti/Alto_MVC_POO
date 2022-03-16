<?php

namespace Models;
use Models\Bdd;

class ArticleIdManager extends Bdd{

    public static function articleId($idArticle)
    {

        $id = $idArticle;
        $bdd = Bdd::getBdd();
        $select = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
        $select->execute(array(
            $id
        ));
        $lignes = $select->fetch();
        return $lignes;
    }
}