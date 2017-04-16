<?php
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 13.04.2017
 * Time: 9:47
 */

namespace App\Controllers;

use App\Controller;

class Index extends Controller
{
    /**
     * This method returns all records from the database table
     */
    protected function actionDefault()
    {
        $this->view->articles = \App\Models\Article::findAll();

        foreach ($this->view->articles as $item) {
            foreach ($item as $key => $value) {
                if ($key == 'author_id' && $value !== null){
                    $this->view->authors = \App\Models\Author::getAuthor();
                }
            }
        }

        $this->view->display(__DIR__.'/../../template/template_default.php');
    }

    /**
     * This method returns one entry from the database table
     */

    protected function actionOne()
    {
        $this->view->oneArticle = \App\Models\Article::findById($_GET['id']);
        $this->view->authors = \App\Models\Author::getAuthor();
        $this->view->display(__DIR__.'/../../template/template_one.php');
    }

}