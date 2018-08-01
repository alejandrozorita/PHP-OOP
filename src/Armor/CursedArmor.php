<?php

namespace Game\Armor;

use Game\Armor;

class CursedArmor implements Armor {

    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}
