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
}else{
echo "connection was successful";
}
//sql query to be executed
$sql = "DELETE FROM `php_mytable` WHERE `destination` = 'Russia' LIMIT 2";
$result = mysqli_query($conn, $sql);

//effected rows dekhne ke lire code used
 $aff = mysqli_affected_rows($conn);
 echo "<br>number of affected rows: $aff <br>";
 //chack conduction use ke code if & else 
if($result){
    echo "delete successfully";
}else{
    $error = mysqli_error($conn);
        echo "not delete successfuiiy due to this error -->$error";
}


?>