<?php

class ModelCategory extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCategoryList ()
    {
        $sth = $this->connection->prepare("SELECT * FROM category");
        $sth->execute();
        return $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}