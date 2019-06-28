<?php
$server = "localhost";
$user = "root";
$password = "usbw";
$db = "projetotp";

// Create connection
$conn = new mysqli($server, $user, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
