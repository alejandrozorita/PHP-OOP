<?php

	namespace Game\Weapons;

	use Game\Unit;
	use Game\Weapon;

	class CrossBow extends Weapon
	{
		protected $damage = 40;

		public function getDamage()
		{
			return $this->damage;
		}

		public function getDescription(Unit $attacker, Unit $opponent)
		{
			return "{$attacker->getName()} ataca con la ballesta a {$opponent->getName()}";
		}
	}
 