<?php

use Models\ArticleIdManager;
use Models\FormManager;

// echo $idArticle;

$data = ArticleIdManager::articleId($idArticle);

if (isset($_POST['supprimer'])) {
    FormManager::delete($idArticle);
}


?>

<div class="p-5 mb-4 bg-light rounded-3 vh-100">
    <div class="container-fluid py-5 shadow">
        <h1 class="display-5 fw-bold"><?= $data['titre'] ?></h1>
        <p class="display-6"><?= $data['description'] ?></p>
        <p class="col-md-8 fs-6">
        <pre><?= $data['contenu'] ?></pre>
        </p>
        <form method="post">
            <a href="/"><input type="button" value="Retour" class="btn btn-outline-secondary"></input></a>
            <input class="btn btn-outline-danger" name="supprimer" type="submit" value="Supprimer">
        </form>
    </div>
</div>