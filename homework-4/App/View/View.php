<?php
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 02.04.2017
 * Time: 12:04
 */

namespace App\View;

class View implements \Countable, \Iterator
{
    use SetGetNotAvailableProperty;

    public function render($template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

}