<?php
/**
 * Created by PhpStorm.
 * User: alejandro
 * Date: 15/9/18
 * Time: 20:53
 */

namespace Game\Armor;

use Game\Armor;
use Game\Attack;

class MissingArmor extends Armor
{

    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

}