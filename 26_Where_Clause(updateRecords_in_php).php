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
$sql = "SELECT * FROM `php_mytable` WHERE `destination`='bihar'";
$result = mysqli_query($conn, $sql);

//Find the number of records returned
  //echo mysqli_num_rows($result); ya,
  $num = mysqli_num_rows($result) ;
  echo  "<br>".$num ;
  echo" recods foun in the data base <br>";

//   if ($num>0){
//   while($row = mysqli_fetch_assoc($result)){
//     //  echo  var_dump($row);  //is ke badle string bhi used kar sakte hai
//     echo $row['sno']." Hello ". $row['name']. " welcome to ".$row['destination'];  //ye sab string ko dought operaters se add kiye huye hai
//        echo "<br>";
//   }
// }

    //Using of WHERE Clause  to fetch data from the database
             //  serial number me lane ke liye ye code used iskp where clause kahte hai
    $no=1;   
  if ($num>0){
    while($row = mysqli_fetch_assoc($result)){
      //  echo  var_dump($row);  //is ke badle string bhi used kar sakte hai
      echo $no." Hello ". $row['name']. " welcome to ".$row['destination'];  //ye sab string ko dought operaters se add kiye huye hai
         echo "<br>";
         $no = $no+1;
  
}
}

  //Using of WHERE Clause to update
  //update recods update

 $sql = "UPDATE `php_mytable` SET `name` = 'satish' WHERE `php_mytable`.`sno` = 4";
 $sql = "UPDATE `php_mytable` SET `name` = 'suraj' WHERE `php_mytable`.`sno` = 5";
 $sql = "UPDATE `php_mytable` SET `name` = 'fromsuraj' WHERE `destination` ='bihar'";
 $result = mysqli_query($conn, $sql);
 echo var_dump($result);
 //effected rows
 $aff = mysqli_affected_rows($conn);
 echo "<br>number of affected rows: $aff <br>";
 if($result){
    echo "we uptate the recods successfully";
 }else{
    echo "we could not update the recods successfully";
 }
?>