<?php
function connectionPDO() {
    $dsn ="mysql:dbname=movies;host=localhost;charset=utf8";
    $username = "root";
    $password ="";
    try{
        $db = new PDO($dsn, $username, $password);
    }
    catch (PDOException $e){
        //echo $e->getMessage();
        $fd=fopen("fichier.log", "a+");
        fwrite($fd, $e ->getMessage());
    }
    return $db;
}