<?php
//fgetc() & fgets read

$fpter = fopen("myfile.txt", "r");
// echo fgets($fpter); //fgets ak line ko read karta hai file me se 
// echo fgets($fpter);
// echo fgets($fpter);
// echo var_dump(fgets($fpter));
/*
//  reading a filr line by line
while($a= fgets($fpter)){
   echo $a ;
}
echo "end of the files has been reached";
*/
//echo fgetc($fpter);
/*
//  reading a filr character by character
while($a= fgetc($fpter)){
    echo $a ;
   // break;
 }
 echo "end of the files has been reached";
 */

 //write a program which reads the contant of a file until .has been encountered
 while($a = fgetc($fpter)){
    echo $a;
   if($a == "."){  // $a=="." fullstop tak kiye hai wahi tak print karega yadi
     
       // if($a == "this"){  //$a=="this" this tak hi  print karega 
            break;
    }
 }
 fclose($fpter);
?>