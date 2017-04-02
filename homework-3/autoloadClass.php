<?php
function __autoload($className) {
    $path = str_replace('\\', '/', $className);
    require __DIR__.'/'.$path.'.php';
}