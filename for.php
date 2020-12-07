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
	if(!empty($_REQUEST))
	{
		$Start = $_REQUEST['x'];
	$End   = $_REQUEST['y'];
	for ($Start;$Start<=$End;$Start++)
	{
		echo $Start."<br>";
	}
	
	}
	

?>
</body>
</html>