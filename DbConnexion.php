<?php

namespace DbConnexion;

class DbConnexion
{
  private $host   = "localhost";
  private $login  = "app_gestion_ap";
  private $pass   = "app_gestion_ap";
  private $bdd    = "app_gestion_ap";
  private $pdo;

  function __construct()
  {
    try {
      $this->pdo = new \PDO(
        "mysql:host={$this->host};
      dbname={$this->bdd};
      charset=utf8",
        $this->login,
        $this->pass
      );
    } catch (\PDOException $e) {
      die("pas de connexion a DB");
    }
  }

  public function getPDO()
  {
    return $this->pdo;
  }
}

