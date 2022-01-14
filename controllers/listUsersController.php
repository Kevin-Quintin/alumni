<?php 
require_once(dirname(__FILE__) . './../models/database.php');
require_once(dirname(__FILE__).'./../models/userModels.php');

$users = new userModels($pdo);
$allActiveUsers = $users->getAllActiveUsers($pdo);
include_once dirname(__FILE__) .'./../views/listUsers.php';
?>