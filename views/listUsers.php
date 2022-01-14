

<div class="container mt-3">
    <div class="row">
        <h3 class="my-3" style="font-family: 'Roboto Slab', serif; font-weight: 900;">Profil des étudiants</h3>
            
        <?php foreach($allActiveUsers as $user) { ?>
            <div class="card border border-4 border-light m-3 p-0" style="width: 18rem;">
                <?php if(!empty($user->profil_picture)) { ?>
                    <img src="public/img/34.jpg" class="card-img-top" alt="...">
                <?php } else { ?>
                    <img src="public/img/photo-profil.png" class="card-img-top" alt="...">
                <?php } ?>
                <div class="card-body">
                    <h5 class="card-title m-0" style="font-family: 'Roboto Slab', serif;" ><?= $user['firstname'] . ' ' . $user['lastname']?> </h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item border border-light">
                        <small><span class="fw-bold">Campus :</span> <?= $user['campus'] ?></small>
                    </li>
                    <li class="list-group-item border border-light">
                        <small><span class="fw-bold">Période : </span><?= $user['date_debut'] . ' à ' . $user['date_fin'] ?></small>
                    </li>
                    <li class="list-group-item border border-light">
                        <small><span class="fw-bold">Promotion : </span><?= $user['promo'] ?></small>
                    </li>
                </ul>
                <div class="card-body">
                    <a href="/controllers/profilUserController.php?id=<?= $user['id'] ?>" class="card-link btn btn-sm btn-outline-dark rounded-pill fw-bold"><span class="mx-4">Profil</span> <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
