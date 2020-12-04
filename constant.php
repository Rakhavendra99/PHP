<?php
	$a = 23;
	echo $a;
	echo "<br>";
	define("age","21");
	echo age;
	define("age","22");//Warning: Constant age already defined 
	echo age;
	define ("$age","21"); //Warning: Undefined variable $age
	echo $age;
?>
