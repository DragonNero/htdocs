<?php

$connection = mysqli_connect('localhost', 'root', '', 'login');

if($connection) {
  echo "we are connected";
} else {
  die("database connection failed");
}

 ?>
