<?php
/**
 * Created by PhpStorm.
 * User: alejandro
 * Date: 29/7/18
 * Time: 17:29
 */

abstract class Unit
{
    protected $hp = 40;
    protected $name;

    abstract public function attack(Unit $opponent);

    public function __construct($name)
    {
        $this->name = $name;

        show("Ha aparecido {$this->getName()} con {$this->getHp()} hp de vida");

    }

    public function move($direction)
    {
        show("{$this->getName()} avanza en dirección $direction");
    }

    public function getName()
    {
        return $this->name;
    }

    public function die()
    {
        show("{$this->getName()} muere");

        exit();
    }

    public function getHp(){
        return $this->hp;
    }


    public function takeDamage($damage){

        $vidaOriginal = $this->hp;

        $this->hp = $this->hp - $this->hp - $this->absorbDamage($damage);

        show("{$this->name} tenía {$this->hp} antes del ataque, tiene ahora {$vidaOriginal} de vida");

        if ($this->hp <= 0) {
            $this->die();
        }

        return $damage;

    }


    protected function absorbDamage($damage)
    {
        return $damage;
    }


}
