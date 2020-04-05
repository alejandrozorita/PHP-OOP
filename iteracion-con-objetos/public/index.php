<?php

namespace ClonarObjetos;

require "../vendor/autoload.php";

// Padre
$gordon = new User(['name' => 'Gordon']);

// Hijas
$raquel = new User(['name' => 'Raquel']);
$joana = new User(['name' => 'Joana']);

// Casa
$lunchBox = new LunchBox(['Bocadillo', 'Manzana']);
$lunchBox2 = clone($lunchBox);

$raquel->setLunch($lunchBox);
$joana->setLunch($lunchBox2);


// Escuela
$raquel->eat($lunchBox);
$joana->eat($lunchBox);

var_dump($lunchBox, $lunchBox2);