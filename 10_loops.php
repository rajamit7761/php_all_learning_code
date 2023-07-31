<?php
 echo 'while loops in php . <br>';
// echo 1; echo'<br>';
// echo 2; echo'<br>';
// echo 3; echo'<br>';
// echo 4; echo'<br>';
// echo 5; echo'<br>';

/* 
while(condition){
    some line of code here;
}
*/ 

$i = 0;
while($i<10){         //loop ka use hamesa ak se jyada print karne ke liye karte hai
                    // jese ki, 1 se 200000 tak karna ho  print to use karenge
//echo $i ."<br>";
echo 'the value of i is ';
echo $i+1 ."<br>";
$i+=3;            //yaha pr jitna dalenge utna chor kr print hoga
}

$i = 0;
$x = 8;
while($i<105 && $x<60){         //loop ka use hamesa ak se jyada print karne ke liye karte hai
                    // jese ki, 1 se 200000 tak karna ho  print to use karenge
//echo $i ."<br>";
echo 'the value of i is ';
echo $i+1 ."<br>";
$i+=1; 
$x+=1;           //yaha pr jitna dalenge utna chor kr print hoga
}
?>