<?php

$host = "localhost";
$dbname = "shoe_website";
$username = "root";
$password = "";

// Create the connection
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

return $conn;
?>