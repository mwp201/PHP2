<?php
namespace App\Settings;
require_once __DIR__.'/../../autoloadClass.php';
class Db
{
    protected $dbh;
    protected $config;

    public function __construct()
    {
        $this->config = \App\Config::instance();
        $this->dbh = new \PDO('mysql:host=' . $this->config->data['db']['host'] . ';dbname=' . $this->config->data['db']['dbname'] . '',
            $this->config->data['db']['user'], $this->config->data['db']['password']);
    }

    public function query($sql, $class, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if ($res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        } else {
            return false;
        }
    }

    public function execute($query, array $params = [])
    {
        $sth = $this->dbh->prepare($query);
        if ($sth->execute($params)) {
            return true;
        } else {
            return false;
        }
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}
