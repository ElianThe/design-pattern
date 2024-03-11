<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\Vehicule;

class VehiculeFactory
{
    /**
     * @throws \Exception
     */
    public function create($type) : Vehicule
    {
        return match ($type) {
            'Bicycle' => new Bicycle(0, 'no fuel'),
            'Car' => new Car(3.7, 'diesel'),
            'Truck' => new Truck(8, 'essence'),
            default => throw new \Exception("Le véhicule demandé n'existe pas"),
        };
    }

    public function getVehiculeByKmFuel($km, $poids)
    {
        if ($km < 20 && $poids < 20) {
            return new Bicycle(0, 'no fuel');
        } else if ($poids < 200) {
            return new Car(3.7, 'diesel');
        } else {
            return new Truck(8, 'essence');
        }
    }
}