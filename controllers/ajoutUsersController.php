<?php
include_once dirname(__FILE__) . './../models/database.php';
require_once dirname(__FILE__) . './../models/utils.php';
require_once dirname(__FILE__) . './../models/userModels.php';


$message = '';
$validate = '';
$user = new userModels($pdo);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ Lastname ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
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

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ firstname ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
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

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ mail ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
    if (isset($_POST["mail"]) && !empty($_POST["mail"])) {
        $mail = valid_donnees($_POST["mail"]);
        if ($user->getMail($pdo, $mail) != 0) {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $mail = $mail;
            } else {
                $message .= "<div style=color:red>Le champ mail n'est pas conforme.</div>";
            }
        } else {
            $message .= "<div style=color:red>Le mail existe déjà.</div>";
        }    
    }

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ pseudo ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
    if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])) {
        $pseudo = valid_donnees($_POST["pseudo"]);
    } else {
        $pseudo = null;
    }

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ mot de passe ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
    if (isset($_POST["password"]) && !empty($_POST["password"])) {
        if (isset($_POST["validPassword"]) && !empty($_POST["validPassword"])) {
            if ($_POST["password"] === $_POST["validPassword"]) {
                $password = valid_donnees($_POST["password"]);
            } else {
                $message .= "<div style=color:red>Les deux mots de passe ne sont pas identique.</div>";
            }
        } else {
            $message .= "<div style=color:red>Il manque le champ validPassword.</div>";
        }
    } else {
        $message .= "<div style=color:red>Il manque le champ password.</div>";
    }

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ campus ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
    if (isset($_POST["campus"]) && !empty($_POST["campus"])) {
        $campus = valid_donnees($_POST["campus"]);
        if (strlen($campus) <= 20) {
            if (preg_match("/^[A-Za-z '-]+$/", $campus)) {
                // Si tout est bon je sauvegarde campus
                $campus = $campus;
            } else {
                $message .= "<div style=color:red>Le champ campus doit uniquement contenir des caractères alphabétique.</div>";
            }
        } else {
            $message .= "<div style=color:red>Le champ campus doit être inférieur à 20 caractères.</div>";
        }
    } else {
        $message .= "<div style=color:red>Il manque le champ campus.</div>";
    }

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ promo ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
    if (isset($_POST["promo"]) && !empty($_POST["promo"])) {
        $promo = valid_donnees($_POST["promo"]);
        if (strlen($promo) <= 20) {
            // if (preg_match("/^[A-Za-z '-]+$/", $promo)) {
            // Si tout est bon je sauvegarde promo
            $promo = $promo;
            // } else {
            // $message .= "<div style=color:red>Le champ promo doit uniquement contenir des caractères alphabétique.</div>";

        } else {
            $message .= "<div style=color:red>Le champ promo doit être inférieur à 20 caractères.</div>";
        }
    } else {
        $message .= "<div style=color:red>Il manque le champ promo.</div>";
    }

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ date_debut ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
    if (isset($_POST["date_debut"]) && !empty($_POST["date_debut"])) {
        $date_debut = valid_donnees($_POST["date_debut"]);
    } else {
        $message .= "<div style=color:red>Il manque le champ date_debut.</div>";
    }

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ date_fin ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
    if (isset($_POST["date_fin"]) && !empty($_POST["date_fin"])) {
        $date_fin = valid_donnees($_POST["date_fin"]);
    } else {
        $message .= "<div style=color:red>Il manque le champ date_fin.</div>";
    }

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ github_link ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
    if (isset($_POST["github_link"]) && !empty($_POST["github_link"])) {
        $github_link = valid_donnees($_POST["github_link"]);
    } else {
        $github_link = null;
    }

    // ************************************************************************************************************************************************** //
    // Je vérifie le champ profile_picture ******************************************************************************************************************** //
    // ************************************************************************************************************************************************** //

    if (!empty($_FILES["profile_picture"]['name']) == true) {
        $filename = $_FILES["profile_picture"]["name"];
        $tempname = $_FILES["profile_picture"]["tmp_name"];
        $size = $_FILES["profile_picture"]["size"];
        $type = $_FILES["profile_picture"]["type"];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $file_type  = finfo_file($finfo, $tempname);
        if ($file_type != "image/jpeg" || $file_type != "image/png") {
            if ($size < 8388608) {
                $str_to_arry        = explode('.', $filename);
                $extension          = end($str_to_arry); // get extension of the file.
                $upload_location     = dirname(__DIR__) . './public/img/'; // targeted location
                $new_name             = "upload-image-" . time() . "." . $extension; // new name
                $location_with_name = $upload_location . $new_name; // finel new file
                move_uploaded_file($tempname, $location_with_name);
                $profile_picture = $filename;
            } else {
                $message .= "<div style=color:red>La taille de la photo est excessif.</div>";
            }
        } else {
            $message .= "<div style=color:red>L'extension de la photo n'est pas correct.</div>";
        }
    } else {
        $profile_picture = "";
    }

    // // ************************************************************************************************************************************************** //
    // // Je vérifie le champ anecdote ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //
    if (isset($_POST["anecdote"]) && !empty($_POST["anecdote"])) {
        $anecdote = valid_donnees($_POST["anecdote"]);
    } else {
        $anecdote = null;
    }

    // // ************************************************************************************************************************************************** //
    // // J'insère tout en base de données ******************************************************************************************************************** //
    // // ************************************************************************************************************************************************** //

    
    if (empty($message)) {
        $validate .= "<div style=color:green>Le formulaire à été envoyé avec succès.</div>";
        $user->addUser($pdo, $lastname, $firstname, $pseudo, $mail, $password, $campus, $promo, $github_link, $profile_picture, $anecdote, $date_debut, $date_fin);
    }
    
}

include_once dirname(__FILE__) .'./../views/ajoutuser.php';

