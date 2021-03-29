<?php

// index.php

require_once 'bicycle.php';
$bike = new Bicycle('color');
var_dump($bike);




// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');
$tornado->forward();

$bike->dump();


//CAR

require_once 'car.php';
$car = new car('yellow', 'diesel', 4);
var_dump($car);


echo $car->forward();
echo '<br> Avancer : ' . $car->getCurrentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Freine : ' . $car->getCurrentSpeed . ' km/h' . '<br>';
echo $car->brake();

echo $car->start();
echo '<br> Démarrer : ' . $car->getCurrentSpeed . ' km/h' . '<br>';

