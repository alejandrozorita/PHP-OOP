<?php

namespace ObjetosInmutables;

require "../vendor/autoload.php";

// Padre
$gordon = new User(['name' => 'Gordon']);

// Hijas
$raquel = new User(['name' => 'Raquel']);
$joana = new User(['name' => 'Joana']);

// Casa
$lunchBox = new LunchBox(['Bocadillo', 'Manzana']);

$lunchBox2 = new LunchBox(
  [
    new Food(['name' => 'Bocadillo']),
    new Food(['name' => 'Patatas']),
    new Food(['name' => 'Jugo de naranja', 'bebida' => true])
  ]
);

$raquel->setLunch($lunchBox);
$joana->setLunch($lunchBox2);

// Escuela
$raquel->eatMealt($lunchBox);
$joana->eatMealt($lunchBox);
