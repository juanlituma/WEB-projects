<?php
$db_server = "localhost";
$db_user ="root";
$db_password = "";
$db_name = "test";

$conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);

if ($conn){
    echo"your are connected";
}


//create database

?>