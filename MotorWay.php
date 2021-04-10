<?php 

require_once 'highway.php';

final class MotorWay extends HighWay{

    public function __construct(int $nbLane = 4, int $maxSpeed = 130) 
    {
        parent::__construct($nbLane, $maxSpeed);

    }

    public function addVehicles(object $Vehicle){

        if($Vehicle instanceof Car || $Vehicle instanceof Camion){
            $this->currentVehicle[]= $Vehicle;
        }

            
    }

}