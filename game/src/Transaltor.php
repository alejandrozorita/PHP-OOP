<?php
	/**
	 * Created by PhpStorm.
	 * User: alejandro
	 * Date: 29/9/18
	 * Time: 1:02
	 */

	namespace Game;


	class Transaltor
	{
		protected static $messages = [
				'BasicBowAttack' =>  ":unit ataca con el arco a :opponent",
				'BasicSwordAttack' =>  ":unit ataca con espada a :opponent",
				'CrossBowAttack' =>  "::unit ataca con arco grande a :opponent",
				'FireBow Attack' =>  ":unit ataca con un arco de fuego a :opponent",
				'WeaponAttack' =>  ":unit ataca a :opponent",


		];

		public static function get($key, array $params = array())
		{


			if (! static::has($key)) {
				return "[$key]";
			}

			return static::replaceParams(static::$messages[$key], $params);


		}

		public static function has($key)
		{
			return isset (static::$messages[$key]);
		}

		public static function replaceParams($message, array $params)
		{

			foreach ( $params as $key => $value)
			{
				$message = str_replace(":$key", $value, $message);
			}

			return $message;
		}
	}