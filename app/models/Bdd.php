<?php

namespace Models;

abstract class Bdd
{
    private static $bdd;
    //instancie la connexion a la bdd
    private static function setBdd()
    {
        self::$bdd = new \PDO('mysql:host=localhost;dbname=mvctestprojetlaurent;charset=utf8', 'root', '%SwRoot!!%');
        self::$bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
    }
    //recupère la connexion à la bdd
    protected static function getBdd()
    {
        if (self::$bdd == null)
            self::setBdd();
        return self::$bdd;
    }
}
