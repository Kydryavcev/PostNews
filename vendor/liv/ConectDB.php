<?php
namespace vendor\liv;

use mysqli;
use PDO;
use PDOException;

class ConectDB
{
    public $pdo;
    
    public function __construct($db, $login, $password)
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=$db", $login, $password);
        } catch (PDOException $e) {
            echo 'Невозможно установить соединение с базой данных. Ошибка: '.$e->getMessage();
        }
    }
}
