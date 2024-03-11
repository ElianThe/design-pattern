<?php
require('../vendor/autoload.php');


# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
$query = (new \App\MySQLQueryBuilder())
    ->select(['id', 'name'])
    ->from('user')
    ->where(['id = 12', 'name = sylvie']);
$query2 = (new \App\litteralBuilder())
    ->select(['id', 'name'])
    ->from('user')
    ->where(['id = 12', 'name = sylvie']);
# Afficher la requête
echo $query->getQuery(); // SELECT id, name FROM user WHERE id = 12, name = sylvie
echo $query2->getQuery(); // Je selection les champs id, name de la table user où id = 12, name = sylvie