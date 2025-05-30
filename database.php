<?php
$servername = "localhost"; // Change if your server is different
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (empty by default)
$dbname = "insurance_system"; // Make sure this matches your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
