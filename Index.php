<?php
require_once 'car.php';
require_once 'bicycle.php';

$car = new Car('red', 'diesel', 4);
$bike = new Bicycle('blue', 2);
$bike->setCurrentSpeed(50);

echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';

echo $bike->brake();
var_dump($bike);
?>