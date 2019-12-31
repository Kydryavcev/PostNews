<?php
require_once 'vendor\liv\ConectDB.php';
require_once 'vendor\liv\NewsOutput.php';
use vendor\liv\ConectDB;
use vendor\liv\NewsOutput;

if (isset($_REQUEST['addNews'])) {
    if (!empty($_REQUEST['nameNews'])){
        if (!empty($_REQUEST['description'])) {
            $query = "INSERT INTO `news` VALUES (NULL, :name, :description)";
            $bd = new ConectDB('postnews', 'root', ''); # database connection
            $news = $bd->pdo->prepare($query);
            $news->execute(['name' => $_REQUEST['nameNews'], 'description' => $_REQUEST['description']]);
            header("Location: index.php");
        }else {
            echo 'Зполните поле с описанием.';
        }
    }else {
        echo 'Зполните поле с названием.';
    }
     

}

$newsList = new NewsOutput();

require_once 'view.php';
