<?php

namespace Models;

class HomeManager extends Bdd
{

    public static function home()
    {

        $bdd = Bdd::getBdd();
        $select = $bdd->prepare("SELECT * FROM articles");
        $select->execute();
        $lignes = $select->fetchAll();
        return $lignes;
    }
}
