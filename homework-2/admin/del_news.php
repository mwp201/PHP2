<?php
require_once __DIR__.'/../autoloadClass.php';
$article = \App\Models\Article::findById($_GET['id']);
$article->delete();
header('Location:/homework-2/admin/index.php');