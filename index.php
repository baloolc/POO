<?php
require_once 'Vehicle.php';
require 'car.php';
require 'bicycle.php';
require 'van.php';
require 'HighWay.php';
require 'MotorWay.php';
require 'Skateboard.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';


$car = new Car('red', 4 , 'fuel', 4);
$bike = new Bicycle('blue', 1, 2);
$van = new Van('blue', 2, 'diesel', 50, 6 );
$board = new Skateboard('yellow', 0, 4);
$a10 = new MotorWay();
$d12 = new ResidentialWay();
$bourgogne = new PedestrianWay();
$a10->addVehicle($car);
$a10->addVehicle($bike);
$a10->addVehicle($van);
$a10->addVehicle($board);
$d12->addVehicle($car);
$d12->addVehicle($van);
$d12->addVehicle($bike);
$d12->addVehicle($board);
$bourgogne->addVehicle($car);
$bourgogne->addVehicle($van);
$bourgogne->addVehicle($bike);
$bourgogne->addVehicle($board);



$bike->setCurrentSpeed(50);

echo $bike->forward();
echo $car->forward();
echo $van->forward();

var_dump($a10);
var_dump($d12);
var_dump($bourgogne);
?>