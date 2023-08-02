<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        echo "User deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

header("Location: index.php");
exit();
?>
