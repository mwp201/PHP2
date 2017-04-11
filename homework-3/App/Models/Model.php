<?php
namespace App\Models;
abstract class Model
{
    const TABLE = null;

    public $id;

    /**
     * This method returns all records from the database table
     *
     * @var object $db
     * @var string $sql
     * @return array|bool
     */
    public static function findAll()
    {
        $db = new \App\Dbconnect\Db;
        $sql = 'SELECT * FROM '.static::TABLE;
        return $db->query($sql, static::class);
    }

    /**
     * This method returns one entry from the database table
     *
     * @var object $db
     * @var string $sql
     * @param $id
     * @return bool
     */
    public static function findById($id)
    {
        $db = new \App\Dbconnect\Db;
        $sql = 'SELECT * FROM '.static::TABLE.' WHERE id = :id';
        $result = $db->query($sql, static::class, [':id' => $id]);
        if ($result != false) {
            return $result[0];
        } else {
            return false;
        }
    }

    /**
     * This method returns the last three records from the database table
     *
     * @var object $db
     * @var string $sql
     * @return array|bool
     */
    public static function findLatestNews()
    {
        $db = new \App\Dbconnect\Db;
        $sql = 'SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, static::class);
    }

    /**
     * This method inserts data into a database table
     *
     * @var object $db
     * @var string $sql
     * @var array $colums
     * @var array $params
     * @var array $data
     */
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

        $db = new \App\Dbconnect\Db;
        $db->execute($sql, $data);
        $this->id = $db->lastInsertId();
    }

    /**
     * This method updates the data in the database table
     *
     * @var object $db
     * @var string $sql
     * @var array $params
     * @var array $data
     */
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
        $db = new \App\Dbconnect\Db;
        $db->execute($sql, $data);
    }

    /**
     * This method defines a "new" model or not and, depending on it,
     * calls either the insert () method or the update () method.
     */
    public function save()
    {
        if (null == $this->id) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    /**
     * This method removes data from the database table
     *
     * @var object $db
     * @var string $sql
     */
    public function delete()
    {
        $sql = 'DELETE FROM '. static::TABLE .' WHERE id = :id';
        $db = new \App\Dbconnect\Db;
        $db->execute($sql, [':id' => $this->id]);
    }

    /**
     * This method returns all records from the database table
     *
     * @var object $db
     * @var string $sql
     * @return array|bool
     */
    public static function getAuthor()
    {
        $db = new \App\Dbconnect\Db;
        $sql = 'SELECT * FROM '.static::TABLE;
        return $db->query($sql, static::class);
    }
}