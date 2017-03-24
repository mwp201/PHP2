<?php
require_once __DIR__.'/autoloadClass.php';
$article = new \App\Models\Article;
$id = $header = $text = $author = null;
if (!empty($_POST['news']['id'])) {
    $id = htmlentities(trim($_POST['news']['id']));
}
if (!empty($_POST['news']['header'])) {
    $header = htmlentities(trim($_POST['news']['header']));
}
if (!empty($_POST['news']['text'])) {
    $text = htmlentities(trim($_POST['news']['text']));
}
if (!empty($_POST['news']['author'])) {
    $author = htmlentities(trim($_POST['news']['author']));
}
$article->header = $header;
$article->text = $text;
$article->author = $author;
$article->save($id);
header('Location:/homework-2/index.php');