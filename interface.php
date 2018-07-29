<?php

require 'src/helpers.php';

require 'src/Unit.php';
require 'src/Soldier.php';
require 'src/Archer.php';
require 'src/Armor.php';
require 'src/BronceArmor.php';
require 'src/SilverArmor.php';
require 'src/CursedArmor.php';







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


