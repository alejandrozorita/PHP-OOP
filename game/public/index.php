<?php

namespace Game;

require "../vendor/autoload.php";

$soldier = new Unit('Soldado', new Weapons\BasicSword());

$soldier->setArmor(new Armor\SilverArmor);

$archer = new Unit('Arquero', new Weapons\FireBow());


$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);




