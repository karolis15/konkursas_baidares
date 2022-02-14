<?php
$hostName = "localhost";
$userName = "karolis";
$password = "slaptazodis";
$databaseName = "baidares";
$conn = mysqli_connect("localhost", "karolis", "slaptazodis", "baidares");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>