<?php
namespace App\Models;
require_once __DIR__.'/Model.php';
class Article extends Model
{
    const TABLE = 'news';

    public $title;
    public $text;
    public $author;
}