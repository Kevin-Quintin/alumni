<?php 
include_once dirname (__FILE__).'./../models/database.php';
require_once dirname(__FILE__).'./../models/utils.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = valid_donnees ($_POST["lastname"]);
    $firstname = valid_donnees ($_POST["firstname"]);
    $pseudo = valid_donnees ($_POST["pseudo"]);
    $mail = valid_donnees ($_POST["mail"]);
    $pseudo = valid_donnees ($_POST["pseudo"]);
    $password = valid_donnees ($_POST["password"]);
    $campus = valid_donnees ($_POST["campus"]);
    $promo = valid_donnees ($_POST["promo"]);
    $period = valid_donnees ($_POST["period"]);
    $github_link = valid_donnees ($_POST["github_link"]);
    $profile_picture = valid_donnees  ($_POST["profile_picture"]);
    $anecdote = valid_donnees  ($_POST["anecdote"]);
    $role = valid_donnees ($_POST["role"]);
    $is_actif = valid_donnees  ($_POST["is_actif"]);
}
/*Si les champs  ne sont pas vides et si les donnees ont
     *bien la forme attendue...*/
if (!empty($lastname )
&& strlen($lastname) <=20
&& preg_match("^[A-Za-z '-]+$",$lastname)

&& !empty($firstname)
&& strlen($firstname) <=20
&& preg_match("^[A-Za-z '-]+$",$firstname)

&& !empty($mail)
&& filter_var($mail, FILTER_VALIDATE_EMAIL)

&& !empty($password)
&& strlen($password) <=20
&& preg_match("^[A-Za-z '-]+$",$password)

&& !empty($campus)
&& strlen($campus) <=20
&& preg_match("^[A-Za-z '-]+$",$campus)

&& !empty($promo)
&& strlen($promo) <=20
&& preg_match("^[A-Za-z '-]+$",$promo)

&& !empty($period)
&& strlen($period) <=20
&& preg_match("^[A-Za-z '-]+$",$period)
)
 {
  echo " Ok !" ; 
}else{
    echo "Il y a une erreur.";
}
