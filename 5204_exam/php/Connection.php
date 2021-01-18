<?php
class Connection extends PDO{

  public function __construct($dsn, $username, $passwd){

    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    try {
      parent::__construct($dsn, $username, $passwd, $options);
      // echo "connection";
    } catch (Exception $exception){
      var_dump( $exception . "\n");

      die("No connection" . $exception -> getMessage());
    }
  }

}
