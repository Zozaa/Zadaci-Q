<?php


	require_once("abstractClassHuman.php");
	
	class Man extends Human{
		
		
		public function __construct($name,$age,$gender)
		{
			$this->name = $name; 
			$this->age = $age; 
			$this->gender = $gender; 

			
		}
		
		public function wearing()
		{
			echo "";
		}
		public function eat(){
			$food = array('f1'=>'mesano meso','f2'=>'pivo');
			echo "Najvise volim da jedem" . " " . $food['f1'] . " " . "i pijem" . " " . $food['f2'];
			echo "<br>";
		}
		
		public function working()
		{
			$jobs= array('job1'=>'Radim u fabrici','job2'=>'fudbal');
			echo $jobs['job1'] . " " . ", a u slobodno vreme igram" . " " . $jobs['job2'];
			
		}
		

		  
		  public function getAge()
		  { 
			return $this -> age; 
		  }
		  
		 
		  public function sayName() 
		  {
              return $this->name;
          }
		  
		  public function setGender($gender)
		  {
			  $this -> gender = $gender; 
		  }
		  
		  public function getGender()
		  {
			  return $this->gender;
		  }
	}

	$man = new Man('Marko',31,'Musko');
	echo "Ja sam" . " " . $man->sayName() . "<br>";
	echo "Imam" . " " . $man->getAge() . " " . "godinu<br>";
	$man->eat();
	$man->working();
	$man->wearing();
	
	

?>