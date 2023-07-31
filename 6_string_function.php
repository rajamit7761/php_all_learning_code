<?php
$name = 'amit raj';
echo $name;
echo "<br>";
echo strlen($name);//string length ,to string connectng ues in . | such as (raja.mohan)
echo "<br>";
echo 'the length of ' . "my string is    " .strlen($name);//three string add
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);//string reverce ya ulta word karne ke liye 
echo "<br>";
echo strpos($name, 'ra'); //string ke under kisi word ko serch karna
echo "<br>";
echo str_replace('amit' , 'ganesh',$name); //replace string
echo "<br>";
echo str_repeat($name,5);
echo "<br>";
echo '<pre> ';//ye space ko hatane ka kam karta hai
echo rtrim('       this is a good boy    '); //rtrim ka matlab Right side ka space hatega
echo "<br>";
echo ltrim('      this is a good boy    ');  //ltrim ka matlab Left side ka space hatega
echo '</pre> ';
?>