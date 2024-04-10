<?php

Class Role{
  private $id_role;
  private $nom_role;

  function __construct(array $datas = array())
  {
    foreach ($datas as $key => $value) {
      $this->$key = $value;
    }
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

  /**
   * Get the value of nom_role
   */
  public function getNomRole()
  {
    return $this->nom_role;
  }

  /**
   * Set the value of nom_role
   */
  public function setNomRole($nom_role): self
  {
    $this->nom_role = $nom_role;

    return $this;
  }
}