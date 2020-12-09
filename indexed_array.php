<style>
*{color:blue;}
</style>
<?php
	$marks = array(12,40.5,20,50,60);
	var_dump($marks);
	
	echo"<br>";
	print_r($marks);
	
	$length = count($marks);
	echo $length;
	echo $marks[0];
	echo $marks[3];
	for($i=0;$i<=$length;$i++)
	{
	echo $marks[$i]."<br>";
	}

?>