<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>

	<?php
		echo "<pre>";
		$car = array(0=>"volvo",1=>"bmw",2=>"toyota");
		print_r($car);

		echo $car[1],"<br/>";

		for ($i=0; $i <3 ; $i++) 
		{ 
			echo $car[$i],"<br/>";
		}
		array_push($car,"jeep","ducati");
		print_r($car)	;
		echo $car[3];
		echo "<br/>";

		echo array_search("bmw",$car);
		
		echo "<br/>";

		if(in_array("bmw",$car))
		{
			echo "match found <br/>";
		}
		else
		{
			echo "match not found";
		}

		
	?>
</body>
</html>