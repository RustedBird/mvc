<?php

include_once ROOT . '/models/ModelNews.php';
include_once ROOT . '/controllers/Controller.php';

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->newsModel = new ModelNews();
    }

    public function actionIndex($parameters = NULL)
    {
        try {
            $this->view->lastNews = $this->newsModel->getLastNews();
            $this->view->allNews = $this->newsModel->getAllNews();
            $this->view->comments = $this->newsModel->getComentary($parameters);

            $this->view->generate('template_view.php', 'index/index.php');
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
        return true;
    }
}