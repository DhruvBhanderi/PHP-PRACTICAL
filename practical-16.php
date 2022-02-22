
<html>
<head>
	<title>PHP Form</title>
	<link rel="stylesheet" type="text/css" href="css/practical-16.css">
</head>
<body>
	<h2 style="float: left; margin:30px 0px 0px 20px;">DWPD</h2>
	<h2 style="float:left; margin: 30px 0px 0px 490px">Practical 16</h2>
	<h2 style="float: right; margin: 30px 20px 0px 0px;">166940307503</h2><br>
	<hr width="1320px" color="blue">
	 <fieldset>
      <legend><h2>REGESTRATION FORM:</h2></legend>

	<form method="POST" action="formdata.php">
	<table>
		<tr>
			<td>Name:-<td id="a"><br><input type="text" name="name" required><br><br></td></td>
		</tr>
		<tr>
			<td>Email:-<td id="a"><input type="email" name="email" required><br><br></td></td>
		</tr>
		<tr>
			<td>Address:-<td id="a"><textarea name="address" rows="4" cols="20" required></textarea><br><br></td></td>
		</tr>
		<tr>
			<td>Gender:-<td id="a"><input type="radio" name="Gender" value="maie">male</input>
			<input type="radio" name="Gender" value="femaie">female</input><br><br></td></td>
		</tr>

		<tr>
			<td>field:-<td id="a"><input type="checkbox" name="fild" value="Degree">Degree</input><br>
			<input type="checkbox" name="fild" value="Diploma">Diploma</input><br>
			<input type="checkbox" name="fild" value="Architecure">Architecure</input><br><br></td></td>
		</tr>

		<tr>
		<td>Branch:-<td id="a"><select name="Branch">
			<option>Computer</option>
			<option>IT</option>
			<option>Electrical</option>
		</select><br><br></td></td>
		</tr>
		<tr>
			<td>Username:-<td id="a"><input type="text" name="username" required><br></td>
		</tr>
		<tr>
			<td>Create password:-<td id="a"><br><input type="password" name="password" maxlength="10"><br><br>
			</td></td>
		</tr>
		<tr>
			<td>Confirm password:-<td id="a"><input type="password" name="cpassword" maxlength="10"></td></td>
		</tr>
		<tr class="b">
			<center>
				<td class="c"><br><input type="submit" name="submit" value="submit"></td>	
			</center>
		</tr>
		
	</table>
	</form>
	
		<p style="color: red;">Note:- Please compare your password with your conform password if they both are not same then page might get reset!!!!</p>
	 </fieldset>
</body>
</html>