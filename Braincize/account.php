<?php
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Account</title>
    </head>
    <body>
        <a href="logout.php">Logout</a>
        <h1>ACCOUNT PAGE</h1>
        <br>
        <h3>Welcome</h3>
    </body>
</html>