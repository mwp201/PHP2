<?php
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 02.04.2017
 * Time: 14:11
 */

namespace App\Models;
require_once __DIR__.'/Model.php';
class Author extends Model
{
    const TABLE = 'authors';

    /**
     *
     * @var string $name   The author's name of the article
     */
    public $name;
}