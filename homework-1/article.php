<?php
if (!empty($_GET['id'])){
    $id = $_GET['id'];
} else {
    header('Location: /homework/index.php');
}
require_once __DIR__.'/autoloadClass.php';
$data = App\Models\Article::findById($id);
include __DIR__.'/template/template_article.php';