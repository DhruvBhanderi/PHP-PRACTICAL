<html>
<head>
	<title>operator</title>
	<link rel="stylesheet" type="text/css" href="css/practical-9B.css">
</head>
<body>
	<section>
		<center>
			<h2 style="float: left; margin:30px 0px 0px 20px;">DWPD</h2>
			<h2 style="float:left; margin: 30px 0px 0px 490px">Practical 9(B)</h2>
			<h2 style="float: right; margin: 30px 20px 0px 0px;">166940307503</h2>
			<br><br><br><br>
			<hr>
		</center>
		<?php
			$a=10;
			$b=20;
		?>
<table class="div1"  border = 3>
<th colspan=4>Arithmatic operator</th>
	<tr>	
		<th>A</th>
		<th>operator</th>
		<th>B</th>
		<th>Answer</th>
	</tr>

	<tr>
		<td>10</td>
		<td>+</td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				$c=$a+$b;
				echo"$c<br/>";?>
		</td>
	</tr>

	<tr>
		<td>10</td>
		<td>-</td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				$c=$a-$b;
				echo"$c<br/>";?>		
		</td>
	</tr>

	<tr>
		<td>10</td>
		<td>*</td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				$c=$a*$b;
				echo"$c<br/>";?>
		</td>
	</tr>

	<tr>
		<td>10</td>
		<td>/</td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				$c=$a/$b;
				echo"$c<br/>";?>
		</td>
	</tr>

	<tr>
		<td>10</td>
		<td>--</td>
		<td>-</td>
		<td>
			<?php
				$a=10;
				$c=--$a;
				echo"$c<br/>";?>
		</td>
	</tr>

	<tr>
		<td>10</td>
		<td>++</td>
		<td>-</td>
		<td>
			<?php
				$a=10;
				$c=++$a;
				echo"$c<br/>";?>
		</td>
	</tr>
</table>

<table class="div2"  border = 3>
<th colspan=4>comparision operator</th>
	<tr>	
		<th>A</th>
		<th>operator</th>
		<th>B</th>
		<th>Answer</th>
	</tr>

	<tr>
		<td>10</td>
		<td>==</td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				if($a==$b)
				{
					echo"a is equal to b";
				}
				else
				{
					echo"a is not equal to b";
				}
			?>
		</td>	
	</tr>

	<tr>
		<td>10</td>
		<td>></td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				if($a>$b)
				{
					echo"a is max";
				}
				else
				{
					echo"b is max";
				}
			?>
		</td>	
	</tr>

	<tr>
		<td>10</td>
		<td><</td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				if($a<$b)
				{
					echo"a is min";
				}
				else
				{
					echo"b is min";
				}
			?>
		</td>	
	</tr>

	<tr>
		<td>10</td>
		<td><=</td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				if($a<=$b)
				{
					echo"a is less then or equal to b";
				}
				else
				{
					echo"a is not less then or equal to b";
				}
			?>
		</td>	
	</tr>

	<tr>
		<td>10</td>
		<td>>=</td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				if($a>=$b)
				{
					echo"a is less then or equal to b";
				}
				else
				{
					echo"a not less then or equal to b";
				}
			?>
		</td>	
	</tr>

	<tr>
		<td>10</td>
		<td>!=</td>
		<td>20</td>
		<td>
			<?php
				$a=10;
				$b=20;
				if($a!=$b)
				{
					echo"a is not equal to b";
				}
				else
				{
					echo"a is equal to b";
				}
			?>
		</td>	
	</tr>
</table>

<table class="div3" border = 3>
<th colspan=4>Bitwise Operator</th>
	<tr>
					<th>A</th>
					<th>Operator</th>
					<th>B</th>
					<th>Answer</th>
				</tr>
				<tr>
					<td>13</td>
					<td>&</td>
					<td>22</td>
					<td>
						<?php
							$x=13;
							$y=22;
							echo $x & $y;
