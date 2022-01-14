<?php 
require_once(dirname(__FILE__) . './../models/database.php');
require_once(dirname(__FILE__).'./../models/userModels.php');
include ('../views/header.php');

$users =  new userModels($pdo);
$profilUser = $users->getProfil($pdo);

include_once dirname(__FILE__) .'./../views/profilUser.php';

include ('../views/footer.php');

