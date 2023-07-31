<?php
//INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'go to job', 'dddddd', current_timestamp());
   //connection to the database 
   $insert = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";
//create a connection
$conn = mysqli_connect($servername , $username , $password, $database);

//Die if connection was not successful 
if(!$conn){
    die("sorry we failed:". mysql_connect_error());
 }
 //echo $_SERVER['REQUEST_METHOD'];
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $title = $_POST["title"];
$description = $_POST["description"];


$sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
$result = mysqli_query($conn, $sql);

 //add a new mytable to the mytable table in the database
 if($result ){
   // echo "the record has been inserted  successfully <br>";  
   $insert=true;
}
else {
    echo "the record has not been inserted successfully because of this error".mysquli_error($conn );
}
 }
 //else{
//echo "connection was successful";
// }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS
     Link to css,javascript, and j queary -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
     <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
     
    
    <title>iNOTES</title>
    <script>


    </script>

  </head>
  <body>
   
  <!-- edit modal:- yadi edit/delete karne se pahle option aaye usi ko modal kahte hai-->
  
  <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">edit modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">iNOTES</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item Contact">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contact
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <?php
      if ($insert)
      echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong> Success!</strong> your note has been successfully.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
      </button>
    </div>";

      ?>
      <div class="container my-3">
        <h2>Add a Note</h2>
        <form action ="/php2/28_CRUD_index.php" method ="POST">
            <div class="mb-3">
              <label for="title" class="form-label">Note Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
        <div class="mb-3">
            <label for="floatingTextarea">Note Discription</label>
                <textarea class="form-control"  id="description" name="description" ></textarea>
                
              </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
          </form>
      </div>
      <div class="container m-4">
         <?php
        $sql = "SELECT * FROM `notes`";
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          
          // echo $row['sno'].".Title".$row['title']."desc is ".$row['description'];//ye sab string ko dought operaters se add kiye huye hai
          //    echo "<br>";
         } 
        ?> 
       <table class="table" id = "myTable">
  <thead>
       <th scope="col">s.no</th>
      <th scope="col">Title</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM `notes`";
       $result = mysqli_query($conn, $sql);
       $sno = 0;
        while($row = mysqli_fetch_assoc($result)){
          $sno = $sno+1;
          echo  ' <tr>
          <th scope="row">'. $sno.'</th>
          <td>'. $row['title'].'</td>
        <td>'. $row['description'].'</td>
           <td>  <a href="/edit">Edit</a>
           <a href="/del">Delete</td>
        </tr>';
          //echo $row['sno'].".Title".$row['title']."desc is ".$row['description'];//ye sab string ko dought operaters se add kiye huye hai
             //echo "<br>";
             //actions ke jagah edit & delet lane ke liye code use kare action ke jagah past kare
             //code:-  <a href=",/delete">Delete</a> </td>
        }
              ?> 
  
    
  </tbody>
</table>
      </div>
      <hr>     <!-- horizintal line ke liye used -->
      <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
       crossorigin="anonymous"></script>

       <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

       
     <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    
    <script>
     let table = new DataTable('#myTable');
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  </body>
</html>