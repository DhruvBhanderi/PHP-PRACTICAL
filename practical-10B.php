<html>
<head>
	<title>settype</title>
</head>
<body>

	<h2 style="float: left; margin:30px 0px 0px 20px;">DWPD</h2>
	<h2 style="float:left; margin: 30px 0px 0px 490px">Practical 10(B)</h2>
	<h2 style="float: right; margin: 30px 20px 0px 0px;">166940307503</h2><br>
	<hr width="1320px" color="blue">
	<center><h2>		
	<?php
 
		$a = "123xyz";
		$b = 567;
		$c = true;
		
		settype($a, "integer");
		settype($b, "float");
		settype($c, "string");
		
		echo "Settype:-";
		echo $a."<br/>";
		echo "Settype:-";
		echo $b."<br/>";
		echo "Settype:-";
		echo $c."<br/>";
	?></h2>
	</center>
</body>
</html>