<?php
require_once 'vendor\liv\ConectDB.php';
require_once 'vendor\liv\NewsOutput.php';
require_once 'vendor\liv\SetNews.php';

use vendor\liv\ConectDB;
use vendor\liv\NewsOutput;
use vendor\liv\SetNews;

if (isset($_REQUEST['addNews'])) {
    if (!empty($_REQUEST['nameNews'])){
        if (!empty($_REQUEST['description'])) {
            new SetNews();
        }else {
            echo 'Заполните поле с описанием.';
        }
    }else {
        echo 'Заполните поле с названием.';
    }
     

}

$newsList = new NewsOutput();

require_once 'view.php';
