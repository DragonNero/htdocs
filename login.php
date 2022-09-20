<?php

if(isset($_POST["submit"])) {
   $username = $_POST["username"];
   $password = $_POST["password"];

   $connection = mysqli_connect('localhost', 'root', '', 'login');

   if($connection) {
     echo "we are connected";
   } else {
     die("database connection failed");
   }
//
//    if ($username && $password) {
//      echo $username;
//      echo $password;
//    } else {
//      echo "please fill your password and username";
//    }
}

?>


<!DOCTYPE HTML>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="col-sm-6">
      <form class="" action="login.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <br>
          <input type="text" name="username" value="" class="form-control">

        </div>
        <br>
        <div class="form-group">
          <label for="password">Password</label>
          <br>
          <input type="text" name="password" value="" class="password">

        </div>
        <br>

        <input class="btn btn-primary" type="submit" name="submit" value="Submit">

      </form>

    </div>

  </div>




</body>
</html>
