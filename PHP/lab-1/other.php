<?php
// Define website name constant
define('WEBSITE_NAME', 'My Website');

// Server information
$server_name = $_SERVER['SERVER_NAME'];
$server_addr = $_SERVER['SERVER_ADDR'];
$server_port = $_SERVER['SERVER_PORT'];
$filename = $_SERVER['SCRIPT_FILENAME'];
$path = $_SERVER['SCRIPT_NAME'];

// Age switch statement
$age = 10;

switch ($age) {
  case $age < 5:
    $age_msg = 'Stay at home';
    break;
  case 5:
    $age_msg = 'Go to Kindergarten';
    break;
  case ($age >= 6 && $age <= 12):
    $age_msg = 'Go to grade: ' . $age - 5;
    break;
  default:
    $age_msg = 'Go to work';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
</head>
<body>
	<h1><?php echo WEBSITE_NAME; ?></h1>

	<p>Server name: <?php echo $server_name; ?></p>
	<p>Server address: <?php echo $server_addr; ?></p>
	<p>Server port: <?php echo $server_port; ?></p>
	<p>Filename: <?php echo $filename; ?></p>
	<p>Path: <?php echo $path; ?></p>

	<p>Age message: <?php echo $age_msg; ?></p>
</body>
</html>