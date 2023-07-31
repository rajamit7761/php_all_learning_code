<?php
function sumeEvenNumber($numbers ){
    $sum = 0;
    foreach($numbers as $number){
        if ($number %2 == 0){
            $sum +=$number;
        }
    }return $sum;
}
$input = [1,2,3,4,5,6,7,8,9,10];
$output = sumeEvenNumber($input);
echo $output;

?>
