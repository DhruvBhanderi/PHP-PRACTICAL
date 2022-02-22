<html>
<head>
	<title>Practical 14</title>
</head>
<body>
	<h2 style="float: left; margin:30px 0px 0px 20px;">DWPD</h2>
	<h2 style="float:left; margin: 30px 0px 0px 490px">Practical 14</h2>
	<h2 style="float: right; margin: 30px 20px 0px 0px;">166940307503</h2><br>
	<hr width="1320px" color="blue">
	
	<center>
	<form method="POST">
		<input type="text" name="data" placeholder="Please enter digits">
		<input type="submit" name="submit">
	</form>

	<?php 
		
		if(isset($_POST['submit']))
			{
				$a = $_POST['data'];
				$arr = array(1=>"A",2=>"B",3=>"C",4=>"D",5=>"E",6=>"F",7=>"G",8=>"H",9=>"I",10=>"J");
				$a = $arr;
			}
			foreach($a as $val)
			{
				echo $val,"<br/>";
			}
	?>
	</center>
</body>
</html>