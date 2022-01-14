<?php
session_start();
?>

<div class="container mt-3">
    <div class="row">

        <h3 class="my-3" style="font-family: 'Roboto Slab', serif; font-weight: 900;">Profil</h3>
            <div class="col-lg-6 col-sm-12 d-flex justify-content-md-center justify-content-lg-end">
            <?php if(!empty($profilUser->profile_picture)) {?>
                <img src="/public/img/<?= $profilUser->profile_picture ?>" class="card-img-top rounded-circle border w-50" alt="..." >
            <?php } else { ?>
              <img src="/public/img/photo-profil.png" class="card-img-top rounded-circle border w-50" alt="..." >
            <?php } ?>
            </div>
        <div class="col-lg-6 col-sm-12">
            <ul class="list-group list-group-flush mt-2">
                <li class="list-group-item border border-white">
                    <span class="fw-bold">Nom Prénom :</span> <?= $profilUser->lastname ?>
                </li>
                <li class="list-group-item border border-white">
                    <span class="fw-bold">Prénom :</span> <?= $profilUser->firstname ?>
                </li>
                <?php if(!empty($profilUser->pseudo)) {?>
                    <li class="list-group-item border border-white">
                        <span class="fw-bold">Pseudo :</span> <?= $profilUser->pseudo ?>
                    </li>
                <?php } ?>
                <li class="list-group-item border border-white">
                    <span class="fw-bold">Campus :</span> <?= $profilUser->campus ?>
                </li>
                <li class="list-group-item border border-white">
                    <span class="fw-bold">Période : </span><?= $profilUser->date_debut . ' à ' . $profilUser->date_fin ?>
                </li>
                <li class="list-group-item border border-white">
                    <span class="fw-bold">Promotion : </span><?= $profilUser->promo ?>
                </li>
                <?php if(!empty($profilUser->github_link)) {?>
                    <li class="list-group-item border border-white">
                        <span class="fw-bold">Lien GitHub : </span> <?= $profilUser->github_link ?>
                    </li>
                <?php } ?>
                <?php if(!empty($profilUser->anecdote)) { ?>
                <li class="list-group-item border border-white">
                    <span class="fw-bold">Anecdote : </span> <?= $profilUser->anecdote ?> 
                </li>
                <?php } ?>
            </ul>
        </div>


        <?php if(isset($_COOKIE['role'])): ?>
            <?php if($_COOKIE['role'] == 2): ?>
                <span class="d-flex justify-content-center">
                    <span class="w-25">
                        <a href="../controllers/valideModerateurController.php?id=<?= $profilUser->id ?>" class="btn btn-success w-50 mt-5 rounded-pill">Valider</a>
                    </span>
                </span> 
            <?php elseif($_COOKIE['role'] == 1 ): ?>
                    <?php elseif($_COOKIE['id'] == $profilUser->id): ?>
                    <span class="d-flex justify-content-center">
                        <span class="w-25">
                            <a href="modif/eleve" class="btn btn-danger w-50 mt-5 rounded-pill">Modifier</a>
                        </span>
                    </span>  
            <?php endif ?>
        <?php endif ?>

    </div>
</div>

