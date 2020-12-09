<style>
*{color:blue;}
</style>
<?php
	$x = array("name"=>"Rakhav","age"=>"21","mob"=>"9043");
	echo $x['name']."<br>";
	var_dump($x);
	 echo "<br>";
	foreach($x as $values)
	{
		echo $values."<br>";
	}
	
	foreach(array_keys($x) as $keys)
	{
		echo $keys."<br>";
	}
	
	
	

?>