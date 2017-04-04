<?php
require_once __DIR__.'/autoloadClass.php';

$view = new \App\View\View;
$view->articles = \App\Models\Article::findAll();
var_dump($view->articles[1]);
foreach ($view->articles as $item) {
    foreach ($item as $key => $value) {
        if ($key == 'author_id' && $value !== null){
            $view->authors = \App\Models\Author::getAuthor();
        }
    }
}
//$view->authors = \App\Models\Author::getAuthor();
$view->display(__DIR__.'/template/template_index.php');