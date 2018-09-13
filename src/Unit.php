<?php

	namespace Game;

	class Unit
	{
		protected $hp = 40;
		protected $name;
		protected $armor;
		protected $weapon;


		/**
		 * Unit constructor.
		 *
		 * @param        $name
		 * @param Weapon $weapon
		 */
		public function __construct($name, Weapon $weapon)
		{
			$this->name = $name;

			$this->weapon = $weapon;

			show("Ha aparecido {$this->getName()} con {$this->getHp()} hp de vida");


		}

		public function setWeapon(Weapon $weapon)
		{
			$this->weapon = $weapon;
		}

		public function setArmor(Armor $armor = null)
		{
			$this->armor = $armor;
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



		public function attack(Unit $opponent)
		{

			show("{$this->weapon->getDescription($this, $opponent)}");

			if ($opponent->takeDamage($this->weapon->getDamage()) == 0) {
				show("¡Pero no le toca!");
			}

		}


		public function takeDamage($damage){

			$vidaOriginal = $this->hp;

			$this->hp = $this->hp - $this->absorbDamage($damage);

			show("{$this->name} tenía {$vidaOriginal} antes del ataque, tiene ahora {$this->hp} de vida");

			if ($this->hp <= 0) {
				$this->die();
			}

			return $damage;

		}


		public function absorbDamage($damage)
		{
			if ($this->armor) {
				$damage = $this->armor->absorbDamage($damage);
			}

			return $damage;
		}

	}
