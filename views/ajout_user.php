<?php
require_once('header.php');
?>
<div class="container-fluid">
    <?php 
    if (isset($message) && !empty($message)) {
        echo "<div>.$message.</div>";
    } ?>
    <div class="card">
        <div class="card-header">Je saisie mes informations</div>
        <div class="card-body">
            <form class="row g-3 needs-validation" method="POST" action="../controllers/add_usersController.php" novalidate>
                <div class="col-md-4">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" id="firstname" value="Mark" name="firstname" required>
                </div>
                <div class="col-md-4">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" class="form-control" id="lastname" value="Otto" name="lastname" required>
                </div>
                <div class="col-md-4">
                    <label for="mail" class="form-label">Mail</label>
                    <input type="text" class="form-control" id="mail" value="mark@otto.fr" name="mail" required>
                </div>
                <div class="col-md-6">
                    <label for="pseudo" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" value="markito" name="pseudo">
                </div>
                <div class="col-md-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required value="azertY23456" name="password">
                </div>
                <div class="col-md-3">
                    <label for="validPassword" class="form-label">ValidPassword</label>
                    <input type="password" class="form-control" id="validPassword" required value="azertY23456" name="validPassword">
                </div>
                <div class="col-md-3">
                    <label for="campus" class="form-label">Campus</label>
                    <input type="text" class="form-control" id="campus" required value="Amiens" name="campus">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="promo" class="form-label">Promo</label>
                    <input type="text" class="form-control" id="promo" required value="ms-php développer" name="promo">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="date_debut" class="form-label">Date de debut</label>
                    <input type="date" class="form-control" id="date_debut" required value="2021-10-01" name="date_debut">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="date_fin" class="form-label">Date de fin</label>
                    <input type="date" class="form-control" id="date_fin" required value="2022-01-01" name="date_fin">
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="github_link" class="form-label">Github link</label>
                    <input type="text" class="form-control" id="github_link" value="markotto-github-link" name="github_link">
                </div>
                <div class="col-md-6">
                    <label for="profile_picture" class="form-control">Profile picture</label>
                    <input class="form-control" type="file" id="profile_picture" value="34.jpg" name="profile_picture">
                </div>
                <div class="col-md-12">
                    <label for="anecdote" class="form-label">Anecdote</label>
                    <textarea type="text" class="form-control" id="anecdote" name="anecdote">Petite phrase d'accroche</textarea>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>