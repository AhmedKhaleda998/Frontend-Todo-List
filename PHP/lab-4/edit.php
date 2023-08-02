<!DOCTYPE html>
<html>
<head>
    <title>Edit User Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <a class="navbar-button" href="index.php">View Users</a>
        <a class="navbar-button" href="register.php">Register User</a>
    </nav>
    <div class="container">
        <?php
        include 'db.php';

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = "SELECT * FROM users WHERE id=$id";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $name = $row['name'];
                $email = $row['email'];
                $gender = $row['gender'];
                $receiveEmails = $row['receive_emails'];
            } else {
                echo "User not found.";
                exit();
            }
        } else {
            echo "Invalid request.";
            exit();
        }
        ?>

        <h1>Edit User Data</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>" required><br>
            
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required><br>
            
            <div class="beside">
                <label class="label-radio">Gender:</label>
                <p class="label-radio">Male</p>
                <input type="radio" name="gender" value="Male" <?php if ($gender === 'Male') echo 'checked'; ?> required>
                <p class="label-radio">Female</p>
                <input type="radio" name="gender" value="Female" <?php if ($gender === 'Female') echo 'checked'; ?> required>
            </div>
            <br>
            <div class="beside">
                <label class="label">Receive Emails:</label>
                <input type="checkbox" name="receive_emails" value="1" <?php if ($receiveEmails == 1) echo 'checked'; ?>><br>
            </div>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
