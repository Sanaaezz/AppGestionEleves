<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;
use src\Models\Utilisateur;


class UtilisateurRepository
{

  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();
  }

  public function getUtilisateurbyEmail($email): Utilisateur
  {
    $sql = "SELECT * FROM aga_utilisateur WHERE email_utilisateur = :email";

    $statement = $this->DB->prepare($sql);
    $statement->bindParam(':email', $email);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS);
    $retour = $statement->fetch();

    return $retour;
  }

  public function getUtilisateurbyId($IdUtilisateur)
  {
    $sql = "SELECT * FROM aga_utilisateur WHERE id_utilisateur = :idUtilisateur";

    $statement = $this->DB->prepare($sql);
    $statement->bindParam(':idUtilisateur', $IdUtilisateur);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS, Utilisateur::class);
    $retour = $statement->fetch();

    return $retour;
  }

  public function login($email, $password)
  {
    $sql = "SELECT * FROM aga_utilisateur
        WHERE email_utilisateur = :email_utilisateur AND  mdp_utilisateur = :mdp_utilisateur";

    $statement = $this->DB->prepare($sql);
    $statement->execute([
      ":email_utilisateur" => $email,
      ":mdp_utilisateur" => $password

    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
  }
}
