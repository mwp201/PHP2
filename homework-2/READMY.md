Согласно задания 1 класс App\Config был реализован так:
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

а в 7 задании я сделал класс App\Config синглтоном и использовал уже его в классе Db.

Для задания 3 чтобы заполнить свойство id объекта в класс Db добавил метод lastInsertId().