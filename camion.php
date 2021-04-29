<?php

require_once 'vehicle.php';
require_once 'LightableInterface.php';

class Camion extends Vehicle implements LightableInterface
{

    public const ALLOWED_ENERGIES = [
        'fuel','electric'
    ];
    
    private int $storageCapacity;

    private int $load=0;

    private string $energy;



    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setstorageCapacity($storageCapacity);

    }

    public function switchON(): string
    {
        return 'oui';
    }

    public function switchOFF(): string
    {
        return 'non';
    }


    public function setstorageCapacity(int $storageCapacity): void
    {
         $this->storagecapacity = $storageCapacity;
    }

    public function getstorageCapacity(): int
    {
        return $this->storagecapacity;
    }

    public function getload(): int
    {
        return $this->load;
    }

    public function setload(int $load): void
    {
        $this->load = $load;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }
        
        public function isFullOrNot(): string
    {
        $sentence = "";
        if ($this->getstorageCapacity() == 0) {
            $sentence = 'Full !!!';
        } else {
            $sentence = 'In filling...';
        }
        return $sentence;
    }
}