<?php
	/**
	 * Created by PhpStorm.
	 * User: alejandro
	 * Date: 29/9/18
	 * Time: 0:43
	 */

	namespace practica;

	class Persona
	{

		protected $name;

		public function __construct($name)
		{
			$this->name = $name;
		}

		public function name()
		{
			return $this->name;
		}

	}


	$persona1 = new Persona('Alejandro');

	$persona2 = new Persona('Otro');

	echo "<p>{$persona1->name()}</p>";
		echo "<p>{$persona2->name()}</p>";