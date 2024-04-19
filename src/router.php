<?php

use src\Controllers\HomeController;
use src\Controllers\UtilisateurControlleur;

// var_dump($_SERVER);
$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$routeComposee = ltrim($route, HOME_URL);
$routeComposee = rtrim($routeComposee, '/');
$routeComposee = explode('/', $routeComposee);

$HomeController = new HomeController;
// var_dump($routeComposee);

switch ($route) {
  case HOME_URL:
    if (isset($_SESSION['connecté'])) {
      header('location: ' . HOME_URL . 'dashboard');
      die;
    } else {
      $HomeController->index();
    }
    break;

  case HOME_URL . "login":
    $userController = new UtilisateurControlleur();
    $data = file_get_contents("php://input");
    $user = json_decode($data, true);
    $email = htmlspecialchars(strip_tags(trim($user["email_utilisateur"])));
    $password = htmlspecialchars(strip_tags(trim($user["password_utilisateur"])));

    $reponse =   $userController->login($email, $password);

    echo json_encode($reponse);


    break;


    case HOME_URL :
    header('location: ' . HOME_URL . 'connexion');
      break;


  case HOME_URL . 'deconnexion':
    $HomeController->quit();

    break;

  case $routeComposee[0] == 'dashboard':
    if ($HomeController->dash()) {

      switch ($route) {
        case $routeComposee[1] == 'accueil':
          $HomeController->accueil();
          break;
        case $routeComposee[2] == 'promotions':
          $HomeController->promotions();
          break;
        case $routeComposee[3] == 'utilisateurs':
          $HomeController->utilisateurs();
          break;
        default:
          header('location: ' . HOME_URL . 'connexion');
          die;
          break;
      }
    }
    break;
}
