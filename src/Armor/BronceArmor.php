<?php

namespace Game\Armor;

use Game\Armor;
use Game\Attack;

class BronceArmor implements Armor {

    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }

}
