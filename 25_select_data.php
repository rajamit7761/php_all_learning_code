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
//sql query to be executed
$sql = "SELECT * FROM `php_mytable`";
$result = mysqli_query($conn, $sql);

//Find the number of records returned
  //echo mysqli_num_rows($result); ya,
  $num = mysqli_num_rows($result) ;
  echo  "<br>".$num ;
  echo" recods foun in the data base <br>";
  

  // Display the rows return by sql queryS
  if ($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo  var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo  var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo  var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo  var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo  var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo  var_dump($row);
    // echo "<br>";
    
    // $row = mysqli_fetch_assoc($result);
    // echo  var_dump($row);
    // echo "<br>";

    //we can featch in a batter way using the while loop 
    while($row = mysqli_fetch_assoc($result)){
      //  echo  var_dump($row);  //is ke badle string bhi used kar sakte hai
      echo $row['sno']." Hello". $row['name']. "welcome to ".$row['destination'];  //ye sab string ko dought operaters se add kiye huye hai
         echo "<br>";
    
  }
}
 
?>