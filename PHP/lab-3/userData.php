<!DOCTYPE html>
<html>

<head>
    <title>Student Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr.Science {
            color: red;
        }

        tr:hover {
            background-color: #f2f2f2;
            color: black;
        }

        tr.Science:hover {
            background-color: #ff7f7f;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php
    $students = [
        ['name' => 'Ahmed', 'email' => 'ahmed@test.com', 'status' => 'CS'],
        ['name' => 'Mohamed', 'email' => 'mohamed@test.com', 'status' => 'Science'],
        ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'Science'],
        ['name' => 'Ali', 'email' => 'ali@test.com', 'status' => 'CS'],
        ['name' => 'Ramy', 'email' => 'ramy@test.com', 'status' => 'Science'],
    ];
    ?>

    <h2>Student Table</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) : ?>
                <tr <?php if ($student['status'] === 'Science') echo 'class="Science"'; ?>>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo htmlspecialchars($student['email']); ?></td>
                    <td><?php echo htmlspecialchars($student['status']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
