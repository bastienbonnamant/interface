<?php

// index.php

require_once 'bicycle.php';
$bike = new Bicycle('color',2);
/*
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow',2);


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black',2);
$tornado->forward();



//CAR

require_once 'car.php';
$car = new Car('yellow',4, 'diesel');

$porsche = new Car('green', 4, 'electric');
echo $car->forward();


echo $car->forward();
echo '<br> Avancer : ' . $car->getCurrentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Freine : ' . $car->getCurrentSpeed . ' km/h' . '<br>';
echo $car->brake();

echo $car->forward();
echo '<br> Démarrer : ' . $car->getCurrentSpeed . ' km/h' . '<br>';



//Camion
require_once 'camion.php';

$camion = new Camion('yellow', 4, 'fuel', 5);

echo $camion->forward();
echo '<br> Avancer : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Freine : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();

echo $camion->forward();
echo '<br> Démarrer : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';


$camion->setload(5000);
$camion->getload();
$camion->setstorageCapacity(0);
echo '<br> Le camion est '. $camion->isFullOrNot()  . '<br>';


// Highway
require_once 'MotorWay.php';
$A4Paris = new MotorWay();
$A4Paris->addVehicles($porsche);
$A4Paris->addVehicles($car);
$A4Paris->addVehicles($camion);


require_once 'PedestrianWay.php';
$piste = new PedestrianWay();
$piste->addVehicles($bike);
$piste->addVehicles($car);
$piste->addVehicles($tornado);



require_once 'ResidentialWay.php';
$nationale = new ResidentialWay();
$nationale->addVehicles($bike);
$nationale->addVehicles($tornado);
$nationale->addVehicles($porsche);


//Frein

$car->setParkBrake(true);
try{
    echo $car->start();
}
catch (LogicException $e){
    $car->setParkBrake(false);
    echo "Exception received : ". $e->getMessage() . "n";
} finally {
    echo "Ma voiture roule comme un donut";
};

*/

//Light


$dolan = new Bicycle("black", 1);
$dolan->setCurrentSpeed(12);
echo $dolan->getCurrentSpeed();
echo $dolan->switchON();

var_dump($dolan);









