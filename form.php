<!DOCTYPE HTML>
<html>
<head>
      <style>
        .error {color: red;}
      </style>
</head>

<body>  
  
     <fieldset>
      <legend><h2>Enter your detail:</h2></legend>

    <?php
    echo "<pre>";
    //print_r($_SERVER);

    // define variables and set to empty values
      $nameErr = $emailErr =  $addressErr = $genderErr = $fieldsErr = $branchErr = $UserNameErr = $passwordErr = "";
      $name = $email = $address = $gender = $field = $Branch = $UserName = $password = "";

      if($_SERVER["REQUEST_METHOD"] == "POST") 
      {
        

        if(empty($_POST["name"])) {
           $nameErr = "Name is required";
        } 
        else {
          $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } 
        else {
          $email = test_input($_POST["email"]);
        }

        if (empty($_POST["address"])) {
          $address = "";
        } 
        else {
          $address = test_input($_POST["address"]);
        }

         if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
        } 
        else {
          $gender = test_input($_POST["gender"]);
        }

         if (empty($_POST["field"])) {
          $fieldsErr = "fild is required";
        } 
        else {
          $field = test_input($_POST["field"]);
        }

        if (empty($_POST["Branch"])) {
          $branchErr = "Branch is required";
        } 
        else {
          $Branch = test_input($_POST["Branch"]);
        }
  
        if (empty($_POST["UserName"])) {
          $UserName = "";
        } 
        else {
          $UserName = test_input($_POST["UserName"]);
        }

        if (empty($_POST["password"])) {
          $passwordErr = "password is required";
        } 
        else {
          $password = test_input($_POST["password"]);
        }

        if (empty($_POST["copassword"])) {
          $passwordErr = "password is required";
        } 
        else {
          $password = test_input($_POST["copassword"]);
        }

      }

      function test_input($data) 
      {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
       // echo htmlspecialchars($_SERVER["PHP_SELF"]);
      }
   ?>
      
      <form method="post" action="">  
        
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        
        E-mail: <input type="email" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
       
        address: <textarea name="address" rows="3" cols="25"></textarea>
        <span class="error">* <?php echo $addressErr;?></span>
        <br><br>
      
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>

        Field:-<input type="checkbox" name="field" value="Degree">Degree</input><br>
        <input type="checkbox" name="field" value="Diploma">Diploma</input><br>
        <input type="checkbox" name="field" value="Architecure">Architecure</input>
        <span class="error">* <?php echo $fieldsErr;?></span>
        <br><br>

        Branch:-<select name="Branch">
          <option>Computer</option>
          <option>IT</option>
          <option>Electrical</option>
        </select>
        <span class="error">* <?php echo $branchErr;?></span>
        <br><br>

        UserName: <input type="text" name="Username">
        <span class="error"><?php echo $UserNameErr;?></span>
        <br><br>
        
         Create password: <input type="password" name="password">
        <span class="error">* <?php echo $passwordErr;?></span>
        <br><br>

         confirm password: <input type="password" name="copassword">
        <span class="error">* <?php echo $passwordErr;?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit"> 
        
   </fieldset>
</form>
</body>
</html>