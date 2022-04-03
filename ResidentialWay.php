<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    public function __construct()
    {
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }
   
    public function addVehicle(Vehicle $anyVehicle): void
    {
        $this->setCurrentVehicles($anyVehicle); 
    }


}