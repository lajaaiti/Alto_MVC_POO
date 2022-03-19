<?php

use Models\ArticleData;
use Models\FormModel;


if (isset($_POST['submit'])) {

    $article = new ArticleData();    
    $article->setTitre(htmlspecialchars($_POST['titre']));
    $article->setDescription(htmlspecialchars($_POST['description']));
    $article->setContenu(htmlspecialchars($_POST['contenu']));
    FormModel::form($article);
}

?>

<div class="container mt-5 pt-5">
    <form method="POST">
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
            <label for="contenu" class="form-label">Contenu</label>
            <textarea type="texte" class="form-control" name="contenu"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
    </form>
</div>