<?php
require_once __DIR__.'/autoloadClass.php';
$article = new \App\Models\Article;
$header = $text = $author = null;
if (!empty($_POST['news']['header'])) {
    $header = $_POST['news']['header'];
}
if (!empty($_POST['news']['text'])) {
    $text = $_POST['news']['text'];
}
if (!empty($_POST['news']['author'])) {
    $author = $_POST['news']['author'];
}
$article->header = $header;
$article->text = $text;
$article->author = $author;
$article->insert();
header('Location:/homework-2/index.php');