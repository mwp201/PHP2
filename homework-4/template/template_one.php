<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новость</title>
    <style>
        body{
            font-family: Arial;
        }
        .container{
            width: 960px;
            margin: 0 auto;
        }
        p{
            text-align: justify;
        }
    </style>
</head>
<body>
<div class="container">
    <h2><?php echo $this->oneArticle->title; ?></h2>
    <p><?php echo $this->oneArticle->text; ?></p>
    <p><?php echo $this->authors[$this->oneArticle->author_id - 1]->name; ?>
    <hr>
</div>
</body>
</html>