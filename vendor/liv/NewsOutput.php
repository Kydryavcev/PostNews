<?php
namespace vendor\liv;
use vendor\liv\ConectDB;
use PDOException;
use PDO;

class NewsOutput
{
    public $news;
    public function __construct()
    {
        $bd = new ConectDB('postnews', 'root', ''); # database connection
        
        $query = "SELECT * FROM `news`";
        $this->news  = $bd->pdo->query($query);
        
    }
}
