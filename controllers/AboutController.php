<?php

include_once ROOT . '/controllers/Controller.php';

class AboutController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionIndex($parameters = NULL)
    {
        try {
            $this->view->generate('template_view.php', 'about/index.php');
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
        return true;
    }
}