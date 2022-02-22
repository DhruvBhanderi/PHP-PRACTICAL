
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

			session_start();
			$_SESSION['username'] = $email;
			$_SESSION['rid'] = $rid;
			header("location:practical-18(3).php");
		}
		else
		{
			echo "Please check your email id, rider id and password";
		}
	}

?>