<?php
namespace App;

class Config
{
    public $data = [];

    function __construct($iniFile)
    {
        $this->data['db'] = parse_ini_file($iniFile);
    }
}