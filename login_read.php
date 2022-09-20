<?php


   $connection = mysqli_connect('localhost', 'root', '', 'login');

   if($connection) {
     echo "we are connected";
   } else {
     die("database connection failed");
   }
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

<?php
while($row = mysqli_fetch_assoc($result)) {
print_r($row);

}
?>


    </div>

  </div>




</body>
</html>
