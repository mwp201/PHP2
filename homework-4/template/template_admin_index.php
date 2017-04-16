<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <style>
        body{
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        .wrap{
            width: 960px;
            margin: 0 auto;
        }
        .news{
            margin-bottom: 20px;
            padding: 20px;
            background-color: #d0e9c6;
            border-radius: 15px;
        }
        .news__link{
            color: #008000;
            text-decoration: none;
        }
        .news__link:hover{
            color: red;
        }
        .link{
            display: block;
            width: 200px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
<div class="wrap">
    <a class="link" href="./add_news.php">Добавить новость</a>
    <?php foreach($this->articles as $article) : ?>
        <div class="news">
            <h2><?php echo $article->title; ?></h2>
            <p><?php echo $article->text; ?></p>
            <p><?php echo $this->authors[$article->author_id - 1]->name; ?></p>
            <a class="news__link" href="./edit_news.php?id=<?php echo $article->id; ?>">Редактировать</a>
            <a class="news__link" href="./del_news.php?id=<?php echo $article->id; ?>">Удалить</a>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>