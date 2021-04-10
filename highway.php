<?php 

abstract class HighWay{

     private array $currentVehicles;

     private int $nbLane;

     private int $maxSpeed;

     public function __construct(int $nbLane, int $maxSpeed) 
     {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;

     }

     public function getcurrentVehicles(): array
     {
         return $this->currentVehicles;
     }
 
     public function setcurrentVehicles(array $currentVehicles) 
     {
        $this->currentVehicles = $currentVehicles;
     }


     public function getnbLane(): int
     {
         return $this->nbLane;
     }
 
     public function setnbLane(int $nbLane)
     {
        $this->nbLane = $nbLane;
     }




     public function getmaxSpeed(): int
     {
         return $this->maxSpeed;
     }
 
     public function setmaxSpeed(int $maxSpeed)
     {
        $this->maxSpeed = $maxSpeed;
     }

     abstract public function addVehicles(object $Vehicle);
     








}