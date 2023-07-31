<?php
//connection to the database 
$servername = "localhost";
$username = "root";
$password = "";//create a connection
//$conn = mysqli_connect($servername , $username , $password, $database);

//Die if connection was not successful 
if($conn){
    die("sorry we failed". mysql_connect_error());
}
else{
echo "connection was successful";
}
$database = "amit6";

//create a connection
$conn = mysqli_connect($servername , $username , $password, $database);

//Die if connection was not successful 
if(!$conn){
    die("sorry we failed:". mysql_connect_error());
}
else{
echo "connection was successful";
}
//create a table in the database/db
$sql = "CREATE TABLE `php_mytable` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , 
`destination` INT(20) NOT NULL , PRIMARY KEY (`sno`))";
 
 $result = mysqli_query($conn, $sql);
 
 //chack for the table creation
 if($result ){
    echo "the table was created successfully";  
}
else {
    echo "the table was not created successfully because of this error".mysquli_error($conn );
}





?>