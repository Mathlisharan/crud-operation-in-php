<?php
$servername = "localhost";
$username = "root";
$password = "";
$crudclass = 'crudclass';


$conn = mysqli_connect($servername, $username, $password, $crudclass);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
?>