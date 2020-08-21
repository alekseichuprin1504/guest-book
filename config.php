<?php

/*
Database connection parameters
*/
session_start();

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DBNAME", "");
define("CHARSET", "utf8");
define("SALT", "");
$dsn = "mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8";
        try {
            $connection = new PDO($dsn, USER, PASSWORD);
        } catch (PDOException $e) {
            die('Подключение не удалось '.$e->getMessage());
        }