<?php
$numbers = array(9, 2, 7, 4, 1, 5, 8, 3, 6);

// Find the largest number
$largest = $numbers[0];
foreach ($numbers as $number) {
    if ($number > $largest) {
        $largest = $number;
    }
}

// Find the smallest number
$smallest = $numbers[0];
foreach ($numbers as $number) {
    if ($number < $smallest) {
        $smallest = $number;
    }
}

// Output the results
echo "Largest number: " . $largest . '<br>';
echo "Smallest number: " . $smallest . '<br>';
?>
