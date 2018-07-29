<?php

namespace Game;

use Game\Armor as Game;

class SilverArmor implements Game {

    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}

