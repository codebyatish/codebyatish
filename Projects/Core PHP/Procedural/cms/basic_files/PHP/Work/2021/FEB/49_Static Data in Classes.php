<?php
		
	class Car
	{
		//var $wheels = 2; // this will we use throughout of our program.
		static $wheels = 2; // this will we use throughout of our program but having different syntax.
		var $hoods = 1;


		function ShowPrivateProperty()  // inside the class it is call methods & outside the class it is call functions rather both are same...
		{
			  $this->wheels = 4;

		}
	}



	$bmw = new Car(); // this is an object now...!! / we created instance of class Car.

	// echo $bmw->wheels;

	echo Car::$wheels;


	echo "<br>";



?>