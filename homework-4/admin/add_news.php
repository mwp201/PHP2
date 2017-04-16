<?php
require_once __DIR__.'/../autoloadClass.php';
$article = new \App\Models\Article;
$title = $text = null;
if (!empty($_POST['news_title'])) {
    $title = $_POST['news_title'];
}
if (!empty($_POST['news_text'])) {
    $text = $_POST['news_text'];
}
$article->title = $title;
$article->text = $text;
$article->save();
if (!empty($_POST['submit'])) {
    header('Location:/homework-2/admin/index.php');
}
include __DIR__.'/../template/template_add_news.php';