<?php
function sumEvenNumber($numbers){
$sum = 0;
foreach($numbers as $number){
    if ($number % 2 ===0){
        $sum +=$number;
    }
}return $sum;
}
$input = [1,2,3,4,5,6,7,8,9,10];
$output = sumEvenNumber($input);
echo $output;
?>
<php
function sumOddNumbers($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number % 2 != 0) { // Check if the number is odd
            $sum += $number; // Add the odd number to the sum
        }
    }

    return $sum;
}

// Example usage
$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$output = sumOddNumbers($input);
echo $output; // Output: 25
?> 

