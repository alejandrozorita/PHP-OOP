<?php

namespace Game\Armor;

use Game\Armor;
use Game\Attack;

class SilverArmor implements Armor {

    public function absorbDamage(Attack $attack)
    {

    	if ($attack->isPhysical) {
			return $attack->getDamage() / 3;
		}

		return $attack->getDamage() ;

    }
}

