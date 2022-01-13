<?php
require_once('header.php');
?>

<div class="container">
<?php 
    if (isset($message) && !empty($message)) {
        echo "<div>.$message.</div>";
    } ?>
    <div class="card mt-3 mx-auto col-6">
        <div class="card-header">Connexion</div>
        <form class="g-3 needs-validation" method="POST" action="../controllers/connexionController.php" novalidate>
            <div class="card-body row">
                <div class="col-md-6">
                    <label for="mail" class="form-label">Mail</label>
                    <input type="text" class="form-control" id="mail" value="" name="mail" required>
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" value="" required name="password">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Connexion</button>
            </div>
        </form>
    </div>
</div>


<?php
require_once('footer.php');
?>