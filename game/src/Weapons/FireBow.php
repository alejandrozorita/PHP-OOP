<?php

	namespace Game\Weapons;

	use Game\Unit;
	use Game\Weapon;

	class FireBow extends Weapon
	{
		protected $damage = 30;
		protected $magical = true;
		protected $description = ":unit ataca con un arco de fuego a :opponent";
	}