<?php

	namespace Game\Weapons;

	use Game\Unit;
	use Game\Weapon;

	class BasicBow extends Weapon
	{
		protected $damage = 20;

		public function getDamage()
		{
			return $this->damage;
		}

		public function getDescription(Unit $attacker, Unit $opponent)
		{
			return "{$attacker->getName()} ataca con el arco a {$opponent->getName()}";
		}
	}
