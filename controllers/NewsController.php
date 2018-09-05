<?php

include_once ROOT . '/models/ModelNews.php';
include_once ROOT . '/models/ModelComments.php';
include_once ROOT . '/controllers/Controller.php';

class NewsController extends Controller
{
    private $newsModel;
    public function __construct()
    {
        parent::__construct();
        $this->newsModel = new ModelNews();
        $this->commentsModel = new ModelComments();
    }

    public function actionIndex($parameters = NULL)
    {
        try {
            $this->view->allNews = $this->newsModel->getAllNews();
            $this->view->allCategories = $this->newsModel->getNewsByCategory();
            $this->view->topNews = $this->newsModel->getTopNews();
            $this->view->lastNews = $this->newsModel->getLastNews();

            $this->view->generate('template_view.php', 'news/index.php');
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
        return true;
    }

    public function actionPost($parameters = NULL)
    {
        try {
            $this->newsModel->setCount($parameters);
            $this->view->topNews = $this->newsModel->getTopNews();
            $this->view->lastNews = $this->newsModel->getLastNews();
            $this->view->allCategories = $this->newsModel->getNewsByCategory();
            $this->view->selectedNews = $this->newsModel->getNewsById($parameters);

            $this->view->comments = $this->commentsModel->getComments($parameters);
//            var_dump($this->view->comments); die;

            $this->view->generate('template_view.php', 'news/post.php');
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
        return true;
    }

    public function actionDetail($parameters = NULL)
    {
        return 'actionDetails';
    }
}