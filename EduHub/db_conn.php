<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$server = "localhost";
$username = "root";
$pass = "";
$db_name = "search_db";

//$conn = mysqli_connect($server, $username, $pass, $db_name);

try{
    $conn = new PDO("mysql:host=$server;dbname=$db_name", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}