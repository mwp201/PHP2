<?php
namespace App\Models;
require_once __DIR__.'/Model.php';
class Article extends Model
{
    const TABLE = 'news';

    public $id;
    public $header;
    public $text;
    public $author;
}