  <!--  <fieldset>
      <legend><h2>your detail:</h2></legend>
 -->
	<?php
		
		@$Name = $_POST['name'];
		@$Email = $_POST['email'];
		@$address = $_POST['address'];
		@$Gender = $_POST['gender'];
		@$Field = $_POST['field'];
		@$Branch = $_POST['Branch'];
		@$Username = $_POST['Username'];


	     	echo "<h4>Name:-".$Name."<br><br>";
	        echo "E-mail:-".$Email."<br><br>";
	        echo "Address:-".$address."<br><br>";
	        echo "Gender:-".$Gender."<br><br>";
	        echo "Field:-".$Field."<br><br>";
	        echo "Branch:-".$Branch."<br><br>";
	        echo "Username:-".$Username."<br><br>";
	?>
<!-- </fieldset> -->
