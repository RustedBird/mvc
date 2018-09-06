<?php
class ModelNews extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllNews ($category)
    {
        if ($category === NULL)
        {
            $stm = $this->connection->query("SELECT * FROM news");
        } else
        {
        $stm = $this->connection->query("SELECT * FROM news WHERE news.news_category = (SELECT  category.cat_id FROM category WHERE category.cat_code = '$category')");
        }

        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDate($date)
    {
        var_dump($date); die;
    }

    public function getTopNews()
    {
        $sth = $this->connection->prepare("SELECT * FROM news INNER JOIN category ON news.news_id = category.cat_id ORDER BY news.news_date DESC LIMIT 1");
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public function getNewsById ($id = null)
    {
        $stm = $this->connection->query("SELECT * FROM news WHERE news_id = $id");
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getLastNews($count = 3)
    {
        $sth = $this->connection->prepare("SELECT * FROM news ORDER BY news_date DESC LIMIT :count");
        $sth->bindParam(':count', $count, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setCount($id = null)
    {
        $this->connection->query("UPDATE news SET view_count = (view_count + 1) WHERE news_id = $id");
    }
    public function getComentary($id = null)
    {
        $sth = $this->connection->query("SELECT * FROM comments WHERE news_id = $id");
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}