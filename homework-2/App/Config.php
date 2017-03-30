<?php
namespace App;

class Config
{
    public $data =[];
    protected static $instance = null;

    protected function __construct()
    {
        $this->data['db'] = parse_ini_file('./configDb.ini');
    }

    protected function __clone()
    {

    }

    public static function instance()
    {
        if (null === static::$instance) {
            static::$instance = new self;
        }
        return static::$instance;
    }
}