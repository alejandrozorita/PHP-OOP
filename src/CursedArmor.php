<?php

namespace Game;

use Game\Armor;

class CursedArmor implements Armor {

    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}
