<html>
<style>
	*{color:blue;}
	h2{color:red;}
	
</style>
<body>
<h2> GET, POST, REQUEST</h2>
<form method ="POST" action = "for.php">
	 Start : <input name ='x'>
	 End   : <input name ='y'>
	<input type = "submit" name ="submit" value = "test">
	</form>
	
<?php
	$x =5;
	while($x>0)
	{
		echo $x;
		$x--;
	}
	echo "<br>";
	$x=7;
	do{
		echo $x;
		$x--;
	}while($x>0);
	
	

?>
</body>
</html>