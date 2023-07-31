<?php
$nme = "amit";
$income = 1236;
/* php data types 
1. String
2. Interger
3.float 
4. Boolean
5. Object
6. Array
7. Null
*/
// String - sequence of charactors 
$name = "amit";
$friend ='raju'; //single code and dobble code dono use kr sakte hai 
 echo "$name ka friend is $friend";

 // Integer  - Non decimal number 
 $incomr = 654;
 $debts = -759;
 echo"<br>";
 echo $income;
 echo $debts;

 //Floot 
 $incomr = 65.6;
 $debts = -71.9;
 echo"<br>";
 echo $income;
 echo $debts;
  //Boolean - can be eaather true and false
  $x = true;
  $is_frind =false ;
  echo "<br>";
  echo $x;
  echo $is_frind;
  //use vaedump function 
  $x = true;
  $is_frind =false ;
  echo "<br>";
  echo var_dump($x);
  echo "<br>";
  echo var_dump ($is_frind);

  //Object - Intances of classes 
  // Employee is a class --->amit can be one object 


  //Array("rohan","subham","skillf",larry )
  $friends = array("ram",'raja','tabbu','TANNU');
  ECHO var_dump($friends);
  echo"<br>";
  echo $friends[0];
  echo"<br>";
  echo $friends[1];
  echo"<br>";
  echo $friends[2];
  echo"<br>";
  echo $friends[3];
  echo"<br>";
  //echo $friends[4];

  //null - koi value nahi 
  $name=null;
 // echo $name;
  echo var_dump($name);




?>
