<?php
require_once('database.php');

class userModels
{
    protected $_PDO;

    function __construct($pdo)
    {
        $this->_PDO = $pdo;
    }

    public function getAllUser($pdo)
    {
        try {
            $sql = "SELECT * FROM users JOIN role ON role.id = users.role;";
            $stmt = $pdo->query($sql);
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } catch (PDOException $e) {
            echo "erreur dans l'affichage : " . $e->getMessage();
        }
    }
}
