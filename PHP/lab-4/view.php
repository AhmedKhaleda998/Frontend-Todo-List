<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body{
            text-align: center
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-button" href="index.php">View Users</a>
        <a class="navbar-button" href="register.php">Register User</a>
    </nav>
    <div class="container">
        <h1>User Details</h1>
        <?php
        include 'db.php';
        
        $id = $_GET['id'];
        
        $query = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        
        echo "<p><strong>Id:</strong> {$row['id']}</p>";
        echo "<p><strong>Name:</strong> {$row['name']}</p>";
        echo "<p><strong>Email:</strong> {$row['email']}</p>";
        echo "<p><strong>Gender:</strong> {$row['gender']}</p>";
        echo "<p><strong>Receive Emails:</strong> ";
        echo $row['receive_emails'] ? 'You will receive emails from us' : 'You won\'t receive emails from us';
        echo "</p>";
        
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
