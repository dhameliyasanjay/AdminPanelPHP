<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "php_new_project";

 session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $databaseName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

function dd($data){
  echo"<pre>";
  print_r($data);
  die();
} 
?>