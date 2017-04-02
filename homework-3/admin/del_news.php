<?php
require_once __DIR__.'/../autoloadClass.php';
$article = new \App\Models\Article;
$article->id = $_GET['id'];
$article->delete();
header('Location:/homework-2/admin/index.php');