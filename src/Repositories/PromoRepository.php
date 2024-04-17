<?php
namespace src\Repositories;

use PDO;
use src\Models\Database;
use src\Models\Promo;

class PromoRepository
{

  private $DB;

  public function __construct()
  {
    $database = new Database;
    $this->DB = $database->getDB();
  }

  public function getAllPromos()
  {
    $PromoArray = [];

    $sql = "SELECT * FROM aga_promo";
    $stmt = $this->DB->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $PromoArray[] = new Promo($row);
    }

    return $PromoArray;
  }

  public function getPromoById()
  {
    $sql = "SELECT * FROM aga_promo WHERE id_promo = :id_promo ";

    $stmt = $this->DB->prepare($sql);
    $stmt->bindParam(':id_promo');
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS);
    $retour = $stmt->fetch();

    return $retour;
  }

  public function createPromo(Promo $promo)
  {
    $sql = "INSERT INTO aga_promo (id_promo,nom_promo, dateDebut_promo, dateFin_promo, nombre_promo) 
    VALUES (:id_promo, :nom_promo,:dateDebut_promo, :dateFin_promo, :nombre_promo)";

    $stmt = $this->DB->prepare($sql);

    $retour = $stmt->execute([
      ':id_promo' => $promo->getIdPromo(),
      ':nom_promo' => $promo->getNomPromo(),
      ':dateDebut_promo' => $promo->getDateDebutPromo(),
      ':dateFin_promo' => $promo->getDateFinPromo(),
      ':nombre_promo' => $promo->getNombrePromo(),
    ]);
    return $retour;
  }

  public function updatePromo(Promo $promo)
  {
    $sql = "UPDATE aga_promo SET 
    nom_promo = :nom_promo,
    dateDebut_promo =:dateDebut_promo,
    dateFin_promo = :dateFin_promo,
    nombre_promo = :nombre_promo
    WHERE id_promo = :id_promo ";

    $stmt = $this->DB->prepare($sql);

    $retour = $stmt->execute([
      ':id_promo' => $promo->getIdPromo(),
      ':nom_promo' => $promo->getNomPromo(),
      ':dateDebut_promo' => $promo->getDateDebutPromo(),
      ':dateFin_promo' => $promo->getDateFinPromo(),
      ':nombre_promo' => $promo->getNombrePromo(),
    ]);
    return $retour;
  }

  public function deletePromo($IdPromo)
  {
    $sql = "DELETE FROM aga_appartenir WHERE id_promo = :id_promo,
    DELETE FROM aga_cours WHERE id_promo = :id_promo,
    DELETE FROM aga_promo WHERE id_promo = :id_promo";

    $statement = $this->DB->prepare($sql);

    return $statement->execute([':id_promo' => $IdPromo]);

  }
}
