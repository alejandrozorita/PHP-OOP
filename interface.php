<?php

namespace Game;

require 'src/helpers.php';

require 'vendor/Armor.php';


spl_autoload_register(function ($clasName) {

    if (strpos($clasName, 'Game\\') === 0){

        $clasName = str_replace('Game\\', '', $clasName);

        require "src/$clasName.php";
    }

});


$soldier = new Soldier('Soldado');

$archer = new Archer('Arquero');

//$unidad->move('left');


$soldier->attack($archer);

$archer->attack($soldier);

$archer->setArmor(new SilverArmor());

$soldier->attack($archer);

$soldier->setArmor(new CursedArmor());

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);


