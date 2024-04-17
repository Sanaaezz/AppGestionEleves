<?php

namespace src\Repositories;

use PDO;
use src\Models\Cours;
use src\Models\Database;

class CoursRepository
{
  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();
  }

  public function getAllCours()
  {

    $CoursArray = [];

    $sql = "SELECT * FROM aga_cours";
    $stmt = $this->DB->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $CoursArray[] = new Cours($row);
    }

    return $CoursArray;
  }

  public function getCoursById()
  {
    $sql = "SELECT * FROM aga_cours WHERE id_promo = :id_cours ";

    $stmt = $this->DB->prepare($sql);
    $stmt->bindParam(':id_cours');
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS);
    $retour = $stmt->fetch();

    return $retour;
  }


  public function createCours(Cours $cours)
  {
    $sql = "INSERT INTO aga_cours (id_cours,nom_cours, date_cours, heureDebut_cours, heureFin_cours, code_cours, id_promo) 
    VALUES (:id_cours, :nom_cours, :date_cours, :heureDebut_cours, :heureFin_cours, :code_cours, :id_promo)";

    $stmt = $this->DB->prepare($sql);

    $retour = $stmt->execute([
      ':id_cours' => $cours->getIdcours(),
      ':nom_cours' => $cours->getNomcours(),
      ':date_cours' => $cours->getDateCours(),
      ':heureDebut_cours' => $cours->getHeureDebutCours(),
      ':heureFin_cours' => $cours->getHeureFinCours(),
      ':code_cours' => $cours->getCodecours(),
      ':id_promo' => $cours->getIdPromo(),
    ]);
    return $retour;
  }


  public function updateCours(Cours $cours)
  {
    $sql = "UPDATE aga_cours SET 
    nom_cours = :nom_cours,
    date_cours =:date_cours,
    heureDebut_cours =:heureDebut_cours,
    heureFin_cours = :heureFin_cours,
    code_cours = :code_cours,
    id_promo = :id_promo 
    WHERE id_cours = :id_cours ";

    $stmt = $this->DB->prepare($sql);

    $retour = $stmt->execute([
      ':id_cours' => $cours->getIdcours(),
      ':nom_cours' => $cours->getNomcours(),
      ':date_cours' => $cours->getDateCours(),
      ':heureDebut_cours' => $cours->getHeureDebutCours(),
      ':heureFin_cours' => $cours->getHeureFinCours(),
      ':code_cours' => $cours->getCodecours(),
      ':id_promo' => $cours->getIdPromo(),
    ]);
    return $retour;
  }


  public function deleteCours($IdCours)
  {
    $sql = "DELETE FROM aga_present WHERE id_cours = :id_cours,
    DELETE FROM aga_cours WHERE id_cours = :id_cours";

    $statement = $this->DB->prepare($sql);

    return $statement->execute([':id_cours' => $IdCours]);
  }
}
