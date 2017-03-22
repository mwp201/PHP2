<?php
require_once __DIR__.'/autoloadClass.php';
$data = App\Models\Article::findLatestNews(3);
include __DIR__.'/template/template_index.php';