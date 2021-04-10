<?php 

require_once 'highway.php';

final class ResidentialWay extends Highway{

    public function __construct(int $nbLane = 2, int $maxSpeed = 50) 
    {
        parent::__construct($nbLane, $maxSpeed);

    }

    public function addVehicles(object $Vehicle){

        if($Vehicle instanceof Vehicle){
            $this->currentVehicle[]= $Vehicle;
        }

            
    }
}