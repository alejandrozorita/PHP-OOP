<?php
	/**
	 * Created by PhpStorm.
	 * User: alejandro
	 * Date: 1/8/18
	 * Time: 23:57
	 */

	namespace Game;


	abstract class   Weapon
	{
		protected $damage = 0;

		public function getDamage()
		{
			return $this->damage;
		}

		abstract public function getDescription(Unit $attacker, Unit $opponent );
	}