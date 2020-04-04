<?php

namespace Game;

require "../vendor/autoload.php";

Transaltor::set(
  [
    'BasicBowAttack' => ":unit ataca con el arco a :opponent",
    'BasicSwordAttack' => ":unit ataca con espada a :opponent",
    'CrossBowAttack' => "::unit ataca con arco grande a :opponent",
    'FireBowAttack' => ":unit ataca con un arco de fuego a :opponent",
    'WeaponAttack' => ":unit ataca a :opponent",
  ]
);

Log::setLogger(new HtmlLogger());

$soldier = Unit::createSoldier(
  [
    'nombre_completo' => 'nombre de mi unidad',
  ]
)->setArmor(new Armor\SilverArmor)->setShield();


$archer = Unit::createSoldier();

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);




