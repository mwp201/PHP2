<?php
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 15.04.2017
 * Time: 19:40
 */

namespace App\Controllers;

use App\Controller;

class IndexAdmin extends Controller
{
    protected function actionAdmin()
    {
        $this->view->articles = \App\Models\Article::findAll();

        foreach ($this->view->articles as $item) {
            foreach ($item as $key => $value) {
                if ($key == 'author_id' && $value !== null){
                    $this->view->authors = \App\Models\Author::getAuthor();
                }
            }
        }
        $this->view->display(__DIR__.'/../../template/template_admin_index.php');
    }

    protected function actionEdit()
    {
        //$this->view->article = \App\Models\Article::findById($_GET['id']);
        //var_dump($this->view->article);

        if (!empty($_POST['submit'])){
            $this->view->article = \App\Models\Article::findById($_POST['news_id']);
            //var_dump($this->view->article);
            $this->view->article->title = $_POST['news_title'];
            $this->view->article->text = $_POST['news_text'];
            $this->view->article->author_id = $_POST['news_author'];
            $this->view->article->save();
            header('Location:/homework-4/admin/index.php');
        }
        include __DIR__.'/../../template/template_edit_news.php';
    }

    protected function actionSave()
    {

    }

}

