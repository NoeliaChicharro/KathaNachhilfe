<?php
require ("php/Connection.php");
require ("php/LoginValidation.php");

/* DB Variables */
$dsn = "mysql:dbname=nachhilfeKatha;host=localhost";
$username = "nachhilfeKatha";
$passw = "nachhilfeKatha";
$con = $dsn.$username.$passw;

/* Instances */
$connection = new Connection($dsn, $username, $passw);
$loginValidation = new LoginValidation();

$inputUsername = "";
$inputPassword = "";
$submit = isset($_POST["submit"]);

if ($submit){
  $inputUsername = $_POST["username"];
  $inputPassword = $_POST["password"];

  if (!empty($inputUsername) && !empty($inputPassword)){
    echo "everything fine";

    $loginValidation -> validateUser($inputUsername, $inputPassword, $con);

  } else {
    echo "Please enter a name and a password";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-wrapper">
    <form class="login-form" method="post">
      <h2>Log in to the system</h2>
      <label for="username">Username</label>
      <input id="username" type="text" name="username">
      <label for="password">Password</label>
      <input id="password" type="password" name="password">
      <button type="submit" name="submit">Submit!</button>
    </form>
  </div>
</body>
</html>
