<?php
//what is a session ? 
// ans:-used to manage infrmation accross different pages

//verify the user logen info
session_start();
$_SESSION['username'] = "AMIT77";
$_SESSION['favcat'] = "Bookes";
echo "we have save your session";
?>