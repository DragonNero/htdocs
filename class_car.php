<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>


<?php
class Car {

  function MoveWheels() {
    echo "Moving wheels";

  }
}

if(method_exists("Car", "MoveWheels")) {
  echo "The method exists";
} else {
  echo "No";
}

 ?>
