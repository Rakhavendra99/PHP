<html>
<style>
	*{color:blue;}
	h2{color:red;}
	
</style>
<body>
<h2> Increment / Decrement operator</h2>
<?php
	$x=40;
	$y=90;
	
	if($x<=$y)  // or gate
	{
		echo "True";
	}
	else{
		echo "False";
	}
	
	if($x >= $y){echo"True";} else{echo "False";} // or gate
	if($x<$y ||$x==$y){echo"True";} else{echo "False";} //or gate
	
	if($x<$y && $x!=$y){echo"True";} else{echo "False";} //and gate
	if($x>$y && $x!=$y){echo"True";} else{echo "False";} //and gate
	


?>
</body>
</html>