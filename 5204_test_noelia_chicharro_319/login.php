<?php
require ("backend/db.properties.php");
require ("backend/Connection.class.php");
require ("backend/Login.class.php");

$login = new Login();

$username = "";
$password = "";
$submit = isset($_POST["submit"]);

if ($submit){

  $username = $_POST["username"];
  $password = $_POST["password"];

  if (!empty($username) && !empty($password)){
    $login ->getUser($username, $password);
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
      <button type="submit">Go!</button>
    </form>
  </div>
</body>
</html>
