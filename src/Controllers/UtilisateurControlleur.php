<?php

namespace src\Controllers;

use src\Repositories\UtilisateurRepository;
use src\Services\Reponse;

class UtilisateurControlleur
{
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
    // echo json_encode($reponse);
    return $reponse;
  }

  public function auth()
  {
    if (isset($_POST['email']) && isset($_POST['password'])) {
      $utilisateurRepo = new UtilisateurRepository;

      $utilisateur = $utilisateurRepo->getUtilisateurbyEmail($_POST['email']);

      if ($utilisateur && password_verify($_POST['password'], $utilisateur->getMdpUtilisateur())) {
        $_SESSION['connecté'] = true;
        $_SESSION['utilisateur'] = serialize($utilisateur);
        header('location: ' . HOME_URL . 'dashboard');
        exit;
      } else {
        header('location: ' . HOME_URL . 'connexion?erreur=denied');
      }
    }
  }
}
