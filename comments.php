<?php
   #comments
   //comments
   /* comment1
		comment2
	*/
	
	$x= 10;
	$y = 20;
	print $x;
	#print $x,$y;// print function canot handle in multiple arguments.
	
	echo "<br>";
	
	echo $x,$y; // Its perform multilple arguments,compare to print echo is very fast.
	
	echo "<br>";
	$name = "Rakhav";
	printf("%s has %d rupees",$name,$x);
	
	echo "<br>";
	
	$data = "Pravin have 2 pencile";
	sscanf ($data,"%s have %d pencile",$name1,$entity);
	echo $name1,$entity;
	
	sscanf ($data,"%d have %d pencile",$name1);
	echo $name1;  //Fatal error: Uncaught ValueError: Different numbers of variable names and field specifiers 
	


?>