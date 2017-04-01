<?php
require_once __DIR__.'/../autoloadClass.php';
$data = App\Models\Article::findAll();
include __DIR__.'/../template/template_index.php';