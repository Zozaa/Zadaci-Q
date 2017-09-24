<?php


	require_once("abstractClassHuman.php");
	
	class Woman extends Human
	{
		public function __construct($name,$age,$gender)
		{
			$this->name = $name; 
			$this->age = $age; 
			$this->gender = $gender; 
		}
		
		
		public function wearing()
		{
			$clothes= array('cl1'=>'haljinu','cl2'=>'visoke potpetice');
			echo "Najvise volim da obucem" . " " . $clothes['cl1'] . " " . "i" . " " . $clothes['cl2'];
			
		}
		public function eat(){
			echo "Vegan sam<br>";
		}
		
		public function working()
		{
			$jobs= array('job1'=>'kucne poslove','job2'=>'blogerka sam');
			echo "Obavljam" . " " . $jobs['job1'] . " " . "i" . " " . $jobs['job2'];
			echo "<br>";
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
	$woman = new Woman('Tijana',29,'Zena');
	
	
	echo "Ja sam" . " " . $woman->sayName() . "<br>";
	echo "Imam" . " " . $woman->getAge() . " " . "godina<br>";
	
	$woman->eat();
	$woman->working();
	$woman->wearing();
	


?>