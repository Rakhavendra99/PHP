<html>
<style>
	*{color:blue;}
	h2{color:red;}
	
</style>
<body>
<h2> GET, POST, REQUEST</h2>
<form method ="POST" action = "switch.php">
	Enter 1 - 3 value:<input name = "x">
	<input type = "submit" name ="submit" value = "test">
	</form>
	
<?php
	if(!empty($_REQUEST))
	{
		$date1 = $_REQUEST['x'];
		switch($date1)
		{
			case 1: echo "PHP";break;
			case 2: echo "HTML";break;
			case 3: echo "CSS"; break;
			default : echo "Enter 1-3 number";
		}
	}
	

?>
</body>
</html>