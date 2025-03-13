<?php
		
class Car
{

	function MoveWheels()  // inside the class it is call methods & outside the class it is call functions rather both are same...
	{
		echo "Wheels Moves...";
	}
	
}



$bmw = new Car(); // this is an object now...!! / we created instance of class Car.
$honda = new Car();



$bmw->MoveWheels();
$honda->MoveWheels();


// if (method_exists("Car", "MoveWheels")) {
// 	echo "The Method is exist...";
// }else{
// 	echo "The Method is not exist...";
// }


// if (class_exists("Car")) {
// 	echo "It is exist...";
// }else{
// 	echo "It is not exist...";
// }

?>
