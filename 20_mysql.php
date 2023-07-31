<?php
echo 'welcome to the stage where we are ready to get connected to a database <br>';
/*
ways to connect to a mysql database
1.mysqli extenction
2.pdo
*/
//connection to the database 
$servername = "localhost";
$username = "root";
$password = "";

//create a connection object
$conn = mysqli_connect($servername , $username , $password);
if(!$conn){
    die("sorry we failed:". mysql_connect_error());
}
else{
echo "connection was successful";
}
?>