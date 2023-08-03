<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if(isset($_COOKIE['user'])){
    $username = $_COOKIE['user'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>
    <div class="container">
        <?php
        if (isset($username)) {
            echo "<h2>Hello, $username!</h2>";
        }
        ?>
        <p>Welcome to the home page.</p>
    </div>
</body>
</html>
