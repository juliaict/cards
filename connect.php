<?php
function connect_db() {
 $servername = "localhost";
 $username = "julia";
 $password = "password";
 $dbname = "julia"
 // Create connection

 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

