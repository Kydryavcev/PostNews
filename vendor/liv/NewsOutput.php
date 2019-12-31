<?php
namespace vendor\liv;
use vendor\liv\ConectDB;
use PDOException;
use PDO;

class NewsOutput
{
    public function __construct()
    {
        $bd = new ConectDB('postnews', 'root', ''); # database connection
        
        $query = "SELECT * FROM `news`";
        $news  = $bd->pdo->query($query);

        try {
            while($postNews = $news->fetch()){
                echo $postNews['name'].'<br>';
                echo $postNews['description'].'<br>';
            }
        } catch (PDOException $e) {
            echo 'Ошибка вывода новостей: '.$e->getMessage();
        }
        
         
    }
}
