<?php

use src\Models\Database;

include __DIR__ . "/Includes/header.php";
// <?= HOME_URL>dashboard
$db = new Database;

?>



<div id="connexion">
  <h3 class="text-center pt-5">Bienvenue</h3>
  <form class="container" action="<?= HOME_URL?>dashboard" method="POST">
    <div id="login-row" class="row justify-content-center align-items-center">
      <div id="login-column" class="col-md-6">
        <div id="login-box" class="col-md-12 text-black">
          <div id="login-form" class="form">

            <!-- <php if (isset($succes)) { ?>
              <div class="succes">
                <p><= $succes ?></p>
              </div>
            <php } ?> -->

            <div class="form-group">
              <label for="email">Email * </label><br>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password">Mot de passe * </label><br>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <!-- <php if (isset($erreur)) { ?>
              <div class="echec">
                <p>Mot de passe ou identifiant incorrect.</p>
              </div>
            <php } ?> -->
            <div id="inConnexion" class="mx-auto">
              <button class="btn btn-primary mx-auto" onclick="connexion()"  >Connexion</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<?php
?>