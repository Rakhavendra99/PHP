<html>
<style>
	*{color:blue;}
	h2{color:red;}
	
</style>
<body>
<h2> GET, POST, REQUEST</h2>
<form method ="get" action = "get1.php">
	Data1:<input name = "x">
	Data2:<input name = "y">
	<input type = "submit" name ="submit" value = "test">
	</form>
	
<?php
	if(!empty($_GET))
	{
	echo $_GET['x'],$_GET['y'],$_GET['submit'];
	}


?>
</body>
</html>