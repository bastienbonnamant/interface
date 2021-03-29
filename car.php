<?php

class Car
{
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;


    public function start(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function __construct(string $color, string $energy,  int $nbSeats)
    {
        $this->color = $color;
        $this->energy = $energy;
        $this->nbSeats = $nbSeats;
    }

    public function getenergy(): string
    {
        return $this->energy;
    }

    public function getcolor(): string
    {
        return $this->color;
    }

    public function getnbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getnbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getenergyLevel(): int
    {
        return $this->energyLevel;
    }


}