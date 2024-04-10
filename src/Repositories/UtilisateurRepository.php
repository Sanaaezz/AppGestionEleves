<?php

use src\Models\Database;

class UtilisateurRepositories
{

private $DB;

public function __construct()
{
$database = new Database;
$this->DB = $database->getDB();

require_once __DIR__ . '/../Models/Database.php';
}


public function creerUtilisateur( $utilisateur): bool
{
$sql = "INSERT INTO aga_utilisateur (Nom_utilisateur, Prenom_utilisateur, Email_utilisateur,Mdp_utilisateur, ActiviteCompte_utilisateur, Id_role, ) 
VALUES (:Nom_utilisateur, :Prenom_utilisateur, :Email_utilisateur, :Mdp_utilisateur, :ActiviteCompte_utilisateur, :Id_Role)";

$statement = $this->DB->prepare($sql);

$retour = $statement->execute([
':Nom_utilisateur' => $utilisateur->getNom_user(),
":Prenom_user" => $utilisateur->getPrenom_utilisateur(),
":Email_utilisateur" => $utilisateur->getEmail_utilisateur(),
":Mdp_utilisateur" => $utilisateur->getMdp_utilisateur(),
":ActiviteCompte_utilisateur"=> $utilisateur ->getActiviteCompte_utilisateur(),
":Id_role" => $utilisateur->getId_role()
]);

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
if (password_verify($password, $utilisateur->getMot_de_passe())) {
return $statement->rowCount() == 1;
} else {
return false;
}
} else {
return false;
}
}
}