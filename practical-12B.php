<html>
<head>
	<title>GREATEST OF THREE NUMBERS</title>
</head>
<body>
<font size=5>LARGEST OF THREE NUMBERS</font>
<br/>
<br/>

ENTER FIRST NUMBER:<input type="text" name="t1">
<br><br>
ENTER SECOND NUMBER:<input type="text" name="t2">
<br><br>
ENTER THIRD NUMBER:<input type="text" name="t3">
<br><br>
<input type="submit" value="CHECK" name="submit">

<?php
if(isset($_POST["submit"]))
{
$n1=$_POST["t1"];
$n2=$_POST["t2"];
$n3=$_POST["t3"];
if($n1>$n2)
{
if($n1>$n3)
echo "$n1 is greater";
else
 echo "$n3 is greater";
}
else if($n2>$n3)
{
if($n2>$n1)
{
echo "$n2 is greater";
}
else
{
echo "$n3 is greater";
}}}
?>
</form>
</body>
</html>
