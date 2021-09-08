<?php
$servername = "sql211.epizy.com";
$username = "epiz_28912715";
$password = "AriSmrd007";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>