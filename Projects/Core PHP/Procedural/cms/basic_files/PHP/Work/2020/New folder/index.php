<?php
/*	class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
*/

/*	class mat_lab
	{
		function  lat_ap()
		{

			echo "My World Nature happy client";
		}
		

	}


$my = new mat_lab;
$my -> lat_ap();
$my -> lat_ap();*/



$str = 'Hello World'; 
  
$encode =  base64_encode($str)."<br>"; 

echo base64_decode($encode); 

?>