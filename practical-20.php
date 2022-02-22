<?php
	$con = mysqli_connect("localhost","root","") OR die('Error:'.mysqli_connect_error());

	$db = mysqli_select_db($con,"regestration form") OR die('Error:'.mysqli_error($con));
?>