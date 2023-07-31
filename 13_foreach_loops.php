<?php
echo "weicome to the word of foreach loops <br>";
$arr = array("banana","apple","harpic","bread");

// for ($i=0; $i < count($arr);$i++){
// echo $arr[$i];
// echo "<br>";
// }

//beter way to do this - foreach loops
foreach ($arr as  $value) {
    echo "$value <br>";
}

?>