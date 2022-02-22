
<html>
<head>
	<title>Data</title>
	<link rel="stylesheet" type="text/css" href="css/practical-16.css">
</head>
<body>
	<fieldset class="div2">
      <legend><h2>your detail is:</h2></legend>
<table class="div1"><tr>
	<td>
	<?php
		@$Name = $_POST['name'];
		@$Address = $_POST['address'];
		@$Email = $_POST['email'];
		@$Gender = $_POST['Gender'];
		@$Fild = $_POST['fild'];
		@$Branch = $_POST['Branch'];
		@$Username = $_POST['username'];
		@$password = $_POST['password'];
		@$cpassword = $_POST['cpassword'];
		

		if ($password == $cpassword) 
		{

		echo "<b>Name:-</b>".$Name."<br/><br/>";
		echo "<b>Address:-</b>".$Address."<br/><br/>";
		echo "<b>Email:-</b>".$Email."<br/><br/>";
		echo "<b>Gender:-</b>".$Gender."<br/><br/>";
		echo "<b>Field:-</b>".$Fild."<br/><br/>";
		echo "<b>Branch:-</b>".$Branch."<br/><br/>";
		echo "<b>Username:-</b>".$Username."<br/><br/>";
		}	
		else
		{
		 	header('location:practical-16.php');

		}	
	?>
</td>
	</tr>
</table>
		<footer>
			<?php
				date_default_timezone_set("Etc/GMT+6");
				echo "time is = ".date("h:i:sa")."<br/>";
				echo "today date is= ".date("d-m-y")."<br/>";
			?>
		</footer>
</fieldset>
</body>
</html>