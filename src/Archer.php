<?php

namespace Game;

class Archer extends Unit{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {

        show("{$this->getName()} ataca con flecha {$opponent->getName()}");

        $opponent->takeDamage($this->damage);

    }


    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function takeDamage($damage)
    {
        if (rand(0, 1) == 0) {
            parent::takeDamage($damage / 2);
            return '1';
        }

        return '0';
    }

}
