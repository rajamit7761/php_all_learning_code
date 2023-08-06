<?php
//fopen(),fread & fclose() Reads

//fptr=file pointer
//r = file read
$fptr = fopen("myfile.txt" , "r");
//echo ver_dump( $fptr);

//error chack statement if&die used
if(!$fptr){
    die ("Unabe to open this file.please enter a vailed file name");
}
//word count latter show 
//10 = jitna word padhna chahte hai utna number dal sakte hai 
$content = fread($fptr, 10);
echo $content;

//yadi file me kitne cheraters hai sabhi ko read karna hai  to used code 
//total cheracters read  in file text
$coutent = fread($fptr, filesize("myfile.txt"));
//file close karne ke liye 
  fclose($fptr);
  echo $coutent;


?>