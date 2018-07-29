<?php

require 'src/helpers.php';


spl_autoload_register(function ($clasName) {

    if (strpos($clasName, 'Game\\') === 0){

        $clasName = str_replace('Game\\', '', $clasName);

        require "src/$clasName.php";
    }

});


$soldier = new Game\Soldier('Soldado');

$archer = new Game\Archer('Arquero');

//$unidad->move('left');


$soldier->attack($archer);

$archer->attack($soldier);

$archer->setArmor(new Game\SilverArmor());

$soldier->attack($archer);

$soldier->setArmor(new Game\CursedArmor());

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);


