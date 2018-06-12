<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 12.6.2018 г.
 * Time: 10:19
 */

class Database {
  private $host;
  private $user;
  private $password;
  private $dbname;

  // Creating the database
  public function __construct(string $host, string $user, string $password, string $dbname)
  {
    $this->host = $host;
    $this->user = $user;
    $this->password = $password;
    $this->dbname = $dbname;
  }

  // Creating the connection to the database
  public function connection(){
    return new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password);
  }

}