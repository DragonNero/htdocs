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

  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function MoveWheels() {
    // echo "Moving wheels";
    $this->wheels = 10;

  }
}


$bmw = new Car();
$bmw->MoveWheels();

echo $bmw->wheels;


// if(method_exists("Car", "MoveWheels")) {
//   echo "The method exists";
// } else {
//   echo "No";
// }

 ?>
