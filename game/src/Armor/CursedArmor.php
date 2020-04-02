<?php

namespace Game\Armor;

use Game\Attack;
use Game\Armor;

class CursedArmor extends Armor
{

    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() * 2;
    }

}
