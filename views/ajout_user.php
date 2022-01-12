<?php
require_once('header.php');
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Je saisie mes informations</div>
        <div class="card-body">
            <form method="POST" action="../controllers/add_usersController.php">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
        <div class="card-footer">
            boutton
        </div>
    </div>

</div>

<?php
require_once('footer.php');
?>