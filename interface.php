<?php

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
        echo "<p>{$this->name} avanza en dirección $direction</p>";
    }

    abstract public function attack($opponent);
}

class Soldier extends Unit{

    public function attack($opponent)
    {
        echo "<p>{$this->name} ataca con espada $opponent</p>";
    }

}

class Archer extends Unit{

    public function attack($opponent)
    {
        echo "<p>{$this->name} ataca con flecha $opponent</p>";
    }

}

$unidad = new Archer('Alejandro');

$unidad->move('left');

$unidad->attack('contrario');