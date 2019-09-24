<?php
function connect_db() {
 $servername = "localhost";
 $username = "a1704569";
 $password = "tiHUav56z";
 $dbname = "a1704569"
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

