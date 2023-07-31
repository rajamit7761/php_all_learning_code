<?php
//operators in php 
/* 1.Arithmatic operaters
   2.Assignments operators
   3.Comparsion operators
   4.Logical operators
*/

$a = 60;
$b = 2;
//1.Arithmatic operaters
echo 'for a + b , result is   ' . $a + $b . '<br>';
echo 'for a - b , result is   ' . $a - $b . '<br>';
echo 'for a * b , result is   ' . $a * $b . '<br>';
echo 'for a / b , result is   ' . $a / $b . '<br>';
echo 'for a % b , result is ' . $a % $b . '<br>';  //modula operators ye remender bata hai
echo 'for a ** b , result is   ' . $a ** $b . '<br>';  // exponention operators
 echo $a + $b . '<br>';

 //2.Assignments operators

$x = $a;
echo "for x, the value is ".$x.'<br>';
$a += 5; // += ka matlab value ke aage digit add ho jana 
echo "for a, the value is ".$a.'<br>';
$a -= 5; 
echo "for a, the value is ".$a.'<br>';
$a *= 5; 
echo "for a, the value is ".$a.'<br>';
$a /= 5; 
echo "for a, the value is ".$a.'<br>';
$a %= 7; // remender
echo "for a, the value is ".$a.'<br>';

// 3.Comparsion operators
$x = 3;
$y = 9;
echo 'for x == y, the result is '.($x == $y) . '<br>';
echo 'for x == y, the result is ';
echo var_dump($x == $y); 
 echo'<br>';
 echo 'for x > y, the result is ';
echo var_dump($x > $y); 
 echo'<br>';
 echo 'for x < y, the result is ';
echo var_dump($x < $y); 
 echo'<br>';
 echo 'for x <> y, the result is ';
echo var_dump($x <> $y); 
 echo'<br>';
 echo 'for x <= y, the result is ';
echo var_dump($x <= $y); 
 echo'<br>';
 echo 'for x = y, the result is ';
echo var_dump($x = $y); 
 echo'<br>';

// 4.Logical operators
$m = true;
$n = false;
echo 'for m and n , the result is ';
echo var_dump($m and $n);
echo '<br>';

echo 'for m or n , the result is ';
echo var_dump($m or $n);
echo '<br>';

echo 'for m && n , the result is ';
echo var_dump($m && $n);
echo '<br>';

echo 'for m || n , the result is ';
echo var_dump($m || $n);
echo '<br>';

echo 'for !m  , the result is ';
echo var_dump(!$m );
echo '<br>';
?>