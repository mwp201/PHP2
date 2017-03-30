<?php
namespace App;

class Config
{
    public $data =[];
    protected static $instance = null;

    protected function __construct()
    {
<<<<<<< HEAD
        $this->data['db'] = parse_ini_file('./configDb.ini');
=======
        $this->data['db'] = parse_ini_file('configDb.ini');
>>>>>>> 1bd97789974d7c00b92c075155e602e32c5379a2
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