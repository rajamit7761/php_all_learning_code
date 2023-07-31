<?php
echo "welcome to associative arrys in php"; 
//these are celled index array 
$a = array('this ','that ','what ');
echo $a[0]. "<br>";
echo $a[1]. "<br>";
echo $a[2]."<br>";

//associative arrays
$favcol = array('red' =>'green', 
   'blue'=>'white',
    'amit'=> 'brown');
     foreach ($favcol as $key => $value) {

   echo "<br> favorite color of  $key is $value";
 }

   
     //  echo $favcol['amit'];
  //  echo '<br>';
      // echo $favcol['red'];
       
?>