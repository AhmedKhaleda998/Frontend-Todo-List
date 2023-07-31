<?php
    $indexedArray = array(
        1 => 45,
        0 => 12,
        3 => 25,
        2 => 10
    );

    $sum = array_sum($indexedArray);
    $average = $sum / count($indexedArray);

    arsort($indexedArray);

    echo "<h2>Original Array:</h2>";
    print_r($indexedArray);

    echo "<h2>Sum:</h2>";
    echo $sum;

    echo "<h2>Average:</h2>";
    echo $average;

    echo "<h2>Sorted Array (Highest to Lowest):</h2>";
    print_r($indexedArray);
    ?>
