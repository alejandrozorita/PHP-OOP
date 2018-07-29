<?php

class BronceArmor implements Armor {


    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}