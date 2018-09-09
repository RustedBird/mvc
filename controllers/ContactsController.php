<?php

include_once ROOT . '/controllers/Controller.php';
include_once ROOT . '/models/ModelContacts.php';

class ContactsController extends Controller
{
    private $contactsModel;

    public function __construct()
    {
        parent::__construct();
        $this->contactsModel = new ModelContacts();
    }

    public function actionIndex($parameters = NULL)
    {
        try {
            $this->view->generate('template_view.php', 'contacts/index.php');
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
        return true;
    }

    public function actionMessage($parameters = NULL)
    {

        try {
            $this->view->sendMessage = $this->contactsModel->sendMessage();

            $this->view->generate('template_view.php', 'contacts/success.php');
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
        return true;
    }
}