<?php

namespace src\Models;

Class Promo{
  private $id_promo;
  private $nom_promo;
  private $dateDebut_promo;
  private $dateFin_promo;
  private $nombre_promo;

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
   * Get the value of nom_promo
   */
  public function getNomPromo()
  {
    return $this->nom_promo;
  }

  /**
   * Set the value of nom_promo
   */
  public function setNomPromo($nom_promo): self
  {
    $this->nom_promo = $nom_promo;

    return $this;
  }

  /**
   * Get the value of dateDebut_promo
   */
  public function getDateDebutPromo()
  {
    return $this->dateDebut_promo;
  }

  /**
   * Set the value of dateDebut_promo
   */
  public function setDateDebutPromo($dateDebut_promo): self
  {
    $this->dateDebut_promo = $dateDebut_promo;

    return $this;
  }

  /**
   * Get the value of dateFin_promo
   */
  public function getDateFinPromo()
  {
    return $this->dateFin_promo;
  }

  /**
   * Set the value of dateFin_promo
   */
  public function setDateFinPromo($dateFin_promo): self
  {
    $this->dateFin_promo = $dateFin_promo;

    return $this;
  }

  /**
   * Get the value of nombre_promo
   */
  public function getNombrePromo()
  {
    return $this->nombre_promo;
  }

  /**
   * Set the value of nombre_promo
   */
  public function setNombrePromo($nombre_promo): self
  {
    $this->nombre_promo = $nombre_promo;

    return $this;
  }
}