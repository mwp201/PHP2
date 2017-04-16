<?php
$id = null;
if (!empty($_GET['id'])){
    $id = $_GET['id'];
}
$article = \App\Models\Article::findById($_GET['id']);
?>
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
    <h2>Редактировать новость</h2>
    <form class="admin-form" action="/homework-4/admin/edit_news.php" method="post">
        <fieldset>
            <div class="row">
                <label for="news_header">Заголовок новости</label>
                <input type="text" name="news_title" id="news_title" value="<?php echo $article->title; ?>">
            </div>
            <div class="col">
                <label for="news_author">Автор</label>
                <select name="news_author" id="news_author">
                    <?php switch($article->author_id) {
                    case 1: echo
                        '<option value="1" selected>apple.com</option>
                        <option value="2">lenta.ru</option>
                        <option value="3">РИА Новости</option>
                        <option value="4">Reuters</option>';
                     break;
                     case 2: echo
                         '<option value="1">apple.com</option>
                         <option value="2" selected>lenta.ru</option>
                         <option value="3">РИА Новости</option>
                         <option value="4">Reuters</option>';
                    break;
                    case 3: echo
                         '<option value="1">apple.com</option>
                         <option value="2">lenta.ru</option>
                         <option value="3" selected>РИА Новости</option>
                         <option value="4">Reuters</option>';
                     break;
                     case 4: echo
                         '<option value="1">apple.com</option>
                         <option value="2">lenta.ru</option>
                         <option value="3">РИА Новости</option>
                         <option value="4" selected>Reuters</option>';
                    break;
                    default: echo
                          '<option value="1" selected>apple.comttt</option>';
                    } ?>
                </select>
            </div>
            <div class="row">
                <label for="news_text">Текст новости</label>
                <textarea name="news_text" id="news_text" cols="62" rows="10"><?php echo $article->text; ?></textarea>
            </div>
            <input type="hidden" name="news_id" value="<?php echo $article->id; ?>">
            <input type="submit" value="Обновить" name="submit">
        </fieldset>
    </form>
   </div>
</body>
</html>