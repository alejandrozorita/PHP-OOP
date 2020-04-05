<?php

namespace IteracionObjetos;

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
$raquel->eatMealt($lunchBox);
$joana->eatMealt($lunchBox);
