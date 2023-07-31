<?php
$associativeArray = array(
    "Sara" => "31",
    "John" => "41",
    "Walaa" => "39",
    "Ramy" => "40"
);

echo "<h2>Original array:</h2>";
print_r($associativeArray);

asort($associativeArray);

echo "<h2>Ascending order sort by value:</h2>";
print_r($associativeArray);

ksort($associativeArray);

echo "<h2>Ascending order sort by key:</h2>";
print_r($associativeArray);

arsort($associativeArray);

echo "<h2>Descending order sort by value:</h2>";
print_r($associativeArray);

krsort($associativeArray);

echo "<h2>Descending order sort by key:</h2>";
print_r($associativeArray);
?>
