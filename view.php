<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
    <form action="index.php">
    <h1>Добавление новости</h1>
    <h3>Название новости: <br><input type="text" name="nameNews"></h3>
    <h3>Описание новости: <br><textarea name="description" cols="30" rows="10"></textarea></h3><br>
    <button name="addNews">Добавить новость</button>
    </form>
    <h1>Список новостей</h1>
    <!-- get news  -->
    <?  try {
            while($postNews = $newsList->news->fetch()){?>
                <h2><?= $postNews['name'];?></h2>
                <?= $postNews['description'];?><br>
            <?}
        } catch (PDOException $e) {?>
            <strong>'Ошибка вывода новостей:</strong><?=$e->getMessage();?>
        <?}  ?>
    <!-- end get news  -->
</body>
</html>