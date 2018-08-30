<?php

include_once ROOT . '/controllers/Controller.php';

class NewsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionIndex($parameters = NULL)
    {
        try {
            $this->view->news = ['Страница новостей', 123123123123];
            $this->view->generate('template_view.php', 'news/index.php');
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