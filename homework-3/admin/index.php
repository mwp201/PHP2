<?php
require_once __DIR__.'/../autoloadClass.php';

$view = new \App\View\View;
$view->articles = \App\Models\Article::findAll();

foreach ($view->articles as $item) {
    foreach ($item as $key => $value) {
        if ($key == 'author_id' && $value !== null){
            $view->author = \App\Models\Author::getAuthor();
        }
    }
}

$view->display(__DIR__.'/../template/template_admin_index.php');


//$data = \App\Models\Article::findAll();
//include __DIR__.'/../template/template_index.php';