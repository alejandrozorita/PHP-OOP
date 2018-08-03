<?php

	namespace Game\Weapons;

	use Game\Unit;
	use Game\Weapon ;

	class BasicSword extends Weapon
	{
		protected $damage = 20;

		public function getDamage()
		{
			return $this->damage;
		}

		public function getDescription(Unit $attacker, Unit $opponent)
		{
			return "{$attacker->getName()} ataca con espada a {$opponent->getName()}";
		}
	}


