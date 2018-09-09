<?php
class ModelContacts extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sendMessage()
    {
        if (isset($_POST))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            $this->connection->query("INSERT INTO users (users.name, users.email, users.phone, users.message)
                                                        VALUES ('$name', '$email', '$phone', '$message')");

            return true;
        }

    }

}