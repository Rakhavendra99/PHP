<html>
<style>
	*{color:blue;}
	h2{color:red;}
	
</style>
<body>
<h2> GET, POST, REQUEST</h2>
<form method ="POST" action = "nested.php">
	Enter salary:<input name = "x">
	<input type = "submit" name ="submit" value = "test">
	</form>
	
<?php
	 if(!empty($_REQUEST))
	 {
		 $data1 = $_REQUEST['x'];
		 if($data1 > 0 && $data1<=1000)
		 {
			 echo "Your corrent salary:". $data1+100;
		 }
		 else if ($data1>1000 && $data1 <=5000)
		 {
			 echo "Your corrent salary:". $data1+200;
		 }
		 else if ($data1> 5000 && $data1 <=10000)
		 {
			 echo "your corrent salary:". $data1+300;
		 }
		 else 
		 {
			 echo "You are not eligile for this boness offer";
		 }
	 }
	

?>
</body>
</html>