<?php
require_once dirname(__FILE__) . './../models/connexionModels.php';
require_once dirname(__FILE__) . './../models/utils.php';

$coUser = new connexionModel($pdo);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $message = '';

    if (isset($_POST["mail"]) && !empty($_POST["mail"]) && isset($_POST["password"]) && !empty($_POST["password"])) {
        $mail = valid_donnees($_POST["mail"]);
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mail = $mail;

            


        } else {
            $message .= "<div style=color:red>Le champ mail n'est pas conforme.</div>";
        }
    } else {
        $message = "<div style=color:red>Il y a une erreur.</div>";
    }

}

