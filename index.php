<?php

include "./header.php";

?>



<body>
  <div id="login">
    <h3 class="text-center pt-5">Bienvenue</h3>
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12 text-black">
            <form id="login-form" class="form" action="accueil.php" method="post">

              <div class="form-group">
                <label for="username" class="  ">Email * </label><br>
                <input type="email" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password" class="">Mot de passe *</label><br>
                <input type="password" name="password" id="password" class="form-control">
              </div>

              <div id="register-link" class="mx-auto">
                <input class="btn btn-primary mx-auto" type="submit" value="Connexion">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>