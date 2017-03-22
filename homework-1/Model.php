<?php

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
}