?>
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td>|</td>
					<td>11</td>
					<td>
						<?php
							$x=5;
							$y=11;
							echo $x | $y;
						?>
					</td>
				</tr>
			
			</td>
			</tr>
				<tr>
					<td>12</td>
					<td>^</td>
					<td>11</td>
					<td>
						<?php
							$x=12;
							$y=11;
							echo $x ^ $y;
						?>
					</td>
				</tr>
				<tr>
					<td>10</td>
					<td><<</td>
					<td>20</td>
					<td>
						<?php
							$x=12;
							$y=4;
							echo $x << $y;
						?>
					</td>
				<tr>
					<td>8</td>
					<td>>></td>
					<td>3</td>
					<td>
						<?php
							$x=8;
							$y=3;
							echo $x >> $y;
						?>
					</td>
				</tr>
</table>



<table class="div4" border = 3>
<th colspan=4>Logical operator</th>

				<tr>
					<th>A</th>
					<th>Operator</th>
					<th>B</th>
					<th>Answer</th>
				</tr>
				<tr>
					<td>10</td>
					<td>&&</td>
					<td>20</td>
					<td>
						<?php 
							if ($a<20 && $b>10) 
    							echo "Both Conditions are True."; 
							else 
    							echo "Both Conditions are not True."; 
						?>
					</td>
				</tr>
				<tr>
					<td>10</td>
					<td>||</td>
					<td>20</td>
					<td>
						<?php 
							if ($a<20 || $b>30) 
    							echo "Any one Conditions are True."; 
							else 
    							echo "Both Conditions are not True.";
						?>
					</td>
				</tr>
				<tr>
					<td>10</td>
					<td>!!</td>
					<td>20</td>
					<td>
						<?php 
							if($a!=$b)
							{
								echo"True";
							}
							else
							{
								echo"False";
							}
						?>
					</td>
				</tr>
			</table>

<table class="div5" border = 3>
<th colspan=4>Assignment operator</th>

	<tr>
		<th>A</th>
		<th>Operator</th>
		<th>B</th>
		<th>Answer</th>
	</tr>
	<tr>
		<td><?php echo $a; ?></td>
		<td><?php echo "+="; ?></td>
		<td><?php echo $b; ?></td>
		<td><?php echo $a+=$b; ?></td>
	</tr>
	<tr>
		<td><?php echo $a; ?></td>
		<td><?php echo "-="; ?></td>
		<td><?php echo $b; ?></td>
		<td><?php echo $a-=$b; ?></td>
	</tr>
	<tr>
		<td><?php echo $a; ?></td>
		<td><?php echo "*="; ?></td>
		<td><?php echo $b; ?></td>
		<td><?php echo $a*=$b; ?></td>
	</tr>
	<tr>
		<td><?php echo $a; ?></td>
		<td><?php echo "/="; ?></td>
		<td><?php echo $b; ?></td>
		<td><?php echo $a/=$b; ?></td>
	</tr>
	<tr>
		<td><?php echo $a; ?></td>
		<td><?php echo "%="; ?></td>
		<td><?php echo $b; ?></td>
		<td><?php echo $a%=$b; ?></td>
	</tr>
</table>

<table class="div6" border = 3>
<th colspan=4>Condition Operator</th>
	<tr>	
		<th>A</th>
		<th>operator</th>
		<th>B</th>
		<th>Answer</th>
	</tr>

	<tr>
		<td>30</td>
		<td>($a>$b)?$a:$b</td>
		<td>20</td>
		<td>
			<?php
				$a=30;
				$b=20;
				$c=($a>$b)?$a:$b;
				{
					echo"$c";
				}
				
			?>
		</td>	
	</tr>

	<tr>
		<th colspan="4">String operator</th>
	</tr>
		<tr>
			<th>A</th>
			<th>Operator</th>
			<th>B</th>
			<th>Answer</th>
		</tr>
		<tr>
			<td><?php $x="dhruv"; echo $x; ?></td>
			<td><?php echo "+"; ?></td>
			<td><?php $y="bhanderi"; echo $y; ?></td>
			<td><?php echo $x+$y; ?></td>
		</tr>
	
</table>
	</section>
	
</body>
</html>