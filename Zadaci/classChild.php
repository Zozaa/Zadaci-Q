<?php


	require_once("abstractClassHuman.php");
	
	class Child extends Human
	{
		public function __construct($name,$age,$gender)
		{
			$this->name = $name; 
			$this->age = $age; 
			$this->gender = $gender; 
		}
		
		public function wearing()
		{
			$clothes= array('cl1'=>'starke','cl2'=>'majicu Justin Biebera');
			echo "Najvise volim da obucem" . " " . $clothes['cl1'] . " " . "i" . " " . $clothes['cl2'];
			
		}
		public function eat(){
			echo "Volim sve sto je nezdravo.<br>";
		}
		
		public function working()
		{
				echo "Ne radim nigde. Kazu da mi je jedina obaveza u zivotu da ucim :(<br>";
		}
		public function getAge()
		{ 
			return $this -> age; 
		}
		  
	    public function sayName() 
		{
           return $this->name;
        }
		  
		public function getGender()
		{
		  return $this->gender;
		}
	}
	$child = new Child('Mila',17,'Devojcica');
	echo "Ja sam" . " " . $child->sayName() . "<br>";
	echo "Imam" . " " . $child->getAge() . " " . "godina<br>";
	
	$child->eat();
	$child->working();
	$child->wearing();
?>