<?php

class Connection extends PDO{

  /**
   * Connection constructor.
   */
  public function __construct($host, $dbUser, $dbName, $dbPassword){

    $dsn = "mysql:dbname=" . $dbName . ";host=" . $host;
    echo $dsn;

    $option = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    try{
      parent::__construct($dsn, $dbUser, $dbPassword, $option);
    } catch (Exception $e){

      die("No connection ". $e -> getMessage());
    }
  }

  public function readMethod() {
    $query = "SELECT * FROM user";
    $stmt = $this -> prepare($query);
    $stmt -> execute();
    $result = $stmt -> fetchAll();
    return $result;
  }

  public function getSingleRecord($usernameInput) {
    $query = "SELECT * FROM user WHERE username = :username";
    $stmt = $this -> prepare($query);
    $stmt -> bindParam(':username', $usernameInput, PDO::PARAM_INT);
    $stmt -> execute();
    $result = $stmt -> fetch();
    return $result;
  }
}
