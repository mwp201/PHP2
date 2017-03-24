<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
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
        .news__header{
            font-size: 22px;
            font-weight:normal;
            color: #008000;
        }
        .news__description{
            margin-bottom: 0;
        }
        .news__data{
            margin: 0;
            margin-top: 15px;
            font-size: 12px;
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
    <a class="link" href="index.php">Вернуться на главную</a>
    <div class="news">
        <h2 class="news__header"><?php echo $data[0]->header; ?></h2>
        <p class="news__description"><?php echo $data[0]->text; ?></p>
        <p class="news__data">Автор : <?php echo $data[0]->author; ?></p>
    </div>
</div>
</body>
</html>
