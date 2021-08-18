<?php

$servername = "localhost";
$username = "register";
$password = "1234";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
//...
?>