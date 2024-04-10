<?php

include "./header.php";

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
  <div class="tab-pane fade show active" id="promotions" role="tabpanel" aria-labelledby="promo-tab">...</div>
  <div class="tab-pane fade" id="utilisateurs" role="tabpanel" aria-labelledby="utilisateurs-tab">...</div>
</div>