<?php
require_once(dirname(__FILE__).'./../models/database.php');

class userModels
{

    protected $_pdo;

    function __construct($pdo)
    {
        $this->_pdo = $pdo;
    }
    public function addUser($pdo, $lastname, $firstname, $pseudo, $mail, $password, $campus, $promo, $period, $github_link, $profile_picture, $anecdote, $role, $is_actif)
    {
        $sql = "INSERT INTO 'users' ('lastname','firstname','pseudo','mail','password','campus','promo','period','github_link','profile_picture','anecdote','role','is_actif') 
    VALUES (:lastname, :firstname, :pseudo, :mail, :password, :campus, :promo, :period, :github_link, :profile_picture, :anecdote, :role, :is_actif";
        $users = $pdo->prepare($sql);
        $users->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $users->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $users->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $users->bindValue(':mail', $mail, PDO::PARAM_STR);
        $users->bindValue(':password', $password, PDO::PARAM_STR);
        $users->bindValue(':campus', $campus, PDO::PARAM_STR);
        $users->bindValue(':promo', $promo, PDO::PARAM_STR);
        $users->bindValue(':period', $period, PDO::PARAM_STR);
        $users->bindValue(':github_link', $github_link, PDO::PARAM_STR);
        $users->bindValue(':profile_picture', $profile_picture, PDO::PARAM_STR);
        $users->bindValue(':anecdote', $anecdote, PDO::PARAM_STR);
        $users->bindValue(':role', $role, PDO::PARAM_STR);
        $users->bindValue(':is_actif', $is_actif, PDO::PARAM_STR);
        $users->execute();
    }
}
