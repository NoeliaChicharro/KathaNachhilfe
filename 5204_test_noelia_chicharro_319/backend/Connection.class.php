<?php

class Connection extends PDO{


  /**
   * Connection constructor.
   */
  public function __construct($host, $dbUser, $dbName, $dbPassword){

    $dns = "mysql:host=" . $host . ";dbname=" . $dbName . ";charset=utf8";

    $option = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    try{
      parent::__construct($dns, $dbUser, $dbPassword, $option);
    } catch (Exception $e){
      die("No connection ". $e->getMessage);
    }
  }
}
