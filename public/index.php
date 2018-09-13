<?php

namespace Game;

use Game\Armor\BronceArmor;
use Game\Armor\SilverArmor;
use Game\Weapons\CrossBow;
use Game\Weapons\BasicSword;
use Game\Weapons\FireBow;

require "../vendor/autoload.php";


$soldier = new Unit('Soldado', new BasicSword());

$soldier->setArmor(new SilverArmor());


$archer = new Unit('Arquero', new FireBow());

$archer->setArmor(new SilverArmor());



$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);




