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
            font-size: 22px;
            color: #008000;
            text-decoration: none;
        }
        .news__link:hover{
            color: red;
        }
        .news__description{
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<div class="wrap">
    <?php foreach($data as $value) : ?>
    <div class="news">
        <p><a class="news__link" href="article.php?id=<?php echo $value->id; ?>"><?php echo $value->header; ?></a></p>
        <p><?php echo $value->text; ?></p>
        <p><?php echo $value->author; ?></p>
    </div>
    <?php endforeach;?>
</div>
</body>
</html>