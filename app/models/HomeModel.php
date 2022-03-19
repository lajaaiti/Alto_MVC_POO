<?php

namespace Models;

use Models\Bdd;

class HomeModel extends Bdd{

    public static function index()
    {
        $bdd = Bdd::getBdd();
        $select = $bdd->prepare("SELECT * FROM articles");
        $select->execute();
        $lignes = $select->fetchAll();
        return $lignes;
    }
}