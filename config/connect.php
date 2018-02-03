<?php
/**
* Created by PhpStorm.
 * User: oguzhandemiroz
* Date: 23.01.2018
* Time: 22:02
*/
error_reporting(0);
$host = "127.0.0.1";
$dbName = "blogPage";
$userName = "root";
$dbPass = "";

//pdo baglantisi saglama
try{
    $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $userName, $dbPass);
    $db->query("SET CHARACTER SET uft8");
}
catch (PDOException $e){
    echo $e->getMessage();
}
