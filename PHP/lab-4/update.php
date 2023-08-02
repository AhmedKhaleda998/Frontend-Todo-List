<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $receiveEmails = isset($_POST['receive_emails']) ? 1 : 0;

    $query = "UPDATE users SET name='$name', email='$email', gender='$gender', receive_emails=$receiveEmails WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        echo "User updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

header("Location: index.php");
exit();
?>
