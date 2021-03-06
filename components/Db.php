<?php

class Db
{
    protected $connection;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function getConnection()
    {
        try {
            $paramsPath = ROOT . '/config/dbParams.php';
            $dbParams = include($paramsPath);

            if (!$this->connection) {
                $this->connection = new PDO("mysql:host={$dbParams['host']}; dbname={$dbParams['dbName']}",
                    $dbParams['user'], $dbParams['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
                return  $this->connection;
            } else {
                return $this->connection;
            }
        } catch (PDOException $ex) {
            echo 'Не работает';
            die;
        }
    }
}