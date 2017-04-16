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
    /**
     * This method returns all records from the database table
     */
    protected function actionAllNews()
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

    /**
     * This method updates the data in the database table
     */
    protected function actionEdit()
    {
        if (!empty($_POST['submit'])){
            $this->view->article = \App\Models\Article::findById($_POST['news_id']);
            $this->view->article->title = $_POST['news_title'];
            $this->view->article->text = $_POST['news_text'];
            $this->view->article->author_id = $_POST['news_author'];
            $this->view->article->save();
            header('Location:/homework-4/admin/index.php');
        }
        $this->view->display(__DIR__.'/../../template/template_edit_news.php');
    }

    /**
     * This method inserts data into a database table
     */
    protected function actionSave()
    {
        $this->view->article = new \App\Models\Article;
        $title = $text = $author_id = null;
        if (!empty($_POST['news_title'])) {
            $title = $_POST['news_title'];
        }
        if (!empty($_POST['news_text'])) {
            $text = $_POST['news_text'];
        }
        if (!empty($_POST['news_author'])) {
            $author_id = $_POST['news_author'];
        }
        $this->view->article->title = $title;
        $this->view->article->text = $text;
        $this->view->article->author_id = $author_id;
        $this->view->article->save();
        if (!empty($_POST['submit'])) {
            header('Location:/homework-4/admin/index.php');
        }
        $this->view->display(__DIR__.'/../../template/template_add_news.php');
    }

}

