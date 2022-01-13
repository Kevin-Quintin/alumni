<?php
require_once(dirname(__FILE__) . './../models/database.php');
require_once(dirname(__FILE__).'./../models/userModels.php');

$users = new userModels($pdo);
$listUsersWaitingInscription = $users->getAllUserWaitingInscription($pdo);
$listUsersWaitingUptade = $users->getAllUserWaitingUpdate($pdo);

include_once dirname(__FILE__) .'./../views/dashboard.php';
