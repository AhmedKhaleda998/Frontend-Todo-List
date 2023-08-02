<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>    
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        
        .navbar-button {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .navbar-button:hover {
            background-color: #555;
        }
        
        h1 {
            margin-bottom: 20px;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #ddd;
        }
        
        td > a {
            margin-right: 10px;
            text-decoration: none;
            color: #fff; /* Change the text color */
            border: 1px solid #ccc;
            padding: 5px 10px;
            border-radius: 3px;
            transition: background-color 0.3s, color 0.3s;
            background-color: #2ecc71;
        }

        td > a:hover {
            background-color: #27ae60;
        }
        
        .view {
            background-color: #007bff; 
        }

        .view:hover {
            background-color: #0056b3;; 
        }

        .delete {
            background-color: #D4403A; 
        }

        .delete:hover {
            background-color: #A72925;; 
        }

    </style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-button" href="index.php">View Users</a>
        <a class="navbar-button" href="register.php">Register User</a>
    </nav>
    <div class="container">
        <h1>View Users</h1>
        <?php
        include 'db.php';

        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);

        echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Receive Emails</th>
                <th>Actions</th>
            </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['gender']}</td>
                    <td>";
            echo $row['receive_emails'] ? 'Yes' : 'No';
            echo "</td>
                    <td>
                        <a class='view' href='view.php?id={$row['id']}'>View</a>
                        <a class='edit' href='edit.php?id={$row['id']}'>Update</a>
                        <a class='delete' href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                </tr>";
        }

        echo "</table>";

        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
