<?php
// Bicycle.php
require_once 'vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{

    public function switchON(): string
    {
        if($this->getCurrentSpeed() > 10)
        {
        return 'oui';
        }
        else {
            return 'non';
        }
    }

    public function switchOFF(): string
    {
        return 'non';
    }

}

