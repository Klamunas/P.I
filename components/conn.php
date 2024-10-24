<?php
$servername = 'localhost';
$database = 'test';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
  die('connection falied' . mysqli_connect_error()); 
}else{
  echo'your connection has be established whith success';
}