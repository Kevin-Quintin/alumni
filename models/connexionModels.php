<?php
require_once('database.php');

class connexionModel
{
    protected $_PDO;

    function __construct($pdo)
    {
        $this->_PDO = $pdo;
    }

    public function coUser($pdo, $mail, $password) {
        $sql = "SELECT * FROM users WHERE mail = :mail AND password = :password ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $profil = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $profil;
    }

}