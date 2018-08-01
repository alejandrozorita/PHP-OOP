<?php

namespace Game\Armor;

use Game\Armor;

class SilverArmor implements Armor {

    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}

