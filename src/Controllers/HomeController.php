<?php


namespace src\Controllers;

use src\Repositories\UtilisateurRepository;
use src\Services\Reponse;

class HomeController
{
  use Reponse;

  public function index(): void
  {
    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
    $this->render('connexion', ['erreur' => $erreur]);
    
  }

  public function dash(): void
  {
    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
    $this->render('dashboard', ['erreur' => $erreur]);
  }

  // public function auth(string $password): void
  // {
  //   if ($password) {
  //     $_SESSION['connecté'] = TRUE;
  //     header('location: ' . HOME_URL . 'dashboard');
  //     die();
  //   } else {
  //     header('location: ' . HOME_URL . '?erreur=connexion');
  //   }
  // }


  public function auth()
  {
    if (isset($_POST['email']) && isset($_POST['password'])) {
      $UserRepo = new UtilisateurRepository;

      $user = $UserRepo->getUtilisateurbyEmail($_POST['email']);

      if ($user && password_verify($_POST['password'], $user->getMdpUtilisateur())) {
        $_SESSION['connecté'] = true;
        $_SESSION['utilisateur'] = serialize($user);

        header('location: ' . HOME_URL . 'dashboard');
        exit;
      } else {
        header('location: ' . HOME_URL . 'connexion?erreur=denied');
      }
    }
  }
  // construire la méthode quit(), qui permet de se déconnecter.
  public function quit(): void
  {
    session_destroy();
    header('location: ' . HOME_URL .'connexion');
  }

  // Faire une méthode qui vérifie si on est connecté ou pas. Renverra true ou false.
  public function isAuth(): bool
  {
    if (isset($_SESSION['connecté'])) {
      return true;
    } else {
      return false;
    }
  }

  // Construire la méthode page404(), qui affichera
  // "La page est introuvable."
  public function page404(): void
  {
    header("HTTP/1.1 404 Not Found");
    echo "La page est introuvable.";
  }
}
