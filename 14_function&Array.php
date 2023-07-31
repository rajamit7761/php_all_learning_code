<?php
echo "welcome to function tutorial <br>";
function processMarks($marksArry){
    $sum = 0;
    foreach ( $marksArry as $value){
        $sum += $value;
    }
    return $sum;

}

// $rohan = [23,56,89,45,78];
// $sumMarks =processMarks($rohan);
// $amit = [89,98,56,99,75];
// $sumMarksamit = processMarks($amit);
// echo "total marks schored by rohan out of 500 is $sumMarks  <br> ";
// echo "total marks schored by amit out of 500 is $sumMarksamit <br>  ";

// function avgMarks($marksArry){
//     $sum = 0;
//     $i = 1;
//     foreach ( $marksArry as $value){
//         $sum += $value;
//         $i++;
//     }
//     return $sum /$i;
//}
$amit = [ 1,2,3,4,5,6,7,8,9,10];
$sumMarksamit = sumEvenNumbers($amit);
echo "total avg marks schored by rohan out of 500 is $sumMarks <br> ";
$rohan = [23,56,89,45,78];
$sumMarks = avgMarks($rohan);
echo "total avg marks schored by amit out of 500 is $sumMarksamit <br> "; 
?>