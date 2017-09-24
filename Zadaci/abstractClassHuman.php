<?php
	abstract class Human
	{	
		private $name;
		private $age;
		private $gender;
		
		public function breathing()
		{
			echo "";
		}	
		abstract public function eat();
		abstract public function working();
		abstract public function wearing();
		abstract public function getAge();
		abstract public function getGender();
		abstract public function sayName();
	}


?>