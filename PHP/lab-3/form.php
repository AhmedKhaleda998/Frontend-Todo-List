<!DOCTYPE html>
<html>

<head>
    <title>Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea {
            width: 96%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        select {
            width: 96%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    $name = $email = $group = $class = $gender = "";
    $nameErr = $emailErr = $groupErr = $classErr = $genderErr = "";
    $selectedCourses = [];

    $courseOptions = array(
        "course1" => "Course 1",
        "course2" => "Course 2",
        "course3" => "Course 3"
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $group = filter_input(INPUT_POST, "group", FILTER_SANITIZE_STRING);
        $class = filter_input(INPUT_POST, "class", FILTER_SANITIZE_STRING);
        $gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_STRING);

        if (empty($name)) {
            $nameErr = "Name is required";
        }

        if (empty($email)) {
            $emailErr = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }

        if (empty($group)) {
            $groupErr = "Group is required";
        }

        if (empty($class)) {
            $classErr = "Class is required";
        }

        if (empty($gender)) {
            $genderErr = "Gender is required";
        }

        if (!empty($_POST["courses"])) {
            $selectedCourses = $_POST["courses"];
        }
    }
    ?>

    <h2>Form Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name"><span class="error">*</span> Name:</label>
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>">
        <span class="error"><?php echo $nameErr; ?></span>
        <br><br>

        <label for="email"><span class="error">*</span> Email:</label>
        <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br><br>

        <label for="group"><span class="error">*</span> Group:</label>
        <input type="text" name="group" id="group" value="<?php echo htmlspecialchars($group); ?>">
        <span class="error"><?php echo $groupErr; ?></span>
        <br><br>

        <label for="class"><span class="error">*</span> Class:</label>
        <textarea name="class" id="class" cols="30" rows="5"><?php echo htmlspecialchars($class); ?></textarea>
        <span class="error"><?php echo $classErr; ?></span>
        <br><br>

        <label for="gender"><span class="error">*</span> Gender:</label>
        <input type="radio" name="gender" id="male" value="male" <?php if ($gender === "male") echo "checked"; ?>>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female" <?php if ($gender === "female") echo "checked"; ?>>
        <label for="female">Female</label>

        <span class="error"><?php echo $genderErr; ?></span>
        <br><br>

        <label for="courses">Selected Courses:</label>
        <select name="courses[]" id="courses" multiple>
            <?php foreach ($courseOptions as $value => $label): ?>
                <option value="<?php echo $value; ?>" <?php if (in_array($value, $selectedCourses)) echo "selected"; ?>>
                    <?php echo $label; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr) && empty($groupErr) && empty($classErr) && empty($genderErr)): ?>
        <h2>Form Data</h2>
        <p>Name: <?php echo htmlspecialchars($name); ?></p>
        <p>Email: <?php echo htmlspecialchars($email); ?></p>
        <p>Group: <?php echo htmlspecialchars($group); ?></p>
        <p>Class: <?php echo htmlspecialchars($class); ?></p>
        <p>Gender: <?php echo htmlspecialchars($gender); ?></p>
        <p>Selected Courses:
            <?php
            if (!empty($selectedCourses)) {
                foreach ($selectedCourses as $course) {
                    echo htmlspecialchars($courseOptions[$course]) . ", ";
                }
            } else {
                echo "None";
            }
            ?>
        </p>
        <p>Thank you for submitting the form!</p>
    <?php endif; ?>
</body>

</html>
