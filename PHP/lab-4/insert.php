<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $receiveEmails = isset($_POST['receive_emails']) ? 1 : 0;

    $query = "INSERT INTO users (name, email, gender, receive_emails)
              VALUES ('$name', '$email', '$gender', $receiveEmails)";

    if (mysqli_query($conn, $query)) {
        echo "User registered successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header("Location: index.php");
}
?>
