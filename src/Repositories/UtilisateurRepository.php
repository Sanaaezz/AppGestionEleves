<?php
namespace src\Repositories;

use PDO;
use src\Models\Database;
use src\Models\Utilisateur as ModelsUtilisateur;
use Utilisateur;

class UtilisateurRepository
{

private $DB;

public function __construct()
{
$database = new Database;
$this->DB = $database->getDB();

require_once __DIR__ . '/../Models/Database.php';
}

  public function getUtilisateurbyEmail(string $email)
  {
    $sql = "SELECT * FROM aga_utilisateur WHERE Email = :email";

    $statement = $this->DB->prepare($sql);
    $statement->bindParam(':email', $email);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS, 'utilisateur');
    $retour = $statement->fetch();

    return $retour;
  }

  public function getUtilisateurbyId()
  {
    $sql = "SELECT * FROM aga_utilisateur WHERE id_utilisateur = :idUtilisateur";

    $statement = $this->DB->prepare($sql);
    $statement->bindParam(':idUtilisateur');
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS, ModelsUtilisateur::class);
    $retour = $statement->fetch();

    return $retour;
  }

  
  
  
  
  public function login(string $email, string $password)
  {
    
    $sql = "SELECT * FROM aga_utilisateur WHERE EMAIL = :email";
    
    $statement = $this->DB->prepare($sql);
    $statement->bindParam(':email', $email);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_CLASS, 'utilisateur');
    $utilisateur = $statement->fetch();
    
    if ($utilisateur) {
      if (password_verify($password, $utilisateur->getMdpUtilisateur())) {
        return $statement->rowCount() == 1;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
  
  // public function creerUtilisateur( $utilisateur): bool
  // {
  // $sql = "INSERT INTO aga_utilisateur (Nom_utilisateur, Prenom_utilisateur, Email_utilisateur,Mdp_utilisateur, ActiviteCompte_utilisateur, Id_role, ) 
  // VALUES (:Nom_utilisateur, :Prenom_utilisateur, :Email_utilisateur, :Mdp_utilisateur, :ActiviteCompte_utilisateur, :Id_Role)";
  
  // $statement = $this->DB->prepare($sql);
  
  // $retour = $statement->execute([
  // ':Nom_utilisateur' => $utilisateur->getNom_user(),
  // ":Prenom_user" => $utilisateur->getPrenom_utilisateur(),
  // ":Email_utilisateur" => $utilisateur->getEmail_utilisateur(),
  // ":Mdp_utilisateur" => $utilisateur->getMdp_utilisateur(),
  // ":ActiviteCompte_utilisateur"=> $utilisateur ->getActiviteCompte_utilisateur(),
  // ":Id_role" => $utilisateur->getId_role()
  // ]);
  
  // return $retour;
  // }



}