<?php

class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;


    function MoveWheels(){

      $this->wheels = 10;


    }
}


function showProperty(){

  echo $this->hood;
}

$bmw = new Car();
echo $bmw->showProperty();



?>
