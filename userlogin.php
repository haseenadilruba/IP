<?php
session_start();
include('db.php'); // Connects to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND role='user'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.html"); // Redirect to User Dashboard
        exit();
    } else {
        echo "<script>alert('Invalid email or password'); window.location.href='userlogin.html';</script>";
    }
}
?>
