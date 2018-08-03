<?php

	namespace Game\Weapons;

	use Game\Unit;

	class BasicBow extends Bow
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
