<?php
namespace App\Models;
require_once __DIR__.'/Model.php';
class Article extends Model
{
    const TABLE = 'news';
    /**
     *
     * @var string $title    Article title
     * @var string $text     Article text
     * @var int $author_id   Id author of the article
     */
    public $title;
    public $text;
    public $author_id;
}