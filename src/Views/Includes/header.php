<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Gestion</title>
  <link rel="stylesheet" href="./asset/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" defer></script> -->
  <!-- <php if (isset($_SESSION['connecté'])) { ?>
    <script>
      const HOME_URL = "<= HOME_URL ?>";
    </script>
  <php } ?> -->
  <script src="./asset/dash.js"></script>

</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">SIMPLON</a>
      <!-- <a class=" d-flex btn btn-outline-success Inscription" href="<= HOME_URL?>inscription">Inscription</a> -->
      <a class=" d-flex btn btn-outline-success deconnexion" href="<?=HOME_URL?>connexion" >Deconnexion</a>

    </div>
  </nav>