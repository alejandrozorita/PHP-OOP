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

    private function setHp($hp)
    {
        $this->hp = $hp;

        show("{$this->name} tiene ahora {$this->hp} de vida");
    }


    public function takeDamage($damage){

         $this->setHp($this->hp - $damage);

         if ($this->hp <= 0) {
            $this->die();
        }

    }


}



class Soldier extends Unit{

    protected $damage = 40;

    public function attack(Unit $opponent)
    {
        show("{$this->getName()} ataca con espada {$opponent->getName()}");

        $opponent->takeDamage($this->damage);

    }

    public function takeDamage($damage){
        return parent::takeDamage($damage / 2);
    }

}



class Archer extends Unit{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->getName()} ataca con flecha {$opponent->getName()} y hace {$this->damage} de daño");

        $opponent->takeDamage($this->damage);
    }

}

$ramm = new Soldier('Ramm');

$alex = new Archer('Alex');

//$unidad->move('left');

$alex->attack($ramm);

$ramm->attack($alex);