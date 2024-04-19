<?php

use src\Models\Promo;
use src\Repositories\CoursRepository;
use src\Repositories\PromoRepository;

$coursRepo = new CoursRepository;

?>

<section id="accueilSection">
  <div class="">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="acceuil-tab" data-toggle="tab" href="" role="tab" aria-selected="true">Acceuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="promo-tab" data-toggle="tab" href="" role="tab" aria-selected="false">Promotions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="utilisateurs-tab" data-toggle="tab" href="" role="tab" aria-selected="false">Utilisateurs</a>
      </li>
    </ul>
  </div>
  

  
  <div class="tab-pane fade show active m-4" id="acceuil" role="tabpanel" aria-labelledby="acceuil-tab">
    
    <div class="tab-pane fade show mx-auto" id="accueil" role="tabpanel" aria-labelledby="accueil-tab">
      

      <h2>Cours du jour</h2>
        <div class="d-flex flex-column">
          <p>date du cours</p>
          <h3> Nom promo - creneau du cours</h3>
          <p>nombre de participants</p>
          <label for="codeCours">Code *</label>
          <input type="text" name="codeCours" id="codecours">
        </div>
        <div>
          <!--_________________ JS a faire ____________________-->
          <button class="btn btn-primary" onclick="validerPresence()">Valider presence</button>
          <button class="btn btn-warning" onclick="signatureEnCours()">Signatures en cours</button>
          <button class="btn btn-success" onclick="signatureRecueillies()">Signatures recueillies</button>
        </div>


    </div>
</section>