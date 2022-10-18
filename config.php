<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kathdb";


$conn = mysqli_connect("localhost", "root", "", "kathdb");

// if($conn->connect_error){
//  die("connection failed". $conn->connect_error);
// }
// $conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
// echo "Connected successfully";