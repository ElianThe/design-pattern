<?php

namespace App\Entity;

class Bicycle implements Vehicule {
    private $costPerKm;
    private $fuelType;

    public function __construct($costPerKm, $fuelType) {
        $this->costPerKm = $costPerKm;
        $this->fuelType = $fuelType;
    }

    public function getCostPerKm() {
        return $this->costPerKm;
    }

    public function getFuelType() {
        return $this->fuelType;
    }

    public function __toString(): string
    {
        return 'Bicycle';
    }
}