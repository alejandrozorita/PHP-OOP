<?php
	/**
	 * Created by PhpStorm.
	 * User: alejandro
	 * Date: 1/8/18
	 * Time: 23:57
	 */

	namespace Game;


	abstract class Weapon
	{
		protected $damage = 0;
		protected $magical = false;

		public function createAttack()
		{
			return new Attack($this->damage, $this->magical, $this->description);
		}

	}
