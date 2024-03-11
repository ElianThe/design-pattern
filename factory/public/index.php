<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici
$vehicule = new \App\Factory\VehiculeFactory();
try {
   var_dump($vehicule->create('Bicycle'));
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}

var_dump($vehicule->getVehiculeByKmFuel(19, 2001));