<?php

namespace Game;

use Game\Armor\CursedArmor;
use Game\Armor\SilverArmor;

require "../vendor/autoload.php";


$soldier = new Soldier('Soldado');

$archer = new Archer('Arquero');

//$unidad->move('left');
$silver_armor = new SilverArmor();

$cursed_armor = new CursedArmor();

$soldier->attack($archer);

$archer->attack($soldier);

$archer->setArmor($silver_armor);

$soldier->attack($archer);

$soldier->setArmor($cursed_armor);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);