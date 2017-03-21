<?php
//require __DIR__.'/../Db.php';
require_once __DIR__.'/../Article.php';

//$db = new Db;
//$data = $db->query('SELECT * FROM news', Article::class);

$data = Article::findAll();
echo '<pre>';
echo $data[1]->title;