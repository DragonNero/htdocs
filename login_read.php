<?php
  include "db.php";


   $query = "SELECT * FROM users";

   $result = mysqli_query($connection, $query);

   if(!$result) {
     die("query failed");
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
          <input type="text" name="username" value="" class="form-control">

        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" name="password" value="" class="password">

        </div>
        <div class="form-group">
          <select name="" id="">
          <option value="">1</option>

        </div>
        <div class="">
          <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
        </div>



      </form>

<?php
while($row = mysqli_fetch_assoc($result)) {

  ?>
  <pre>

  </pre>

  <?php
print_r($row);
  ?>
  <pre>

  </pre>
<?php
}
?>


    </div>

  </div>




</body>
</html>
