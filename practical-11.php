<html>
	<head>
		<title>Practical 12</title>
	</head>
	<body>
		<h2 style="float: left; margin:30px 0px 0px 20px;">DWPD</h2>
		<h2 style="float:left; margin: 30px 0px 0px 490px">Practical 11</h2>
		<h2 style="float: right; margin: 30px 20px 0px 0px;">166940307503</h2><br>
		<hr width="1320px" color="blue">
		<center><h2>
		<?php

			$a=0;
			$b=1;
			$n=10;

			echo"<h1>The Fibonacci Series of 1 to 10 number is:- ";
			echo $a, '  ', $b, '  ';

			for($i=2; $i<=$n; $i++)
			{
				$c=$a+$b;
				echo $c,'  ';
				$a=$b;
				$b=$c;
			}
		?>
	</body>
</html>