<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact us</title>
</head>
  <body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST["name"];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";
    $conn = mysqli_connect($servername, $username, $password, $database);
             
    if (!$conn){
        die("Sorry, we failed: " . mysqli_connect_error());
    } else {
        echo "Connection was successful.";
      //sql query to be executed
        $sql = "INSERT INTO `contacts` (`name`, `email`, `concen`, `dt`)  VALUES ('$name', '$email', '$desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);
    }
                
    if ($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Holy Success!</strong> Your entry has been submitted successfully!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    } else {
        echo "The record has not been inserted successfully because of this error: " . mysqli_error($conn);
    }
    ?>
    
    <h1>Contact Us Form</h1>
    <div class="container">
      <form action="\PHP2\24_form.php" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
          <label for="desc">Description</label>
          <textarea class="form-control" name="desc" id="desc" cols="50" rows="5"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>
