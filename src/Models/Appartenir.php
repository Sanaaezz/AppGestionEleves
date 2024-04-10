<?php 

Class Appartenir{
  private $id_promo;
  private $id_utilisateur;

  function __construct(array $datas = array())
  {
    foreach ($datas as $key => $value) {
      $this->$key = $value;
    }
  }

  /**
   * Get the value of id_promo
   */
  public function getIdPromo()
  {
    return $this->id_promo;
  }

  /**
   * Set the value of id_promo
   */
  public function setIdPromo($id_promo): self
  {
    $this->id_promo = $id_promo;

    return $this;
  }

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
}