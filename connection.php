<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'uts3suplier';

$conn= mysqli_connect($server, $username, $password, $database);
if(!$conn){
    echo 'connection failed';
}else{
    echo 'connection successful';
}
?>