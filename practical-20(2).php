<?php
	include('practical-20.php');
	if(isset($_POST['submit']))
	{
		$Name = mysqli_real_escape_string($con,$_POST['name']);
		$Address = mysqli_real_escape_string($con,$_POST['address']);
		$Email = mysqli_real_escape_string($con,$_POST['email']);
		$Gender = mysqli_real_escape_string($con,$_POST['Gender']);
		$Fild = mysqli_real_escape_string($con,$_POST['fild']);
		$Branch = mysqli_real_escape_string($con,$_POST['Branch']);
		$Username = mysqli_real_escape_string($con,$_POST['username']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

		if($Name=="" && $Address=="" && $Email=="" && $Gender=="" && $Branch=="" && $Username=="" && $password=="")
		{
			die('Error:Something gone wrong');
		}
		else
		{
			$q = "INSERT INTO data_registration (name,address,email,Gender,field,Branch,username,create_password,confirm_password) 
			VALUES('$Name','$Address','$Email','$Gender','$Fild','$Branch','$Username','$password','$cpassword')";

			$cmd = mysqli_query($con,$q)OR die('Error:'.mysqli_error($con));
		}
		header('location:practical-20(1).php');
	}
	else
	{
		header('location:practical-20(1).php');
	}
?>