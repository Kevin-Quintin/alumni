<?php

require_once dirname(__FILE__) . './../models/loginModels.php';
require_once dirname(__FILE__) . './../models/utils.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $message = '';

    // vérification mail
    if (isset($_POST["mail"]) && !empty($_POST["mail"])) {
        $mail = valid_donnees($_POST["mail"]);
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mail = $mail;
        } else {
            $message .= "<div style=color:red>Le champ mail n'est pas conforme.</div>";
        }
    } else {
        $message .= "<div style=color:red>Il y a une erreur.</div>";
    }

    // vérification password
    if (isset($_POST["password"]) && !empty($_POST["password"])) {
        $password = valid_donnees($_POST["password"]);
    } else {
        $message = "<div style=color:red>Il y a une erreur.</div>";
    }

    if(empty($message)){
        $connexionUser = new connexionModel($pdo);
        $login = $connexionUser->connexionUser($pdo, $mail, $password);

        if($login->mail == $_POST['mail'] && $login->password == $_POST['password']) 
        {
            setcookie('role', $login->role, time()+3600, "/");
            setcookie('id', $login->id, time()+3600, "/");

            $_SESSION['id'] = $login->id;
            $_SESSION['firstname'] = $login->firstname;
            $_SESSION['lastname'] = $login->lastname;
            $_SESSION['role'] = $login->role;
    
        header("Location: /views/profilUser.php?id=".$login->id);


        } else {
            $message = "<div style=color:red>Vous devez vous inscrire. <a href='/controllers/ajoutUsersController.php'>Cliquez ici</a></div>";
        }
    }

}

include('../views/login.php');
