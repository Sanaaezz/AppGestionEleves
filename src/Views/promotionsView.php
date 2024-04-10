<?php

include __DIR__ . '/Includes/header.php';
?>
<div class="">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link " id="acceuil-tab" data-toggle="tab" href="accueilView.php" role="tab" aria-selected="false">Acceuil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" id="promo-tab" data-toggle="tab" href="promotionsView.php" role="tab" aria-selected="true">Promotions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="utilisateurs-tab" data-toggle="tab" href="utilisateursView.php" role="tab" aria-selected="false">Utilisateurs</a>
    </li>
  </ul>
</div>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade " id="acceuil" role="tabpanel" aria-labelledby="acceuil-tab">...</div>
  <div class="tab-pane fade show active" id="promotions" role="tabpanel" aria-labelledby="promo-tab">


    <!-- toutes les promotions tableau des promotions de Simplon -->
    <div>
      <h2>Toutes les promotions</h2>
      <p>tableau des promotions de Simplon</p>

    </div>


    <!-- creation d'une promotion -->
    <div class="d-flex flex-column CreaPromo">
      <h2>Creation d'une promotion</h2>

      <label for="">Nom de la promotion</label>
      <input type="text">

      <label for="">Date de début</label>
      <input type="date">

      <label for="">Date de fin</label>
      <input type="date">

      <label for="">Place(s) disponible(s)</label>
      <input type="nomber">


    </div>



  </div>
  <div class="tab-pane fade" id="utilisateurs" role="tabpanel" aria-labelledby="utilisateurs-tab">...</div>
</div>