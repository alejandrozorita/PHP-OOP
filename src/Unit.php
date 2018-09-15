<?php

	namespace Game;

	use Game\Armor\MissingArmor;

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

			$this->armor = new MissingArmor();

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
			$attack = $this->weapon->createAttack();

			show("{$attack->getDescription($this, $opponent)}");

			$opponent->takeDamage($attack);

		}


		public function takeDamage(Attack $attack){

			$vidaOriginal = $this->hp;

			$this->hp = $this->hp - $this->armor->absorbDamage($attack);

			show("{$this->name} tenía {$vidaOriginal} antes del ataque, tiene ahora {$this->hp} de vida");

			if ($this->hp <= 0) {
				$this->die();
			}

		}

	}
