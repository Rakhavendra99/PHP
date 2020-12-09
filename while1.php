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
	$x =10;
	while($x>0)
	{
		echo $x;
		$x--;
		if ($x==5)
		{
			echo "Waiting";
			//break;
			continue;
		}
	}
	
	

?>
</body>
</html>