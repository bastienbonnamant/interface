<?php 

require_once 'highway.php';

final class PedestrianWay extends Highway{

    public function __construct(int $nbLane = 1, int $maxSpeed = 10) 
    {
        parent::__construct($nbLane, $maxSpeed);

    }

    public function addVehicles(object $Vehicle){

        if($Vehicle instanceof Bicycle || $Vehicle instanceof skateBoard){
            $this->currentVehicle[]= $Vehicle;
        }

            
    }


}