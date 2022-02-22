<?php
	$myuser="dhruv@gmail.com";
	$rid="1234";
	$mypass="123";
	if(isset($_POST['submit']))
	{
		$email = $_POST['username'];
		$rid= $_POST['rid'];
		$pass = $_POST['pass'];
		if($email == $myuser and $rid == $rid)
		{
			$rem=$_POST['ree'];
			if(isset($_POST['ree']))
			{
				setcookie('username', $email, time()+60*60*7);
				setcookie('rid', $rid, time()+60*60*7);
				echo "cookies created";
			}
			session_start();
			$_SESSION['username'] = $email;
			$_SESSION['rid'] = $rid;
			header:("location: practical-17(3)");
		}
		else
		{
			echo "Please check your email id, rider id and password";
		}
	}

?>