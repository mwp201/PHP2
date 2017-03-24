<?php
require_once __DIR__.'/../autoloadClass.php';
$config = new \App\Config(__DIR__.'/../configDb.ini');
assert('localhost' == $config->data['db']['host']);
