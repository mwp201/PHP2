<?php
require_once __DIR__.'/../autoloadClass.php';
$id = null;
if (!empty($_GET['id'])){
    $id = $_GET['id'];
}
$article = new \App\Models\Article;
$oldData = $article::findById($id);

if (!empty($_POST['news_title'])) {
    $title = $_POST['news_title'];
} else {
    $title = $oldData->title;
}
if (!empty($_POST['news_text'])) {
    $text = $_POST['news_text'];
} else {
    $text = $oldData->text;
}
if (!empty($_POST['news_author'])) {
    $author = $_POST['news_author'];
} else {
    $author = $oldData->author;
}
if (!empty($_POST['news_id'])){
    $id = $_POST['news_id'];
}
$article->title = $title;
$article->text = $text;
$article->author = $author;
$article->id = $id;
$article->save();
if (!empty($_POST['submit'])){
    header('Location:/homework-2/admin/index.php');
}
include __DIR__.'/../template/template_edit_news.php';