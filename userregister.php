<?php
session_start();
include('db.php'); // Ensure this connects to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password hashing

    // Insert user data into the database
    $query = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', 'user')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('User registered successfully! Please login.'); window.location.href='userlogin.html';</script>";
    } else {
        echo "<script>alert('Error registering user: " . mysqli_error($conn) . "');</script>";
    }
}
?>
