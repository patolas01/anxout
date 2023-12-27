<?php

$servername = "localhost"; // This is the default for Laragon
$username = "root"; // Default username, change if you set a different one
$password = "";
$dbname = "anxout_main";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>