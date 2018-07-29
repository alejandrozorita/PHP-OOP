<?php

namespace Game;

use Game\Armor;

class BronceArmor implements Armor {

    public function absorbDamage($damage)
    {
        return $damage / 2;
    }

}
