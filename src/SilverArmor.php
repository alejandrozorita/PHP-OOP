<?php

class SilverArmor implements Armor {


    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}
