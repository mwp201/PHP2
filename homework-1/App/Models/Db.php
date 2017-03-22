<?php
namespace App\Models;
class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=php2', 'root', '');
    }

    //ДЗ-1 задание 2-1 сократил код отвечающий за преобразование данных
    // в объекты нужного класса до одной строчки
    //ДЗ-1 задание 2-2 добавил в этот метод возможность передать подстановки в запрос
    public function query($sql, $class, array $data=[])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if ($res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS,  $class);
        } else {
            return false;
        }
    }

    //ДЗ-1 задание 2-3 добавил метод execute
    public function execute($query, array $params=[])
    {
        $sth = $this->dbh->prepare($query);
        if ($sth->execute($params)) {
            return true;
        } else {
            return false;
        }
    }
}