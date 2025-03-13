<?php
		
	class Car
	{
		var $wheels = 2; // this is properties of a class...
		var $hoods = 1; // this is properties of a class...
		var $engin = 1; // this is properties of a class...
		var $doors = 4; // this is properties of a class...

		function MoveWheels()  // inside the class it is call methods & outside the class it is call functions rather both are same...
		{
			 echo $this->wheels = 10; // this will not shown on screen.

		}

		function __construct()
		{
			echo $this->wheels = 10; // but this will shown on screen.
		}

	}



	$bmw = new Car(); // this is an object now...!! / we created instance of class Car.


?>