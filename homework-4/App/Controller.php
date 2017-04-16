<?php
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 13.04.2017
 * Time: 10:16
 */

namespace App;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new \App\View\View;
    }

    protected function access()
    {
        return true;
    }

    public function action($action)
    {
        if ($this->access() !== false) {
            $action = 'action'.$action;
            $this->$action();
        } else {
            die('Access denied!');
        }
    }
}