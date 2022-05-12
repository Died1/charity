<?php
date_default_timezone_set('Asia/Kolkata');
$servername = "109.106.246.201";
$username = "u224905841_charity";
$password = "Edd&3035";
$dbname = "u224905841_charity";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
