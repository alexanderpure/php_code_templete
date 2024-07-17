<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms:Required_Fields</title>
</head>
<style>
   .error {color :red#ff00000;}
</style>
<body>
    <?php
      $unameErr = $fnameErr = $lnameErr = $addErr =$emErr = $pwErr = "";
      $username = $fullname = $lastname = $address = $email = $password = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])){
            $unameErr = "Username is Required";
        }else{
            $username = test_input($_POST["username"]);
        }
        if (empty($_POST["fullname"])){
            $fnameErr = "Fullname is Required";
        }else{
            $fullname = test_input($_POST["fullname"]);
        }
        if (empty($_POST["lastname"])){
            $lnameErr = "Lastname is Required";
        }else{
            $lastname = test_input($_POST["lastname"]);
        }
        if (empty($_POST["address"])){
            $addErr = "Address id Required";
        }else{
            $address = test_input($_POST["address"]);
        }
        if (empty($_POST["email"])) {
            $emErr = "Email is Required";
        }else{
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["password"])){
            $pwErr = "Password Is Required";
        }else{
            $password = test_input($_POST["password"]);
        }

        }
        function test_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
       
      

    
    
    ?>
  


    <form method= "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h1>Register</h1>
        Username: <input type="text" name="username">
        <span class="error"> <?php echo $unameErr;?></span>
        <br><br>
        Fullname: <input type="text" name="fullname">
        <span class="error"> <?php echo $fnameErr;?></span>
        <br><br>
        Lastname: <input type="text" name="lastname">
        <span class="error"> <?php echo $lnameErr;?></span>
        <br><br>
        Address: <input type="text" name="address">
        <span class="error"> <?php echo $addErr;?></span>
        <br><br>
        Email: <input type="email" name="email">
        <span class="error"> <?php echo $emErr;?></span>
        <br><br>
        Password: <input type="password" name="password">
        <span class="error"> <?php echo $pwErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "RESULTS";
    echo $uname;
    echo "<br>";
    echo $fname;
    echo "<br>";
    echo $lname;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
    
    
    
    
    
    ?>
</body>
</html>