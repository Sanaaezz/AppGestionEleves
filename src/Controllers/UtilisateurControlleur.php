<?php

namespace src\Controllers;

use src\Repositories\UtilisateurRepository;
use src\Services\Reponse;

class UtilisateurControlleur{
  private $UserRepo;
  use Reponse;

  public function __construct()
  {
    $this->UserRepo = new UtilisateurRepository();
  }

  public function login($email, $password)
  {
    $userRepo = new UtilisateurRepository();
    $reponse = $userRepo->login($email, $password);
    echo json_encode($reponse);
  }
}
