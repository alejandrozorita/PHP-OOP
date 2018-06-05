<?php

function show($message){
    echo "<p>$message</p>";
}

abstract class Unit
{
    protected $hp = 40;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
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
    }

    public function getHp(){
        return $this->hp;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;

        show("{$this->name} tiene ahora {$this->hp} de vida");
    }

    abstract public function attack(Unit $opponent);
}



class Soldier extends Unit{

    protected $damage = 40;

    public function attack(Unit $opponent)
    {
        show("{$this->getName()} ataca con espada {$opponent->getName()}");

        $opponent->setHp($opponent->getHp() - $this->damage);
        

        if ($opponent->getHp() <= 0) {
            $opponent->die();
        }
    }

    

}



class Archer extends Unit{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->getName()} ataca con flecha {$opponent->getName()}");

        $opponent->setHp($opponent->getHp() - $this->damage);
        

        if ($opponent->getHp() <= 0) {
            $opponent->die();
        }
    }

}

$ramm = new Soldier('Ramm');

$unidad = new Archer('Alejandro');

$unidad->move('left');

$unidad->attack($unidad);