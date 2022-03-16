<?php

namespace Models;

use Models\Article;

class FormManager extends Bdd
{

    // private $bdd = Bdd::getBdd();

    public static function form(Article $article)
    {

        $titre = $article->getTitre();
        $description = $article->getDescription();
        $contenu = $article->getContenu();
        $bdd = Bdd::getBdd();
        $insert = $bdd->prepare("INSERT INTO articles(titre, description, contenu) VALUES (?, ?, ?)");
        $insert->execute(array(

            $titre,
            $description,
            $contenu
        ));
    }

    public static function delete($id)
    {
        $bdd = Bdd::getBdd();
        $delete = $bdd->prepare("DELETE FROM articles WHERE id = $id");
        $delete->execute();
        header('Location: /');
    }
}
