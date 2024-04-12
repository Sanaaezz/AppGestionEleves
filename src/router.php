<?php

use src\Controllers\HomeController;

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

  case HOME_URL:
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

  // case HOME_URL . 'dashboard':
  //   $HomeController->dash();
  //   break;


  case HOME_URL . 'deconnexion':
    $HomeController->quit();
    break;

  case $routeComposee[0] == 'dashboard':
    if($HomeController->dash()){
      switch ($route) {
        case $routeComposee[1] == 'accueil':
          $HomeController->accueil();
          break;
        case $routeComposee[2]=='promotions':
          $HomeController->promotions();
          break;
          case $routeComposee[3] == 'utilisateurs':
          $HomeController->utilisateurs();
            break;
        default:
          # code...
          break;
      }
    }
    break;
 

  }
