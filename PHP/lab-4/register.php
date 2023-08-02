<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <a class="navbar-button" href="index.php">View Users</a>
        <a class="navbar-button" href="register.php">Register User</a>
    </nav>
    <div class="container">
        <h1>User Registration</h1>
        <form action="insert.php" method="post">
            <label>Name:</label>
            <input type="text" name="name" required><br>
            
            <label>Email:</label>
            <input type="email" name="email" required><br>
            
            <div class="beside">
                <label class="label-radio ">Gender:</label>
                <p class="label-radio ">Male</p>
                <input type="radio" name="gender" value="Male" required>
                <p class="label-radio ">Female</p>
                <input type="radio" name="gender" value="Female" required>
            </div>
            <br>
            
            <div class="beside">
                <label class="label">Receive Emails:</label>
                <input type="checkbox" name="receive_emails" value="1">
            </div>
            <br>
            
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
