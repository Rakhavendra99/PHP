<html>
<style>
	*{color:blue;}
	h2{color:red;}
	
</style>
<body>
<h2> GET, POST, REQUEST</h2>
<form method ="POST" action = "request.php">
	Data1:<input name = "x">
	Data2:<input name = "y">
	<input type = "submit" name ="submit" value = "test">
	</form>
	
<?php
	if(!empty($_REQUEST))
	{
	echo $_REQUEST['x'],$_REQUEST['y'],$_REQUEST['submit'];
	}


?>
</body>
</html>