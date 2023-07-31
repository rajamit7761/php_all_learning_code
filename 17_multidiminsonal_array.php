<?php

// ** creat a 2 dimdention array 
$multidim = array(
                     array(2,3,5,4),
                     array(4,5,6,9),
                     array(8,9,1,7));
// echo var_dump($multidim); //verdump ke madad se run 
//echo $multidim[0][3].'<br>'; /*fast wala [0]1st array ko donot karta hao aur uske bad wala columb[] me likha hua digit 
                 /* ko print karta hai, again esi type se  jab 2nd & 3rd  multidim ko jab print karna hai to
                [1] and [2] donot karenge hai    aur aage wala ko [] me 0,1,2,3 de-de kr print karenge.*/
//echo $multidim[1][2] .'<br>';
//echo $multidim[2][3].'<br>';

//**printing the contant of a 2 dimension array (single for loop used) */

// for ($i=0; $i < count($multidim); $i++) {  //for loop use
//     echo ver_dump($multidim[$i]);
//     echo "<br>";
//  }
 // multidim arrayS
$multidim1 = count($multidim);
$multidim2 = count($multidim[0]);

for ($i=0; $i < $multidim1; $i++) {      //for loop 1st leven used
   for ($j=0; $j < $multidim2 ; $j++) {                  // for loop 2nd level used
    echo $multidim[$i][$j];
    echo " ";
   }   
   echo"<br>";
  }                     

  
?>

