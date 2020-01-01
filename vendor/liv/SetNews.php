<?php
namespace vendor\liv;
use vendor\liv\ConectDB;

class SetNews
{
    public function __construct()
    {
        $query = "INSERT INTO `news` VALUES (NULL, :name, :description)";
        $bd = new ConectDB('postnews', 'root', ''); # database connection
        $news = $bd->pdo->prepare($query);
        $news->execute(['name' => $_REQUEST['nameNews'], 'description' => $_REQUEST['description']]);
        header("Location: index.php");
    }
}
