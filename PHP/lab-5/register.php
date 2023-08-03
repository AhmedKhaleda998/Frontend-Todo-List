<?php
session_start();
include("db_config.php");

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
    mysqli_query($conn, $query);

    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('navbar.php'); ?>
    <div class="container">
        <h2>Registration</h2>
        <form method="post">
            Email: <input type="email" name="email" required><br>
            Username: <input type="text" name="username" required><br>
            Password: <input type="password" name="password" required><br>
            Confirm Password: <input type="password" name="confirm_password" required><br>
            <input type="submit" name="register" value="Register">
        </form>
    </div>
</body>
</html>
