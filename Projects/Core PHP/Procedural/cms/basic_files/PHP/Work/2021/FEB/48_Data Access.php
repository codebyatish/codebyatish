<?php
		
	class Car
	{
		public $wheels = 2; // It will available for our whole program -. same as var.
		protected $hoods = 1; // It will avilable for this perticular class or any sub-classes or inherited classes. 		
		private $engin = 1; // It will available only & only for this class.

		function ShowPrivateProperty()  // inside the class it is call methods & outside the class it is call functions rather both are same...
		{
			 echo $this->engin = 2;

		}
	}



	$bmw = new Car(); // this is an object now...!! / we created instance of class Car.
	echo $bmw->wheels; 
	//$bmw->ShowProtectedProperty();  // protected example



	class Semi extends Car
	{
		
		function ShowProtectedProperty()  // inside the class it is call methods & outside the class it is call functions rather both are same...
		{
			 echo $this->hoods = 23;

		}

	}

	$semi = new Semi();
	$semi->ShowProtectedProperty(); // another protected example by inheritance



	echo "<br>";

	$bmw->ShowPrivateProperty(); // this an exaple of private used in same class that we have declare eengin as a private.


?>