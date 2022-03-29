<?php
require_once 'Vehicle.php';
require 'car.php';
require 'bicycle.php';
require 'truck.php';

$car = new Car('red', 4 , 'fuel', 4);
$bike = new Bicycle('blue', 1, 2);
$truck = new Truck('blue', 2, 'diesel', 50, 6 );
$bike->setCurrentSpeed(50);

echo $bike->forward();
echo $car->forward();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';

echo $bike->brake();
var_dump($bike);

echo $truck->forward();

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake();

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed(). ' km/h' . '<br>';

echo '<br> vérification du chargement : ' . $truck->stock(50) . '<br>';

echo $truck->forward();

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake();

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed(). ' km/h' . '<br>';

echo '<br> vérification du chargement : ' . $truck->stock(0) . '<br>';

?>