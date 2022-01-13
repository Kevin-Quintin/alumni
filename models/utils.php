<?php
 function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

// function verifDonnees($donneesATraiter, $donneesARecuperer, $message){
//     if (isset($donneesATraiter) && !empty($donneesATraiter)) {
//         $donneesARecuperer = valid_donnees($donneesATraiter);
//         if (strlen($donneesARecuperer) <= 20) {
//             if (preg_match("/^[A-Za-z '-]+$/", $donneesARecuperer)) {
//                 // Si tout est bon je sauvegarde Lastname
//                 return $donneesARecuperer = $donneesARecuperer;
//             } else {
//                 return $message .= "<div style=color:red>Le champ Lastname doit uniquement contenir des caractères alphabétique.</div>";
//             }
//         } else {
//             return $message .= "<div style=color:red>Le champ Lastname doit être inférieur à 20 caractères.</div>";
//         }
//     } else {
//         return $message .= "<div style=color:red>Il manque le champ Lastname.</div>";
//     }
// }