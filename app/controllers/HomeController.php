<?php

namespace Controllers;

use Models\Bdd;
use Models\HomeModel;

class HomeController extends Bdd
{
    public static function index()
    {        
        HomeModel::index();
    }
}
