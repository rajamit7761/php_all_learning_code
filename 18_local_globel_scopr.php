<?php
echo "welcome to scope and local/globel vars in php <br>";
//narmal print
$a = 95; // Global variable
$b = 88;
//echo $a; 

// valuefunction used then after

function printvalue(){
    $a = 94;      //local veriable
    global $a, $b; //give me the access to this global variable 
    $a = 123;
    $b = 321;
    echo "the value of your variable is $ <br>";
    echo "the value of your veriable a is $a ans b is $b <br>";
}
echo $a;
printvalue();
echo "the value of your veriable a is $a ans b is $b <br>";
 // echo var_dump($GLOBALS); //PRINTS ALL the globel veriables 
  echo var_dump($GLOBALS["a"]);  //single veriiable print
  echo var_dump($GLOBALS["b"]);   //single veriiable print
  //sabhi veriable ko print karne ke liye   [echo ver_dump($GLOBALS);]  KARTE HAI
?>
