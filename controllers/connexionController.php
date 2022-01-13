<?php

require_once dirname(__FILE__) . './../models/connexionModels.php';
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
        $connexion = $connexionUser->connexionUser($pdo, $mail, $password);
        setcookie("id", $connexion->id, "", time() - 3600);
        setcookie('isActif', $connexion->is_actif, "", time() - 3600);

       header("Location: /views/profilUser.php?id=".$connexion->id);

       
    }

}

include('../views/connexion.php');
