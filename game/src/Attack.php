<?php

	namespace Game;


	class Attack
	{

		protected $damage;
		protected $magical;
		protected $description;


		public function __construct($damage, $magical, $description)
		{
			$this->damage = $damage;
			$this->magical = $magical;
			$this->description = $description;
		}

		public function getDescription(Unit $attacker, Unit $opponent)
		{
			return str_replace(
					[':unit', ':opponent'],
					[$attacker->getName(), $opponent->getName()],
					$this->description
			);
		}


		/**
		 * @return mixed
		 */
		public function getDamage()
		{
			return $this->damage;
		}

		/**
		 * @param mixed $damage
		 */
		public function isMagical()
		{
			return $this->magical;
		}

		/**
		 * @return mixed
		 */
		public function isPhysical()
		{
			return !$this->isMagical();
		}

		/**
		 * @param mixed $magical
		 */
		public function setMagical($magical)
		{
			$this->magical = $magical;
		}

	}
