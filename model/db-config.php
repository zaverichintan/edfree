<?php
$servername = "localhost";
$username = "Ed-Free";
$password = "password@me";
$dbname = "edfree";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>