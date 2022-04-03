<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    public function __construct()
 {
     $this->nbLane = 1;
     $this->maxSpeed = 10;
 }

 public function addVehicle(Vehicle $board): void
 {
    if(($board instanceof Skateboard) || ($board instanceof Bicycle))
    {
        $this->setCurrentVehicles($board);
    }
    else{
        $this;
    }
     
 }

    
}