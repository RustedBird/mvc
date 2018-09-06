<?php

include_once ROOT . '/models/ModelComments.php';
include_once ROOT . '/controllers/Controller.php';

class CommentController extends Controller
{
    private $commentModel;
    public function __construct()
    {
        parent::__construct();
        $this->commentModel = new ModelComments();
    }

    public function actionAdd($parameters = NULL)
    {
        try {
            $this->commentModel->addComment();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
        return true;
    }
}