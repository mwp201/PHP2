<?php
require_once __DIR__.'/../autoloadClass.php';
$view = new \App\View\View;
$view->article = new \App\Models\Article;
$title = $text = $author_id = null;
if (!empty($_POST['news_title'])) {
    $title = $_POST['news_title'];
}
if (!empty($_POST['news_text'])) {
    $text = $_POST['news_text'];
}
if (!empty($_POST['news_author'])) {
    $author_id = $_POST['news_author'];
}
$view->article->title = $title;
$view->article->text = $text;
$view->article->author_id = $author_id;
$view->article->save();
if (!empty($_POST['submit'])) {
    header('Location:/homework-3/admin/index.php');
}
$view->display(__DIR__.'/../template/template_add_news.php');

