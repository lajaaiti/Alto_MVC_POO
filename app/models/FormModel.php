<?php

namespace Models;

class FormModel extends Bdd
{

    public static function form(ArticleData $article)
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
        header('Location: /home');
    }

    public static function delete($idArticle)
    {
        dump($idArticle);
        $bdd = Bdd::getBdd();
        $delete = $bdd->prepare("DELETE FROM articles WHERE id = $idArticle");
        $delete->execute();
        header('Location: /home');
    }
}
