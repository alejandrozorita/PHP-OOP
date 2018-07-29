<?php

namespace Game;

class Soldier extends Unit{

    protected $damage = 40;
    protected $armor;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function attack(Unit $opponent)
    {

        show("{$this->getName()} ataca con espada a {$opponent->getName()}");

        if ($opponent->takeDamage($this->damage) == 0){
            show("¡Pero no le toca!");
        }

    }

    public function absorbDamage($damage)
    {
        if ($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}
