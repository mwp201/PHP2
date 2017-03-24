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

    public static function findLatestNews()
    {
        $db = new Db;
        $sql = 'SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, static::class);
    }

    private function insert()
    {
        //var_dump(get_object_vars($this));
        $colums = [];
        $params = [];
        $data = [];
        foreach ($this as $key => $value) {
            if ($key == 'id') {
                continue;
            }
            $colums[] = $key;
            $params[] = ':'.$key;
            $data[':'.$key] = $value;
        }
        $sql = 'INSERT INTO '.static::TABLE.' ('.implode(', ', $colums).') VALUES ('.implode(', ', $params).')';

        $db = new Db;
        $db->execute($sql, $data);
    }

    private function update($id)
    {
        $dataObject = self::findById($id);
        if ($dataObject) {
            $colums = [];
            $params = [];
            $data = [];
            foreach ($this as $key => $value) {
                if ($key == 'id') {
                    continue;
                }
                if (empty($value)) {
                    $value = $dataObject[0]->$key;
                }
                $colums[] = $key;
                $params[] = ':' . $key;
                $data[':' . $key] = $value;
            }
            $sql = 'UPDATE ' . static::TABLE . ' SET ' .$colums[0]. ' = ' . $params[0] . ', '
                . $colums[1] . ' = ' . $params[1] . ', '
                . $colums[2] . ' = ' . $params[2] . ' WHERE id = '.$id;
            $db = new Db;
            $db->execute($sql, $data);
        }
    }

    public function save($id = null)
    {
        if (!empty($id)) {
            $this->update($id);
        } else {
            $this->insert();
        }
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM '. static::TABLE .' WHERE id = :id';
        $db = new Db;
        $db->execute($sql, [':id' => $id]);
    }
}