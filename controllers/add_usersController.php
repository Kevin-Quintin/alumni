<?php
include_once dirname(__FILE__) . './../models/database.php';
require_once dirname(__FILE__) . './../models/utils.php';

// header("Refresh: 0.5;URL=../views/ajout_user.php");
$message = '';
$lastname = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Je vérifie le champ Lastname
    if (isset($_POST["lastname"]) && !empty($_POST["lastname"])) {
        $lastname = valid_donnees($_POST["lastname"]);
        if (strlen($lastname) <= 20) {
            if (preg_match("/^[A-Za-z '-]+$/", $lastname)) {
                // Si tout est bon je sauvegarde Lastname
                $lastname = $lastname;
            } else {
                $message .= "<div style=color:red>Le champ Lastname doit uniquement contenir des caractères alphabétique.</div>";
            }
        } else {
            $message .= "<div style=color:red>Le champ Lastname doit être inférieur à 20 caractères.</div>";
        }
    } else {
        $message .= "<div style=color:red>Il manque le champ Lastname.</div>";
    }

    // Je vérifie le champ firstname
    if (isset($_POST["firstname"]) && !empty($_POST["firstname"])) {
        $firstname = valid_donnees($_POST["firstname"]);
        if (strlen($firstname) <= 20) {
            if (preg_match("/^[A-Za-z '-]+$/", $firstname)) {
                // Si tout est bon je sauvegarde firstname
                $firstname = $firstname;
            } else {
                $message .= "<div style=color:red>Le champ firstname doit uniquement contenir des caractères alphabétique.</div>";
            }
        } else {
            $message .= "<div style=color:red>Le champ firstname doit être inférieur à 20 caractères.</div>";
        }
    } else {
        $message .= "<div style=color:red>Il manque le champ firstname.</div>";
    }

    // Je vérifie le champ mail
    if (isset($_POST["mail"]) && !empty($_POST["mail"])) {
        $mail = valid_donnees($_POST["mail"]);
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mail = $mail;
        } else {
            $message .= "<div style=color:red>Le champ mail n'est pas conforme.</div>";
        }
    }
}



include_once('../views/ajout_user.php');
// header("Refresh: 0.5;URL=../views/ajout_user.php");
    /* $firstname = valid_donnees($_POST["firstname"]);
    $pseudo = valid_donnees($_POST["pseudo"]);
    $mail = valid_donnees($_POST["mail"]);
    $pseudo = valid_donnees($_POST["pseudo"]);
    $password = valid_donnees($_POST["password"]);
    $campus = valid_donnees($_POST["campus"]);
    $promo = valid_donnees($_POST["promo"]);
    $period = valid_donnees($_POST["period"]);
    $github_link = valid_donnees($_POST["github_link"]);
    $profile_picture = valid_donnees($_POST["profile_picture"]);
    $anecdote = valid_donnees($_POST["anecdote"]); */
// }

// include_once dirname(__FILE__).'./../views/ajout_user.php';
/*Si les champs  ne sont pas vides et si les donnees ont
     *bien la forme attendue...*/
/* if (
    !empty($lastname)
    && strlen($lastname) <= 20
    && preg_match("^[A-Za-z '-]+$", $lastname)

    && !empty($firstname)
    && strlen($firstname) <= 20
    && preg_match("^[A-Za-z '-]+$", $firstname)

    && !empty($mail)
    && filter_var($mail, FILTER_VALIDATE_EMAIL)

    && !empty($password)
    && strlen($password) <= 20
    && preg_match("^[A-Za-z '-]+$", $password)

    && !empty($campus)
    && strlen($campus) <= 20
    && preg_match("^[A-Za-z '-]+$", $campus)

    && !empty($promo)
    && strlen($promo) <= 20
    && preg_match("^[A-Za-z '-]+$", $promo)

    && !empty($period)
    && strlen($period) <= 20
    && preg_match("^[A-Za-z '-]+$", $period)
) {
    echo " Ok !";
} else {
    echo "Il y a une erreur.";
} */
