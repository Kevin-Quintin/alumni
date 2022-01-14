<?php
include_once dirname(__FILE__) . './../models/database.php';
require_once dirname(__FILE__) . './../models/moderateurModels.php';

$id = $_GET['id'];

$user = new moderateurModels($pdo);
$validUser = $user->valideUser($pdo, $id);

header("Refresh: 0.5;URL=./../controllers/dashboardController.php");
