<?php
$dsn = 'mysql:host=localhost;dbname=alumni;charset=utf8';
$login = 'root';
$password = '';
try {
    $pdo = new PDO ($dsn,$login,$password);
   // echo 'conection sacsesfull';
   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
} catch ( PDOException $e) {
    echo 'erreur de connexion :'.$e->getMessage();

}


