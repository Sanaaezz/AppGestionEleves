<?php

namespace src\Models;

Class Cours{
  private $id_cours;
  private $nom_cours;
  private $date_cours;
  private $heureDebut_cours;
  private $heureFin_cours;
  private $code_cours;
  private $id_promo;

  function __construct(array $datas = array())
  {
    foreach ($datas as $key => $value) {
      $this->$key = $value;
    }
  }


  /**
   * Get the value of id_cours
   */
  public function getIdCours()
  {
    return $this->id_cours;
  }

  /**
   * Set the value of id_cours
   */
  public function setIdCours($id_cours): self
  {
    $this->id_cours = $id_cours;

    return $this;
  }

  /**
   * Get the value of nom_cours
   */
  public function getNomCours()
  {
    return $this->nom_cours;
  }

  /**
   * Set the value of nom_cours
   */
  public function setNomCours($nom_cours): self
  {
    $this->nom_cours = $nom_cours;

    return $this;
  }

  /**
   * Get the value of date_cours
   */
  public function getDateCours()
  {
    return $this->date_cours;
  }

  /**
   * Set the value of date_cours
   */
  public function setDateCours($date_cours): self
  {
    $this->date_cours = $date_cours;

    return $this;
  }

  /**
   * Get the value of heureDebut_cours
   */
  public function getHeureDebutCours()
  {
    return $this->heureDebut_cours;
  }

  /**
   * Set the value of heureDebut_cours
   */
  public function setHeureDebutCours($heureDebut_cours): self
  {
    $this->heureDebut_cours = $heureDebut_cours;

    return $this;
  }

  /**
   * Get the value of heureFin_cours
   */
  public function getHeureFinCours()
  {
    return $this->heureFin_cours;
  }

  /**
   * Set the value of heureFin_cours
   */
  public function setHeureFinCours($heureFin_cours): self
  {
    $this->heureFin_cours = $heureFin_cours;

    return $this;
  }

  /**
   * Get the value of code_cours
   */
  public function getCodeCours()
  {
    return $this->code_cours;
  }

  /**
   * Set the value of code_cours
   */
  public function setCodeCours($code_cours): self
  {
    $this->code_cours = $code_cours;

    return $this;
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
}