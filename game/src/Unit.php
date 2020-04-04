<?php

namespace Game;

use Game\Armor\MissingArmor;

class Unit extends Model
{

    const MAX_DAMAGE = 3;

    protected $hp = 40;

    protected $name;

    protected $armor;

    protected $weapon;

    protected $attributes = [];


    /**
     * Unit constructor.
     *
     * @param        $name
     * @param  Weapon  $weapon
     * @param  array  $attributes
     */
    public function __construct($name, Weapon $weapon, array $attributes = [])
    {
        $this->fill($attributes);
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new MissingArmor();

        Log::info("Ha aparecido {$this->getName()} con {$this->getHp()} hp de vida");
    }

    public static function createSoldier(array $attributes = [])
    {
        $soldier = new Unit('Soldado', new Weapons\BasicSword(), $attributes);
        $soldier->setArmor(new Armor\SilverArmor);
        return $soldier;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
        return $this;
    }

    public function setShield()
    {
        return $this;
    }

    public function move($direction)
    {
        Log::info("{$this->getName()} avanza en dirección $direction");
    }

    public function getName()
    {
        return $this->name;
    }

    public function die()
    {
        Log::info("{$this->getName()} muere");
        exit();
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        Log::info("{$attack->getDescription($this, $opponent)}");

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {
        $vidaOriginal = $this->hp;

        $this->setHp($this->armor->absorbDamage($attack));

        Log::info("{$this->nombre_completo} tenía {$vidaOriginal} antes del ataque, tiene ahora {$this->hp} de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    protected function setHp(int $damage)
    {
        if ($damage > static::MAX_DAMAGE) {
            $damage = 10;
        }

        $this->hp = $this->hp - $damage;
    }

}
