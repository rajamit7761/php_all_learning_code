<?php
//Start the session and get the data
session_start();

if(isset($_SESSION['username'])){

echo "Welcome " . $_SESSION['username'];
echo "<br> your favorite category is " . $_SESSION['favcat'] ;
echo "<br>";
}
else{
    echo "please login to continue";
}
?>