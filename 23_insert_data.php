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
//variables to be inserted into the table
$name = "vikrant";
$destination = "Russia";

//sql query to be executed
//$sql = "INSERT INTO `php_mytable` (`name`, `destination`) VALUES ('raja', 'mona')";//direct ase bhi insert kr sakte hai $name and $destination 
                                                                                    //nahi put karna hai yadi wo use karna hai to niche me
                                                                                    // jo $sql usi ko use kr banaya gaya hai 
$sql = "INSERT INTO `php_mytable` (`name`, `destination`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

 //add a new mytable to the mytable table in the database
 if($result ){
    echo "the record has been inserted  successfully <br>";  
}
else {
    echo "the record has not been inserted successfully because of this error".mysquli_error($conn );
}

?>