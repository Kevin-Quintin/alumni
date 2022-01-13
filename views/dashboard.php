<?
require_once('header.php');
?>

<div class="container-fluid">
  <table class="table table-dark table-responsive align-middle table-striped caption-top">
    <caption>List of waiting inscription</caption>
    <thead>
      <tr>
        <th scope="col">Lastname</th>
        <th scope="col">Firstname</th>
        <th scope="col">Role</th>
        <th scope="col">Profile</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($listUsersWaitingInscription as $user) { ?>
        <tr>
          <td><?= $user['lastname'] ?></td>
          <td><?= $user['firstname'] ?></td>
          <td><?php echo $user['role'] == 1 ? "Eleve" : "Modérateur"; ?></td>
          <td><a href="#" class="btn btn-outline-secondary">View profile</a></td>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
  <hr class="d-flex m-5">
  <table class="table table-dark table-responsive align-middle table-striped caption-top">
    <caption>List of waiting update</caption>
    <thead>
      <tr>
        <th scope="col">Lastname</th>
        <th scope="col">Firstname</th>
        <th scope="col">Role</th>
        <th scope="col">Profile</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($listUsersWaitingUptade as $user) { ?>
        <tr>
          <td><?= $user['lastname'] ?></td>
          <td><?= $user['firstname'] ?></td>
          <td><?php echo $user['role'] == 1 ? "Eleve" : "Modérateur"; ?></td>
          <td><a href="#" class="btn btn-outline-secondary">View profile</a></td>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
</div>

<?php
require_once('footer.php');
?>