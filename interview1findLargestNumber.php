<?php
function findLargestNumber($numbers){
    $largestNumber = null ;
    foreach ($numbers as $number){
       
            if ($largestNumber === null|| $number > $largestNumber){
                $largestNumber = $number;
            }
        }
    
    return $largestNumber;
}
$input = [9,2,7,4,1,5,8,3,6];
$output = findLargestNumber($input);
echo $output;

?>



// function findLargestNumber($numbers) {
//     $largest = null;

//     foreach ($numbers as $number) {
//         if ($largest === null || $number > $largest) {
//             $largest = $number;
//         }
//     }

//     return $largest;
// }


// $input = [9, 2, 7, 4, 1, 5,8,3,6];
// $output = findLargestNumber($input);
// echo $output; 

?>
