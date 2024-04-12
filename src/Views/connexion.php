<?php
include __DIR__ . "/Includes/header.php";

?>
<div id="connexion">
  <h3 class="text-center pt-5">Bienvenue</h3>
  <div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
      <div id="login-column" class="col-md-6">
        <div id="login-box" class="col-md-12 text-black">
          <form id="login-form" class="form" action="<?= HOME_URL ?>dashboard" method="POST">

            <div class="form-group">
              <label for="email" class="">Email * </label><br>
              <input type="email" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="password" class="">Mot de passe * </label><br>
              <input type="password" name="password" id="password" class="form-control">
            </div>

            <div id="inConnexion" class="mx-auto">
              <input class="btn btn-primary mx-auto" type="submit" value="Connexion">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
?>