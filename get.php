<html>
<style>
	*{color:blue;}
	h2{color:red;}
	
</style>
<body>
<h2> GET, POST, REQUEST</h2>
<form method ="get" action = "get.php">
	Data1:<input name = "x">
	Data2:<input name = "y">
	<input type = "submit" name ="submit" value = "test">
	</form>
	
<?php
	print_r($_GET);


?>
</body>
</html>