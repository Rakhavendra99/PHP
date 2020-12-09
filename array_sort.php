<style>
*{color:blue;}
</style>
<?php
	$x=array("C","A","D","B");
	sort($x); //sorting
	print_r($x);
	
	rsort($x);//reverse sorting
	print_r($x);
	
	echo "<br>";
	$x = array("name"=>"Rakhav","mob"=>"samsung","Location"=>"Nilakottai");
	sort($x)."<br>";
	print_r($x);
	asort($x)."<br>";
	print_r($x);
	arsort($x)."<br>";
	print_r($x);
	ksort($x)."<br>";
	print_r($x);
	krsort($x)."<br>";
	print_r($x);


?>