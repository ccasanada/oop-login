<?php
session_start();

class Connection{
  public $host = "localhost";
  public $user = "root";
  public $password = "";
  public $dbname = "databasembakery";
  public $conn;

  public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
  }
}
?>