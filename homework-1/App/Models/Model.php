<?php
namespace App\Models;
abstract class Model
{
    const TABLE = null;

    public $id;

    public static function findAll()
    {
        $db = new Db;
        $sql = 'SELECT * FROM '.static::TABLE;
        return $db->query($sql, static::class);
    }

    //ДЗ-1 задание 4 добавил метод findById($id)
    public static function findById($id)
    {
        $db = new Db;
        $sql = 'SELECT * FROM '.static::TABLE.' WHERE id = '.$id;
        $result = $db->query($sql, static::class);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    //для ДЗ-1 задания 5 добавил метод findLatestNews() чтобы получить 3 последние новости
    public static function findLatestNews()
    {
        $db = new Db;
        $sql = 'SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, static::class);
    }
}