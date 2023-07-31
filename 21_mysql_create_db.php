<?php
//connection to the database 
$servername = "localhost";
$username = "root";
$password = "";

//create a connection
$conn = mysqli_connect($servername , $username , $password);

if(!$conn){
    die("sorry we failed:". mysql_connect_error());
}
else{
echo "connection was successful";
}
 
//create a new database/db
$sql = "CREATE DATABASE Amit3";
$result = mysqli_query( $conn, $sql);

//check for the data base creation success
if($result ){
    echo "the data base was created successfully";  
}
else {
    echo "the data base was not created successfully because of this error".mysquli_error($conn );
}


?>