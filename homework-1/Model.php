<?php

abstract class Model
{
    const TABLE = null;

    public $id;

    public static function findAll()
    {
        $db = new Db;
        echo $sql = 'SELECT * FROM '.static::TABLE;
        return $db->query($sql, static::class);
    }
}