<?php

Class Present{
  private $id_utilisateur;
  private $id_cours;
  private $absence;
  private $retard;

  function __construct(array $datas = array())
  {
    foreach ($datas as $key => $value) {
      $this->$key = $value;
    }
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
   * Get the value of absence
   */
  public function getAbsence()
  {
    return $this->absence;
  }

  /**
   * Set the value of absence
   */
  public function setAbsence($absence): self
  {
    $this->absence = $absence;

    return $this;
  }

  /**
   * Get the value of retard
   */
  public function getRetard()
  {
    return $this->retard;
  }

  /**
   * Set the value of retard
   */
  public function setRetard($retard): self
  {
    $this->retard = $retard;

    return $this;
  }
}