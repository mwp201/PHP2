<?php
require_once __DIR__.'/../Article.php';

//$data = Article::findAll();
$data = Article::findById(10);
echo '<pre>';
var_dump($data);