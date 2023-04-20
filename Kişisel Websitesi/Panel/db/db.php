<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mordulu";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_errno) {
  die("Connection Eror " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>