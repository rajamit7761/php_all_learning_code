<?php
//connection to the database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "amit1";
//create a connection
$conn = mysqli_connect($servername , $username , $password, $database);

//Die if connection was not successful 
if(!$conn){
    die("sorry we failed:". mysql_connect_error());
}
else{
echo "connection was successful";
}
?>