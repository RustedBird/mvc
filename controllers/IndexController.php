<?php

include_once ROOT . '/controllers/Controller.php';

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionIndex($parameters = NULL)
    {
        try {
            $this->view->generate('template_view.php', 'main.php');
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
        return true;
    }
}