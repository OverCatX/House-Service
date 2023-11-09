<?php
session_start();

$host = "localhost";

$username = "root";

$password = "";

$table = "service_db";

$connect = mysqli_connect($host,$username,$password,$table);

if(!$connect){

    die("Fail to connect db");

}

?>