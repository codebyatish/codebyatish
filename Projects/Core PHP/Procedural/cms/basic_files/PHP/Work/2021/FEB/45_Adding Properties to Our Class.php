<?php
		
class Car
{
	var $wheels = 4; // this is properties of a class...
	var $hoods = 1; // this is properties of a class...
	var $engin = 1; // this is properties of a class...
	var $doors = 4; // this is properties of a class...

	function MoveWheels()  // inside the class it is call methods & outside the class it is call functions rather both are same...
	{
		$this->wheels = 10;

	}

	function CreateDoors()  // inside the class it is call methods & outside the class it is call functions rather both are same...
	{
		$this->doors = 2;

	}
	
}



$bmw = new Car(); // this is an object now...!! / we created instance of class Car.
echo "BMW has ".$bmw->wheels." wheels ,".$bmw->hoods." hood, ".$bmw->engin." engin & ".$bmw->doors." doors.<br>"; // this is how to use properties of class .



$truck = new Car(); // this is an object now...!! / we created instance of class Car.
$truck->MoveWheels();
$truck->CreateDoors();
echo "Truck has ".$truck->wheels." & having ".$truck->doors." doors."; // this is how to use properties of class .

?>
