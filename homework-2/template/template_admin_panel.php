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
        h2{
            text-align: center;
        }
        .admin-form{
            width: 495px;
            margin: 0 auto;
        }
        .admin-form fieldset{
            padding-top: 25px;
            padding-bottom: 25px;
        }
        .col{
            display: inline-block;
            vertical-align: top;
            margin-bottom: 20px;
        }
        .col:nth-child(2){
            margin-right: 28px;
        }
        .col label,
        .row label{
            display: block;
            margin-bottom: 15px;
        }
        .col input[type=text]{
            width: 200px;
        }
        .col input[type=text],
        .row textarea{
            padding: 5px;
        }
        .row{
            margin-bottom: 20px;
        }
        .row input[type=text]{
            width: 450px;
            padding: 5px;
        }
        .admin-form input[type=submit]{
            margin-left: 53px;
            cursor: pointer;
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
    <h2>Редактор новостей</h2>
    <form class="admin-form">
        <fieldset>
            <div class="row">
                <label for="news_header">Заголовок новости</label>
                <input type="text" name="news[header]" id="news_header">
            </div>
        <div class="col">
<!--            <label for="news_id">ID новости</label>-->
<!--            <input type="text" name="news[id]" id="news_id">-->
        </div>
        <div class="col">
            <label for="news_author">Автор</label>
            <input type="text" name="news[author]" id="news_author">
        </div>
        <div class="row">
            <label for="news_text">Текст новости</label>
            <textarea name="news[text]" id="news_text" cols="62" rows="10"></textarea>
        </div>
        <input type="submit" formmethod="post" formaction="/homework-2/add_news.php" value="Добавить">
         <input type="submit" formmethod="post" formaction="/homework-2/edit_news.php" value="Редактировать">
         <input type="submit" formmethod="post" formaction="/homework-2/del_news.php" value="Удалить">
        </fieldset>
    </form>
    <a class="link" href="index.php">Вернуться на главную</a>
</div>
</body>
</html>