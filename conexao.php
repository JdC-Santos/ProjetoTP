<?php
$server = "localhost";
$user = "root";
$password = "usbw";

// Create connection
$conn = new mysqli($server, $user, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
