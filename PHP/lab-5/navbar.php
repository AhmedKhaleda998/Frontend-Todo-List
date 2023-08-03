<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <ul class="navbar">
        <?php
        if (isset($_SESSION['user_id'])) {
            echo '<li class="nav-item"><a href="home.php">Home</a></li>';
            echo '<li class="nav-item"><a href="logout.php">Logout</a></li>';
        } else {
            echo '<li class="nav-item"><a href="register.php">Register</a></li>';
            echo '<li class="nav-item"><a href="login.php">Login</a></li>';
        }
        ?>
    </ul>
</body>
</html>
