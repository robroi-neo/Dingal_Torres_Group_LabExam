<?php
$host = "127.0.0.1";   // or "localhost"
$user = "root";        // Laragon default
$pass = "";            // Laragon default has no password
$db   = "um_db"; // the database we created

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>