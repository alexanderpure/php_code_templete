<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP Templete</title>
</head>
<body>
<?php

$username = $fname = $email = $password = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = check_input($_POST['username']);
    $fname = check_input($_POST['fname']);
    $email = check_input($_POST['email']);
    $password = check_input($_POST['password']);
    $gender = check_input($_POST['gender']);
}
    function check_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
    <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method="post">
    Username: <input type="text" name="username">
    <br><br>
    fname: <input type="text" name="fname">
    <br><br>
    Email: <input type="email" name="email">
    <br><br>
    Password: <input type="password" name="password">
    <br><br>
    Gender:
    <input type="radio" name="male" value="male">Male
    <input type="radio" name="female" value="female">Female 
    <input type="radio" name="lgbtq+" value="lgbtq+">LGBTQ+
    <br><br>
    <input type="submit" name="submit" value="submit">
    </form>
    

<?php
echo "<h2>input</h2>";
echo $username;
echo "<br>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
?>
    
</body>
</html>
