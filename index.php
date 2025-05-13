<?php
//  $hostname ="localhost";
//  $username ="theinthanzaw";
//  $password ="pinkpanther";
//  $database ="ecommerce";
//    $conn = mysqli_connect($hostname,$username,$password,$database);

$host = "switchback.proxy.rlwy.net"; 
$user = "root";
$password = "TvayHUVuqQdhsufGAWzmiMmaDsIsIlEP";
$db = "railway";
$port = 57482;

$conn = new mysqli($host, $user, $password, $db, $port);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected successfully!";
}


?>
