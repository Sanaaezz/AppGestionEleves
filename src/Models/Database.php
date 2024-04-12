<?php

namespace src\Models;

use Exception;
use PDO;
use PDOException;
// verifier le \ devant PDO

final class Database
{
  private $DB;
  private $config;

  public function __construct()
  {
    $this->config = __DIR__ . '/../../config.php';
    require_once $this->config ;

    $this->connexionDB();
  }




  private function connexionDB(): void
  {
    try {
      $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
      $this->DB = new PDO($dsn, DB_USER, DB_PWD);
      echo"database";
    } catch (PDOException $error) {
      // throw new Exception( "erreur:" . $error->getMessage());
      echo "Quelque chose s'est mal passé : " . $error->getMessage();
    }
  }

  public function getDB()
  {
    return $this->DB;
 
  }


}
