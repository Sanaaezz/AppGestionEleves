<?php

use src\Services\Hydratation;

class Utilisateur{
  private $id_utilisateur;
  private $nom_utilisateur;
  private $prenom_utilisateur;
  private $email_utilisateur;
  private $mdp_utilisateur;
  private $activiteCompte_utilisateur;
  private $id_role;

  use Hydratation;

  /**
   * Get the value of id_utilisateur
   */
  public function getIdUtilisateur()
  {
    return $this->id_utilisateur;
  }

  /**
   * Set the value of id_utilisateur
   */
  public function setIdUtilisateur($id_utilisateur): self
  {
    $this->id_utilisateur = $id_utilisateur;

    return $this;
  }

  /**
   * Get the value of nom_utilisateur
   */
  public function getNomUtilisateur()
  {
    return $this->nom_utilisateur;
  }

  /**
   * Set the value of nom_utilisateur
   */
  public function setNomUtilisateur($nom_utilisateur): self
  {
    $this->nom_utilisateur = $nom_utilisateur;

    return $this;
  }

  /**
   * Get the value of prenom_utilisateur
   */
  public function getPrenomUtilisateur()
  {
    return $this->prenom_utilisateur;
  }

  /**
   * Set the value of prenom_utilisateur
   */
  public function setPrenomUtilisateur($prenom_utilisateur): self
  {
    $this->prenom_utilisateur = $prenom_utilisateur;

    return $this;
  }

  /**
   * Get the value of email_utilisateur
   */
  public function getEmailUtilisateur()
  {
    return $this->email_utilisateur;
  }

  /**
   * Set the value of email_utilisateur
   */
  public function setEmailUtilisateur($email_utilisateur): self
  {
    $this->email_utilisateur = $email_utilisateur;

    return $this;
  }

  /**
   * Get the value of mdp_utilisateur
   */
  public function getMdpUtilisateur()
  {
    return $this->mdp_utilisateur;
  }

  /**
   * Set the value of mdp_utilisateur
   */
  public function setMdpUtilisateur($mdp_utilisateur): self
  {
    $this->mdp_utilisateur = $mdp_utilisateur;

    return $this;
  }

  /**
   * Get the value of activiteCompte_utilisateur
   */
  public function getActiviteCompteUtilisateur()
  {
    return $this->activiteCompte_utilisateur;
  }

  /**
   * Set the value of activiteCompte_utilisateur
   */
  public function setActiviteCompteUtilisateur($activiteCompte_utilisateur): self
  {
    $this->activiteCompte_utilisateur = $activiteCompte_utilisateur;

    return $this;
  }

  /**
   * Get the value of id_role
   */
  public function getIdRole()
  {
    return $this->id_role;
  }

  /**
   * Set the value of id_role
   */
  public function setIdRole($id_role): self
  {
    $this->id_role = $id_role;

    return $this;
  }
}