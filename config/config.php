<?php
/**
 * Created by PhpStorm.
 * User: oguzhandemiroz
 * Date: 23.01.2018
 * Time: 22:02
 */
$host = "127.0.0.1";
$dbName = "blog_page";
$userName = "root";
$dbPass = "";

//pdo baglantisi saglama
try{
    $db = new PDO("mysql:host=$host; dbname=$dbName;charset=utf8", "$userName", "$dbPass");
    $db->query("SET CHARACTER SET uft8");
}
catch (PDOException $e){
    echo $e->getMessage();
}
$query = $db->query("SELECT * FROM users WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
if ($query){
    print_r($query);
}
//pdo baglantiyi kapatma
//$db = null;