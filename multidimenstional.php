<style>
*{color:blue;}
</style>
<?php
	$x = array( array("A","B","C","D"),
				array("P","Q","R","S"),
				array("W","X","Y","Z")
				);
	//var_dump($x);
	echo count($x);
	echo count($x[0]);
	
	for($i =0; $i<count($x);$i++)
	{
		echo "<br>";
		for($j =0; $j<count($x[$i]);$j++)
		{
		echo $x[$i][$j];
		}
	}
	echo "<br>";
	
	$x = array(array("name"=>"rakhav","age"=>21),
				array("name"=>"pravin","age"=>7),
				array("name"=>"dhaneesh","age"=>7)
				);
				var_dump($x);
				foreach($x as $index)
				{
					echo "<br>";
					foreach ($index as $values)
					{
						echo $values;
				}}

?>