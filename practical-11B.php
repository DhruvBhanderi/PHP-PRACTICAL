<!DOCTYPE html>
<html>
<head>
	<title>factorial</title>
</head>
<body>
		<h2 style="float: left; margin:30px 0px 0px 20px;">DWPD</h2>
		<h2 style="float:left; margin: 30px 0px 0px 490px">Practical 11(B)</h2>
		<h2 style="float: right; margin: 30px 20px 0px 0px;">166940307503</h2><br>
		<hr width="1320px" color="blue">
		<center><h2>
	<form method="GET">
		Number: <input type="text" name="sub">
		<input type="submit" name="submit">
	</form>
	<?php
		@$num = $_GET['sub'];
		$factorial=1;
		for($x=$num; $x>=1; $x--)
		{
			$factorial=$factorial*$x;
		}
		echo "The factorial of $num is : $factorial";
	?>
</h2>
</body>
</html>