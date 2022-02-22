<html>
<body>
	<h2 style="float: left; margin:30px 0px 0px 20px;">DWPD</h2>
	<h2 style="float:left; margin: 30px 0px 0px 520px">Practical 14</h2>
	<h2 style="float: right; margin: 30px 20px 0px 0px;">166940307503</h2><br>
	<hr width="1320px" color="blue">

      <center>
          <?php

		$a = 10;
		$b = 20;

	function val($i,$j)
	 {
		$c = $i;
		$i = $j;
		$j = $c;
	
		echo "After Swapping<br />"; echo "i : ".$i."<br />";
		echo "j : ".$j."<br />";
	}
	function ref(&$i,&$j) 
	{
		$c = $i;
		$i = $j;
		$j = $c;
	
		echo "After Swapping<br />"; echo "i : ".$i."<br />";
		echo "j : ".$j."<br />";
	}
	echo "Pass By Value<br />"; echo "Before Swapping<br />"; echo "i : ".$a."<br />";
	echo "j : ".$b."<br />"; val($a,$b);

	echo "<br /><br />Pass By Reference<br />"; echo "Before Swapping<br />";
	echo "i : ".$a."<br />";

	echo "j : ".$b."<br />"; ref($a,$b);
          ?>
      </center>
</body>
</html>
