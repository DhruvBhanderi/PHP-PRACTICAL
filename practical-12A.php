<!DOCTYPE html>
<html>
<head>
	<title>student info</title>
</head>
<body>
		<h2 style="float: left; margin:30px 0px 0px 20px;">DWPD</h2>
		<h2 style="float:left; margin: 30px 0px 0px 490px">Practical 12</h2>
		<h2 style="float: right; margin: 30px 20px 0px 0px;">166940307503</h2><br>
		<hr width="1320px" color="blue">
		<center><h2>
	
	<form action="#" method="get">
		name :-
 		<input type="text" name="nam"><br><br>
		
		sub 1 :-
		<input type="text" name="sub1"><br><br>

		sub 2 :-
		<input type="text" name="sub2"><br><br>
		
		sub 3 :-
		<input type="text" name="sub3"><br><br>

		<input type="submit" name="submit"><br><br>
			
	</form>
		
		<?php 
			$name=$_GET['nam'];

			$sub1=$_GET['sub1'];

			$sub2=$_GET['sub2'];

			$sub3=$_GET['sub3'];

			echo "student name : $name <br/><br/>";

			echo "sub 1 : $sub1 <br/><br/>";	

			echo "sub 2 : $sub2 <br/><br/>";

			echo "sub 3 : $sub3 <br/><br/>";

			$sum = $sub1+$sub2+$sub3;
			echo "total marks: $sum <br/><br/>";

			$pr = $sum*100/210;
			echo "pr: $pr <br/><br/>";

			if ($pr >= 90) 
			{
				echo "Grade A";
			}

			elseif ($pr >= 70)
			{
				echo " Grade B";
			}

			elseif ($pr >= 50) 
			{
				echo "Grade C";
			}

			else
			{
				echo "fail";
			}
		?>
</body>
</html>