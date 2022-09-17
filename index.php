

<!DOCTYPE HTML>
<html>
<body>

  <?php
  $search_array = array('first' => 1, 'second' => 4);
  if (array_key_exists('first', $search_array)) {
      echo "The 'first' element is in the array";
  }
  ?>

<form action="form_process.php" method="post">
Name: <input type="text" name="name" placeholder="Enter username"><br>
E-mail: <input type="text" name="email" placeholder="Enter email"><br>
<input type="submit" name="submit">
</form>



</body>
</html>
