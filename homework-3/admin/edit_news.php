<?php
require_once __DIR__.'/../autoloadClass.php';
$view = new \App\View\View;
if (!empty($_POST['submit'])){
    $view->article = \App\Models\Article::findById($_POST['news_id']);
    $view->article->title = $_POST['news_title'];
    $view->article->text = $_POST['news_text'];
    $view->article->author_id = $_POST['news_author'];
    $view->article->save();
    header('Location:/homework-3/admin/index.php');
}
$view->display( __DIR__.'/../template/template_edit_news.php');