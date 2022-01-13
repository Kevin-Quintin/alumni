<?php
require_once('database.php');

class userModels
{
    protected $_PDO;

    function __construct($pdo)
    {
        $this->_PDO = $pdo;
    }

    public function getAllActiveUsers($pdo)
    {
        try {
            $sql = "SELECT * FROM users WHERE is_actif = 1";
            $stmt = $pdo->query($sql);
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } catch (PDOException $e) {
            echo "erreur dans l'affichage : " . $e->getMessage();
        }
    }

    public function getProfil($pdo){
        try {
            $id = (int) $_GET['id'];

            $sql= "SELECT * FROM users WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $profil = $stmt->fetch(PDO::FETCH_OBJ);
            return $profil;
        } catch (PDOException $e) {
            echo "erreur dans l'affichage : " . $e->getMessage();
        }
    }

    public function addUser($pdo, $lastname, $firstname, $pseudo, $mail, $password, $campus, $promo, $date_debut, $date_fin, $github_link, $profile_picture, $anecdote, )
    {
        $sql = "INSERT INTO 'users' ('lastname','firstname','pseudo','mail','password','campus','promo','period','github_link','profile_picture','anecdote') 
    VALUES (:lastname, :firstname, :pseudo, :mail, :password, :campus, :promo, :github_link, :profile_picture, :anecdote, :date_debut, :date_fin";
        $users = $pdo->prepare($sql);
        $users->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $users->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $users->bindValue(':mail', $mail, PDO::PARAM_STR);
        $users->bindValue(':password', $password, PDO::PARAM_STR);
        $users->bindValue(':campus', $campus, PDO::PARAM_STR);
        $users->bindValue(':promo', $promo, PDO::PARAM_STR);
        $users->bindValue(':date_debut', $date_debut, PDO::PARAM_STR);
        $users->bindValue(':date_fin', $date_fin, PDO::PARAM_STR);
        $users->bindValue(':github_link', $github_link, PDO::PARAM_STR);
        $users->bindValue(':profile_picture', $profile_picture, PDO::PARAM_STR);
        $users->bindValue(':anecdote', $anecdote, PDO::PARAM_STR);
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

    public function updateUser($pdo, $lastname, $firstname, $pseudo, $mail, $password, $campus, $promo, $github_link, $profile_picture, $anecdote, $date_debut, $date_fin, $id)
    {
        $sql = "UPDATE 'users' SET ('lastname','firstname','pseudo','mail','password','campus','promo','period','github_link','profile_picture','anecdote','role','is_actif') 
        VALUES (:lastname, :firstname, :pseudo, :mail, :password, :campus, :promo, :github_link, :profile_picture, :anecdote WHERE id = :id";
        $users = $pdo->prepare($sql);
        $users->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $users->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $users->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $users->bindValue(':mail', $mail, PDO::PARAM_STR);
        $users->bindValue(':password', $password, PDO::PARAM_STR);
        $users->bindValue(':campus', $campus, PDO::PARAM_STR);
        $users->bindValue(':promo', $promo, PDO::PARAM_STR);
        $users->bindValue(':github_link', $github_link, PDO::PARAM_STR);
        $users->bindValue(':profile_picture', $profile_picture, PDO::PARAM_STR);
        $users->bindValue(':anecdote', $anecdote, PDO::PARAM_STR);
        $users->bindValue(':date_debut', $date_debut, PDO::PARAM_STR);
        $users->bindValue(':date_fin', $date_fin, PDO::PARAM_STR);
        $users->bindValue(':id', $id, PDO::PARAM_STR);
        $users->execute();
    }
}
