<?php

class ModelNews extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllNews ()
    {
        $stm = $this->connection->query("SELECT * FROM news");

        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getNewsByCategory ()
    {
        $stm = $this->connection->query("SELECT * FROM news GROUP BY news_category");

        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getNewsById ($id = null)
    {
        $stm = $this->connection->query("SELECT * FROM news WHERE news_id = $id");

        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getLastNews($count = 3)
    {
        $sth = $this->connection->prepare("SELECT * FROM news ORDER BY news_date DESC LIMIT :count");
        $sth->bindParam(':count', $count, PDO::PARAM_INT);
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTopNews($count = 4)
    {
        $sth = $this->connection->prepare("SELECT * FROM news ORDER BY news_category LIMIT :count");
        $sth->bindParam(':count', $count, PDO::PARAM_INT);
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setCount($id = null)
    {
        $this->connection->query("UPDATE news SET view_count = (view_count + 1) WHERE news_id = $id");
    }

    public function getCount($id = null)
    {
        $sth = $this->connection->query("SELECT * FROM comments WHERE news_id = $id");

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}