<?php
require_once __DIR__.'/../autoloadClass.php';
$data = \App\Models\Article::findAll();
$author = \App\Models\Author::getAuthor();
include __DIR__.'/../template/template_admin_index.php';