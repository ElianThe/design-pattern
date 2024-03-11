<?php
require('../vendor/autoload.php');

# TODO: Récuperer une instance de Config
$config = \App\Config::getInstance();
# Afficher une valeur contenu dans config.php
var_dump($config->getValeurSettings('db'));
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques
$twoconfig = \App\Config::getInstance();
var_dump($twoconfig === $config);