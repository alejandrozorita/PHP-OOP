<?php

function show($message){
    echo "<p>$message</p>";
}

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






class Archer extends Unit{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {

        show("{$this->getName()} ataca con flecha {$opponent->getName()}");

        $opponent->takeDamage($this->damage);

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


class Armor{

    public function absorbDamage($damage)
    {
        return $damage / 2;
    }

}


$soldier = new Soldier('Soldado');

$archer = new Archer('Arquero');

//$unidad->move('left');


$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$soldier->setArmor(new Armor());

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);


