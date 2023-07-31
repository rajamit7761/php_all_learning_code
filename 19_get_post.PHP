
<!doctype html>
<html lang="en">

  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>get and post</title>
  </head>
  <body>
  

  <?php
       if ($_SERVER['REQUEST_METHOD'] == 'POST'){        //$_POST ko super globel bolte hai ye post perameter pr set karte hai
           $email = $_POST['email'];
           $password = $_POST['pass'];
           echo '<div class="alert alert-SUCCESS alert-dismissible fade show" role="alert">
           <strong>Holy Success!</strong> Your email'. $email. 'and password '.$password .'has been submitted successfully.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
}

          //submit these to a database
 
?>
    
    <h1>please enter your emailand password</h1>
    <div class = "container">
    <form action = "/PHP2/19_get_post.php" ,method = "post>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name = "email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

  
</form>
    </div>
  </body>
</html>