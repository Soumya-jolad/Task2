<?php
session_start(); // Start session for user authentication

// Database credentials
$host = "localhost";
$user = "root";
$password = "";
$dbname = "medication_db"; // Ensure this matches your actual database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>