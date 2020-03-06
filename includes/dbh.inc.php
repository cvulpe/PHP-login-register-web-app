<?php

$server = "localhost";
$user = "root";
$password = "";
$dbName = "loginsystem";

$conn =mysqli_connect($server, $user, $password, $dbName);

if(!$conn){
    die("Connection failed:". mysqli_connect_error());
}