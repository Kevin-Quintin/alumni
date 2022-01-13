<?php
require_once('database.php');

class moderateurModels
{
    protected $_PDO;
    function __construct($pdo)
    {
       $this->_PDO = $pdo; 
    }

    public function updateUser ($pdo, $id) {
        try {
            $sql = "UPDATE 'users' SET ('is_update') VALUES (1) where id = :$id";
            $users = $pdo->prepare($sql);
            $users -> execute();
        }catch (PDOException $e){
            echo "erreur :" .$e->getMessage();
        }
    }
}