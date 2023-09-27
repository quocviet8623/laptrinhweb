<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "mysql_web.sql";
$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_error()){
    echo "Connection Fail: ".mysqli_connect_error();exit;
}