<?php

class ModelComments extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addComment ()
    {
        $newsId = $_POST['news_id'];
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $theme = $_POST['theme'];
        $message = $_POST['message'];

        $this->connection->query("INSERT INTO comments (news_id, name, mail, theme, message) VALUES ('$newsId', '$name', '$mail', '$theme', '$message')");

        header("Location: http://mvc/news/post/$newsId", true, 301);
        exit();
    }

    public function getComments($id)
    {
        $stm = $this->connection->query("SELECT * FROM comments WHERE news_id = $id");

        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}