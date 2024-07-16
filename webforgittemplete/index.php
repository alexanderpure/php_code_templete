<?php

if(isset($_POST["login"])) {
    $username = $_POST["name"];
    $password = sha1($_POST["password"]);

    header("content-type application/json");
    return json_encode($username, $password);
}


if($_SERVER["REQUSET_METHOD"] === "PUT") {

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Website: index</title>
</head>
<body>
    
<form action="welcome.php" method="POST">
    <input type="hidden" name="login">

    name: <input type="text" name="name"><br>
    email: <input type="email" name="email"><br>
    <input type="submit">
</form>



</body>
</html>