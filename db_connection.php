<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "muranga_db";

//connect to the database
$connection = mysqli_connect($host,$user,$password,$dbName);
//check if the connection failed to stop any further processes
if (!isset($connection)){
    die("DB connection failed");
}