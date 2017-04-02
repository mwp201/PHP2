<?php
require_once __DIR__.'/../autoloadClass.php';
if (!empty($_POST['submit'])){
    $article = \App\Models\Article::findById($_POST['news_id']);
    $article->title = $_POST['news_title'];
    $article->text = $_POST['news_text'];
    $article->save();
    header('Location:/homework-2/admin/index.php');
}
include __DIR__.'/../template/template_edit_news.php';