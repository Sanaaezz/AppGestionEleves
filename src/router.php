<?php

use src\Controllers\HomeController;

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$routeComposee = ltrim($route, HOME_URL);
$routeComposee = rtrim($routeComposee, '/');

$routeComposee = explode('/', $routeComposee);



$HomeController = new HomeController;


switch ($route) {
  case HOME_URL:
    if (isset($_SESSION['connecté'])) {
      header('location: ' . HOME_URL . 'dashboard');
      die;
    } else {
      $HomeController->index();
    }
    break;

  case HOME_URL . 'connexion':
    if (isset($_SESSION['connecté'])) {
      header('location: ' . HOME_URL . 'dashboard');
      die;
    } else {
      if ($methode === 'GET') {
        $HomeController->auth($_POST['password']);
      } else {
        $HomeController->index();
      }
    }
    break;

  case HOME_URL . 'deconnexion':
    $HomeController->quit();
    break;
}
