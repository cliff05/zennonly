<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'profile_zenn';
$connect = mysqli_connect($host, $username, $password, $db_name);

if (!$connect){
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from zenn";
$result = $connect->query($query);