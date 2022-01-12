<?php
require_once('database.php');

class userModels
{
    protected $_PDO;

    function __construct($pdo)
    {
        $this->_PDO = $pdo;
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

    public function getAllUserWaitingInscription($pdo)
    {
        try {
            $sql = "SELECT * FROM users WHERE is_actif = 0;";
            $stmt = $pdo->query($sql);
            $userWaitingInscription = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $userWaitingInscription;
        } catch (PDOException $e) {
            echo "erreur dans l'affichage : " . $e->getMessage();
        }
    }

    public function getAllUserWaitingUpdate($pdo)
    {
        try {
            $sql = "SELECT * FROM users WHERE is_update = 0;";
            $stmt = $pdo->query($sql);
            $userWaitingUpdate = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $userWaitingUpdate;
        } catch (PDOException $e) {
            echo "erreur dans l'affichage : " . $e->getMessage();
        }
    }
}
