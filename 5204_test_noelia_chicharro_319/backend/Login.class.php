<?php

class Login{

  public function getUser($username, $userPassword){
    $query = "SELECT * FROM `user` WHERE `username`= (:username) AND `password`=(:password)";

    $stmt = $this -> prepate($query);
    $stmt -> bindParam(":username", $username);
    $stmt -> bindParam(":password", $userPassword);

    $user = $stmt -> fetch();

    echo $user;
  }
}
