<?php


namespace src\Controllers;

use src\Repositories\UtilisateurRepository;
use src\Services\Reponse;

// var_dump($_POST);

class HomeController
{
  use Reponse;

  public function index(): void{
    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
    $this->render('connexion', ['erreur' => $erreur]);
    
  }

  public function dash(): void {
    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
    $this->render('dashboard', ['erreur' => $erreur]);
  }
  
  public function accueil():void{
    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
    $this->render('accueil', ['erreur' => $erreur]);
  }

  public function promotions(): void {
    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
    $this->render('promotions', ['erreur' => $erreur]);
  }

  public function utilisateurs(): void {
    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
    $this->render('utilisateurs', ['erreur' => $erreur]);
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



  public function quit(): void
  {
    session_destroy();
    header('location: ' . HOME_URL .'connexion');
  }

  public function page404(): void {
    header("HTTP/1.1 404 Not Found");
    echo "La page est introuvable.";
  }
}
