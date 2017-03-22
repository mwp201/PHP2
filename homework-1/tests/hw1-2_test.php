<?php
require_once __DIR__.'/../autoloadClass.php';

$data = App\Models\Article::findAll();
$article = App\Models\Article::findById(6);

echo '<pre>';
var_dump($data);
echo '=========================<br>';
var_dump($article);