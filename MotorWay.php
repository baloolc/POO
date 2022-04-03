<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
 public function __construct()
 {
     $this->nbLane = 4;
     $this->maxSpeed = 130;
 }

 public function addVehicle(Vehicle $car): void
 {
    if(($car instanceof Car) || ($car instanceof Van))
    {
        $this->setCurrentVehicles($car);
    }
    else{
        $this;
    }
     
 }


    
}
