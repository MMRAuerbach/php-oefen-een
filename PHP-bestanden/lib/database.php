<?php
    //Hostname/ location of the database. Standard in development loclhost or 127.0.0.1
    $host = '127.0.0.1';
    //name of the database
    $db   = 'test';
    //Name of the user that can connect to the database (default root)
    $user = 'test';
    //Password of the previous user (default empty)
    $pass = 'test';

    $dsn = "mysql:host=$host;dbname=$db;";
    try {
        $pdo = new PDO($dsn, $user, $pass);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

