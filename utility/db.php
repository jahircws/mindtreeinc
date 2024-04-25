<?php
// Database configuration
$servername = "localhost"; // Replace 'localhost' with your MySQL server address
$username = "root"; // Replace 'username' with your MySQL username
$password = ""; // Replace 'password' with your MySQL password
$database = "acevtcom_course"; // Replace 'database' with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>