<html>
<head>
	<title>Practical 13</title>
</head>
<body>
	<h2 style="float: left; margin:30px 0px 0px 20px;">DWPD</h2>
	<h2 style="float:left; margin: 30px 0px 0px 490px">Practical 13</h2>
	<h2 style="float: right; margin: 30px 20px 0px 0px;">166940307503</h2><br>
	<hr width="1320px" color="blue">
	<?php 
		$a=array(array(1,3), array(2,4));
		$b=array(array(2,4), array(1,8));
	?>
	<center>

	<table border=4px>
	<tr>
		<th>Matrix 1</th>
		<th rowspan="2">+</th>
		<th>Matrix 2</th>
		<th rowspan="2">=</th>
		<th>Addition</th>
	</tr>
	<tr>
		<td><?php 
			for($i=0;$i<2;$i++)
			{
				for($j=0;$j<2;$j++)
				{
					echo $a[$i][$j], " ";
				}
				echo "<br/>";
			}
			?></td>
		<td><?php 
			for($i=0;$i<2;$i++)
			{
				for($j=0;$j<2;$j++)
				{
					echo $b[$i][$j], " ";
				}
				echo "<br/>";
			}
			?></td>
		<td><?php 
			for($i=0;$i<2;$i++)
			{
				for($j=0;$j<2;$j++)
				{
					echo $a[$i][$j]+$b[$i][$j], " ";
				}
				echo "<br/>";
			}
			?></td>
	</tr>
	</table>
	</center>
	
</body>
</html>