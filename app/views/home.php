<?php

use Models\HomeManager;


$data = HomeManager::home();
?>

<div class="container pt-5">

    <h1 class="pt-5">Bienvenue sur la page home de mon bazar</h1>

    <div class="row text-center mt-5">
        <div class="col-12  d-flex flex-wrap justify-content-center">
            <?php foreach ($data as $ficheArticles) : ?>
                <div class="card m-1 shadow" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $ficheArticles['titre'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $ficheArticles['description'] = substr($ficheArticles['description'], 0, 30) . "(...)" ?></h6>
                        <p class="card-text"></p>
                        <a href="<?= "article" . "/" . $ficheArticles['id'] ?>"><input type="button" value="Continuer" class="btn btn-outline-secondary"></input></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>