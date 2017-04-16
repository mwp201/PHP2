<?php
namespace App\View;
trait SetGetNotAvailableProperty
{
    protected $data;

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function count()
    {
        return count($this->data);
    }

    /**
     * @return mixed Возвращает текущий элемент
     */
    public function current()
    {
        return current($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function next()
    {
        next($this->data);
    }

    public function rewind()
    {
        reset($this->data);
    }

    public function valid()
    {
        return null !== key($this->data);
    }

}