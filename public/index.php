<?php

namespace Game;

use Game\Armor\BronceArmor;
use Game\Armor\SilverArmor;
use Game\Weapons\CrossBow;
use Game\Weapons\BasicSword;

require "../vendor/autoload.php";


$soldier = new Unit('Soldado', new BasicSword());

$soldier->setArmor(new BronceArmor());


$archer = new Unit('Arquero', new CrossBow());

$archer->setArmor(new SilverArmor());



$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);




