<?php
namespace App\Models;
abstract class Model
{
    const TABLE = null;

    public $id;

    public static function findAll()
    {
        $db = new \App\Settings\Db;
        $sql = 'SELECT * FROM '.static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $db = new \App\Settings\Db;
        $sql = 'SELECT * FROM '.static::TABLE.' WHERE id = :id';
        $result = $db->query($sql, static::class, [':id' => $id]);
        if ($result != false) {
            return $result[0];
        } else {
            return false;
        }
    }

    public static function findLatestNews()
    {
        $db = new \App\Settings\Db;
        $sql = 'SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, static::class);
    }

    public function insert()
    {
        $colums = [];
        $params = [];
        $data = [];
        foreach ($this as $key => $value){
            if ($key == 'id') {
                continue;
            }
            $colums[] = $key;
            $params[] = ':'.$key;
            $data[':'.$key] = $value;
        }
        $sql = 'INSERT INTO '.static::TABLE.' ('.implode(', ', $colums).') VALUES ('.implode(', ', $params).')';

        $db = new \App\Settings\Db;
        $db->execute($sql, $data);
        $this->id = $db->lastInsertId();
    }

    public function update()
    {
        $data = [];
        $params = [];

        foreach($this as $key => $value){
            if ($key == 'id') {
                continue;
            }
            $params[] = $key.'=:'.$key;
            $data[':'.$key] = $value;
        }
        $data[':id'] = $this->id;
        $sql = 'UPDATE ' . static::TABLE . ' SET ' .implode(', ', $params). ' WHERE id = :id';
        $db = new \App\Settings\Db;
        $db->execute($sql, $data);
    }

    public function save()
    {
        if (null == $this->id) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function delete()
    {
        $sql = 'DELETE FROM '. static::TABLE .' WHERE id = :id';
        $db = new \App\Settings\Db;
        $db->execute($sql, [':id' => $this->id]);
    }

    public static function getAuthor()
    {
        $db = new \App\Settings\Db;
        $sql = 'SELECT * FROM '.static::TABLE;
        return $db->query($sql, static::class);
    }
}