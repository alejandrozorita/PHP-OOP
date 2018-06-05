<?php

function show($message){
    echo "<p>$message</p>";
}

abstract class Unit
{
    protected $alive = true;
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

    abstract public function attack($opponent);
}

class Soldier extends Unit{

    public function attack($opponent)
    {
        show("{$this->getName()} ataca con espada {$opponent->getName()}");
    }

}

class Archer extends Unit{

    public function attack($opponent)
    {
        show("{$this->getName()} ataca con flecha {$opponent->getName()}");

        $opponent->die();
    }

}

$ramm = new Soldier('Ramm');

$unidad = new Archer('Alejandro');

$unidad->move('left');

$unidad->attack($unidad);