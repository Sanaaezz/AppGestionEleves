<?php

include "./header.php";

?>
<div class="">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="acceuil-tab" data-toggle="tab" href="accueil.php" role="tab" aria-selected="false">Acceuil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="promo-tab" data-toggle="tab" href="promotions.php" role="tab" aria-selected="false">Promotions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="utilisateurs-tab" data-toggle="tab" href="utilisateurs.php" role="tab" aria-selected="true">Utilisateurs</a>
    </li>
  </ul>
</div>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade " id="acceuil" role="tabpanel" aria-labelledby="acceuil-tab">...</div>
  <div class="tab-pane fade" id="promotions" role="tabpanel" aria-labelledby="promo-tab">...</div>
  <div class="tab-pane fade show active" id="utilisateurs" role="tabpanel" aria-labelledby="utilisateurs-tab">...</div>
</div>