<?php

// $a = array (1,2,3,4,5,6,7,8,9,10);
//   echo $a[0];        //index number print 

function sumPrimeNumbers($numbers) {
  $sum = 0;

  foreach ($numbers as $number) {
      if (isPrime($number)) { // Check if the number is prime
          $sum += $number; // Add the prime number to the sum
      }
  }

  return $sum;
}

function isPrime($number) {
  if ($number < 2) {
      return false;
  }

  for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i == 0) {
          return false;
      }
  }

  return true;
}

// Example usage
$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$output = sumPrimeNumbers($input);
echo $output; // Output: 17 (2 + 3 + 5 + 7)

?>