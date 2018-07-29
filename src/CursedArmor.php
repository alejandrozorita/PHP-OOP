<?php

class CursedArmor implements Armor {


    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}
