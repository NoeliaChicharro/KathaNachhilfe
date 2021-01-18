<?php

class LoginValidation{

  public function validateUser($username, $password, $con){
    $query = "SELECT * FROM `user` WHERE `username` = (:username) AND `password` = (:password)";

    $stmt = $con -> prepare($query);
    $stmt -> bindParam(":username", $username);
    $stmt -> bindParam(":password", $password);

    $user = $stmt -> fetch();

    echo $user;
  }
}
